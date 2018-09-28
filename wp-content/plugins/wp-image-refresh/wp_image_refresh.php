<?php
/*
  Plugin Name: wp image refresh
  Plugin URI: http://cueblocks.com
  Text Domain: wp_image_refresh
  Description: A very basic image reload plugin
  Version: 1.9
  Author: Cueblocks
  Author URI: http://cueblocks.com
  License: GPL2

 */


/* We need to make sure our functions can be seen! */
include_once dirname(__FILE__) . '/functions.php';

register_activation_hook(__FILE__, "wp_image_refresh_activated");
register_deactivation_hook(__FILE__, "wp_image_refresh_deactivated");
register_uninstall_hook(__FILE__, "wp_image_refresh_delete");

/* This action will call the function to create a menu button */
add_action('admin_menu', 'wp_image_refresh');
add_action('admin_submenu', 'wp_submenu');

/* This will load our admin panel javascript and CSS */
add_action('admin_enqueue_scripts', 'wp_image_refresh_admin_scripts');

add_shortcode('wp-image-refresh', 'loadslider');
?>
