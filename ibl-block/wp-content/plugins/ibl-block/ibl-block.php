<?php
/**
 * Plugin Name:     Ibl-block
 * Description:     A block to post a different wordpress instance
 * Version:         0.1.0
 * Author:          Deo
 * License:         GPL-2.0-or-later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:     ibl-block
 *
 * @package         ibl-block
 */

/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function ibl_block_ibl_block_block_init() {
	$dir = dirname( __FILE__ );

	$script_asset_path = "$dir/build/index.asset.php";
	if ( ! file_exists( $script_asset_path ) ) {
		throw new Error(
			'You need to run `npm start` or `npm run build` for the "ibl-block/ibl-block" block first.'
		);
	}
	$index_js     = 'build/index.js';
	$script_asset = require( $script_asset_path );
	wp_register_script(
		'ibl-block-ibl-block-block-editor',
		plugins_url( $index_js, __FILE__ ),
		$script_asset['dependencies'],
		$script_asset['version']
	);
	wp_set_script_translations( 'ibl-block-ibl-block-block-editor', 'ibl-block' );

	$editor_css = 'build/index.css';
	wp_register_style(
		'ibl-block-ibl-block-block-editor',
		plugins_url( $editor_css, __FILE__ ),
		array(),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'build/style-index.css';
	wp_register_style(
		'ibl-block-ibl-block-block',
		plugins_url( $style_css, __FILE__ ),
		array(),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'ibl-block/ibl-block', array(
		'editor_script' => 'ibl-block-ibl-block-block-editor',
		'editor_style'  => 'ibl-block-ibl-block-block-editor',
		'style'         => 'ibl-block-ibl-block-block',
	) );
}
add_action( 'init', 'ibl_block_ibl_block_block_init' );
