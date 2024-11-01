<?php 
/*
Plugin Name: WP EnvyBox
Description: Services for the site, allowing you to increase the conversion to leads.
Version: 1.0
Author: PROMO
Author URI: https://promo-z.ru/
Text Domain: wp-envybox
Domain Path: /languages/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once('admin/admin-page.php');

function envybox_add_code(){
  $options = get_option( 'envybox_options' );
  $code = $options['integration'];
  if($code!=''){
    echo $code;
  }
}
add_action('wp_footer', 'envybox_add_code', 99);
?>