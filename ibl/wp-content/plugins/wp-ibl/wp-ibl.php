<?php


/**
 * @package IBL
 */
/*
Plugin Name: IBL Rest API
Plugin URI: https://akismet.com/
Description: A dummmy rest api
Version: 4.1.7
Author: Deo
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: ibl
*/
function create_ibl_table() {
  global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'greeting';

	$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
		name varchar(30) NOT NULL,
		UNIQUE KEY id (id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}

add_action( 'rest_api_init', function () {
  register_rest_route('ibl/api', 'interview', array(
    'methods' => 'POST',
    'callback' => 'save_greeting',
    'permission_callback' => function() {
      return is_user_logged_in();
    },
    'args' => array(
      'greeting' => array(
       'required'=>true,
       'type' => 'string'
      )
    )
  ));

  register_rest_route('ibl/api', 'interview', array(
    'methods' => 'GET',
    'callback' => 'show_greeting',
    'permission_callback' => '__return_true'
  ));
});


function save_greeting(WP_REST_Request $request) {
  global $wpdb;       
  $param = $request->get_param('greeting');
  if(!$param || !is_string($param)) {
    return new \WP_Error('invalid query parameter');
  }
  $wpdb->insert($wpdb->prefix . 'greeting', array('name' => $param), array('%s'));
  return new \WP_REST_Response(array('message' => 'Successfully saved greeting', 'success' => true));
}


function show_greeting() {
  global $wpdb;
  $results = $wpdb->get_results( 
    $wpdb->prepare("SELECT * FROM {$wpdb->prefix}greeting ORDER BY time DESC LIMIT 1") 
 );

 if(empty($results)) {
  return new \WP_Error(404, 'No Items Found');
 }
  return new \WP_REST_Response($results[0]);
}