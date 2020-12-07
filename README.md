# word-press-take-home
Word Press theme, Plugin, Rest API and Gutenberg Block

## Tools used for development

  - (WP-OAUTH)[https://wp-oauth.com/]
  
  - Gutenberg Block
  
  - @wordpress/blocks
  
	- wordpress/components
  
## Issues

- Oauth2 not fully implemented as describe in the document since the `wp-oauth`  plugin requires payment for full features.
  Implementation was done using authorization_code with involves a two step process to generate token [link](https://wp-oauth.com/docs/general/grant-types/authorization-code/)
  
  ### Setup 

  - Clone Repos to your `htdocs` folder
  
  - Change configurations for the database and user in `wp-config.php`
  
  - To run Block. Cd into `ibl-block/wp-content/plugins/ibl-block`
  
  - Run `npm install` to install dependencies and `npm start` or `npm run build`
  
  - To install the theme for IBL header. You can zip the ibl-header theme in the themes folder
  
 
