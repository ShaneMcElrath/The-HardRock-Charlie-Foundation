<?php
/*
Plugin Name: HCF Plugin
Description: Code for all HCF related activities.
Version: 1.0
Author: Shane McElrath
*/


add_action( 'rest_api_init', function () {
  register_rest_route( 'rangermac/v1', '/my-endpoint/', array(
      'methods'  => 'GET',
      'callback' => 'rangermac_custom_callback',
  ));
});

function rangermac_custom_callback( $request_data ) {
  // Your custom logic here.
  return array( 'message' => 'Hello from your RangerMac endpoint!' );
}

?>