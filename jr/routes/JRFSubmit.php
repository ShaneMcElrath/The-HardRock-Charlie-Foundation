<script>
  console.log('yo');
</script>



<?php 




add_action( 'rest_api_init', function () {
  register_rest_route( 'rangermac/v1', '/latest-posts/', array(
      'methods'  => 'GET',
      'callback' => 'my_custom_callback',
  ));
});

function my_custom_callback( $request_data ) {
  // Do something here. For instance, return some data:
  return array( 'message' => 'Hello from your endpoint!' );
}


?>