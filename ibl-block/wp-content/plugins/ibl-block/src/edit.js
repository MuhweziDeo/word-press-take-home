/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';
import { TextControl, PanelBody, PanelRow, Button  } from '@wordpress/components';
import {
    InspectorControls
} from '@wordpress/block-editor';
import React from 'react';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @param {Object} [props]           Properties passed from the editor.
 * @param {string} [props.className] Class name generated for the block.
 *
 * @return {WPElement} Element to render.
 */
export default function Edit( { className, attributes, setAttributes } ) {

	const[saveLoading, setSaveLoading] = React.useState(false);
	const[clientID, setClientID] = React.useState('');
	const[clientSecret, setClientSecret] = React.useState('');
	const[wordPressUrl, setWordPressUrl] = React.useState('');

	React.useEffect(() => {
		(async() => {
			await setContent();
		})()
	}, [])
	
	const updateFieldValue = async( val ) => {
		setAttributes( { content: val } );
	}

	const setContent = async() => {
		let url = wordPressUrl;
		if(!url || url !== 'http://192.168.64.2/ibl') {
			url = 'http://192.168.64.2/ibl'
		}
		const res = await fetch( url + '/wp-json/ibl/api/interview', {
			method: 'GET'
		})
		const data = await res.json();
		setAttributes({content: data.name})
		
	}

	const disabled = React.useMemo(() => {
		// Some basic validations to prevent empty fields
		if(!(clientID.length > 5) || !(clientSecret.length > 5) || !(wordPressUrl.length > 5) ) {
			return true;
		}
		return false
	},[clientID, clientSecret, wordPressUrl])

	console.log({disabled})

	const saveGreeting = async() => {
		setSaveLoading(true);
		let url = wordPressUrl;
		// Just to prevent typos and any errors
		if(!url || url !== 'http://192.168.64.2/ibl') {
			url = 'http://192.168.64.2/ibl'
		}
		try {
			const res = await fetch(url +`/oauth/authorize?client_id=${clientID}&response_type=code`);
			const code = res.url.split('code=')[1]?.split("&")[0];
			if(code) {
				const data = {
					code: code,
					'grant_type': 'authorization_code',
					'client_id': clientID,
					'client_secret': clientSecret
				}
				const response = await fetch( url + "/oauth/token",  {
					method: 'Post',
					body: JSON.stringify(data),
					headers: {
						'content-type': 'application/json',
						'accept': 'application/json'
					}
				})
				const {access_token}  = await response.json();

				if(access_token) {
					const res = await fetch( url + '/wp-json/ibl/api/interview?greeting='+ attributes.content, {
						method: 'POST',
						headers: {
							authorization: `Bearer ${access_token}`
						}
					})
					alert('Content Saved')
					await setContent();
				}
			}
			setSaveLoading(false);

			} catch (error) {
				setSaveLoading(false);
			}
	}

	return (
		<div>
			<InspectorControls>
				<PanelBody title="Parameters">
					<PanelRow>
						<TextControl
							value={wordPressUrl}
							placeholder="Enter URL to word press site"
							label="Word Press URL"
							onChange={(val) => setWordPressUrl(val)}
						/>
						
					</PanelRow>

					{
						!wordPressUrl && <p style={{color: 'red'}}> Site URL is required</p>
					}

					<PanelRow>
						<TextControl
						value={clientID}
							placeholder="Enter client ID"
							label="CLient ID"
							onChange={(val) => setClientID(val)}
						/>
					</PanelRow>
						{
							!clientID && <p style={{color: 'red'}}> clientID is required</p>
						}

					<PanelRow>
						<TextControl
							value={clientSecret}
							placeholder=""
							label="Client Secret"
							onChange={(val) => setClientSecret(val)}
						/>

					</PanelRow>

					{
						!clientSecret && <p style={{color: 'red'}}> Client Secret is required</p>
					}
				</PanelBody>
				
			</InspectorControls>
			<TextControl
				placeholder="Enter your gretting here"
				label="Greeting Text"
				onChange={(value) => updateFieldValue(value)}
			/>
			<Button disabled={saveLoading || disabled} onClick={saveGreeting} className={className} style={{background: 'red', color: 'white'}}>Save</Button>
		</div>
	);
}
