<?php
/*
Plugin Name: Nifty Coming Soon & Maintenance page
Plugin URI:  https://wordpress.org/plugins/nifty-coming-soon-and-under-construction-page/
Description: Easy to setup Coming soon, Maintenance and Under Construction page. It features Responsive design, Countdown timer, Animations, Live Preview, Background Slider, Subscription form and more.
Version:     1.3
Author:      WebFactory Ltd
Author URI:  https://webfactoryltd.com/
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


// Display status of the coming soon page in the admin bar
add_action('admin_bar_menu', 'nifty_cs_custom_menu', 1000);

function nifty_cs_custom_menu()
{
    global $wp_admin_bar;
	$value=ot_get_option( 'coming_soon_mode_on___off' );
    if ( $value != "off" ) {

    $argsParent=array(
        'id' => 'niftycs_custom_menu',
        'title' => 'Nifty Coming Soon is Enabled',
        'href' => admin_url('?page=niftycs-options#section_general_settings'),
		'meta'   => array( 'class' => 'red-hot-button' ),

    );
    $wp_admin_bar->add_menu($argsParent);
	}
}

// Coming soon awareness button color

function nifty_cs_admin_custom_colors() {
   echo '<style type="text/css">
           #wp-admin-bar-niftycs_custom_menu a{
	background:#80002E !important;
-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
    color:#FFFFFF !important;
}
#wp-admin-bar-niftycs_custom_menu a:active {
background:#88143E !important;
color:#F3F3F3 !important;
-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;}
	#page-niftycs_options {
    max-width: 80% !important;
}
.wrap.settings-wrap .ui-tabs-nav li a {color:#353535 !important}
#option-tree-header {background:#23282D !important;border-bottom:#79042E solid 8px !important; color:#FFFFFF !important;padding: 5px !important;}
#option-tree-header #option-tree-version span {border-left:none !important;}
.format-setting-wrap, .option-tree-sortable .format-settings {padding: 10px 0 10px 0 !important;}
.wp-not-current-submenu.menu-top.toplevel_page_niftycs-options.menu-top-last:hover {
    background: #80002E !important;
    color: #FFF !important;
}
         </style>';
}

add_action('admin_head', 'nifty_cs_admin_custom_colors');

// Redirection starts here

function nifty_get_plugin_version() {
  $plugin_data = get_file_data(__FILE__, array('version' => 'Version'), 'plugin');

  return $plugin_data['version'];
} // nifty_get_plugin_version

function nifty_cs_redirect()
        {

			$request_uri = trailingslashit(strtolower(@parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
			// some URLs have to be accessible at all times
			if ($request_uri == '/wp-admin/' ||
				$request_uri == '/feed/' ||
				$request_uri == '/feed/rss/' ||
				$request_uri == '/feed/rss2/' ||
				$request_uri == '/feed/rdf/' ||
				$request_uri == '/feed/atom/' ||
				$request_uri == '/admin/' ||
				$request_uri == '/login/' ||
				$request_uri == '/wp-login.php') {
				return;
			}


			// Check if the coming soon mode is enabled in the general settings

			$value = ot_get_option( 'coming_soon_mode_on___off' );

			if ( $value != "off" ) {

				if(!is_feed())
				{
                	// Guests are redirected to the coming soon page
	            	if ( !is_user_logged_in()  )
                	{
                        // Path to custom coming soon page
                    	$template_path = plugin_dir_path(__FILE__).'template/index.php';
	                	include($template_path);
			        	exit();
                	}
				}
                // Check user assigned role
	            if (is_user_logged_in() )
                {
                    // Get logined in user role
		            global $current_user;
		            $LoggedInUserID = $current_user->ID;
		            $UserData = get_userdata( $LoggedInUserID );
		            // If user is not having administrator, editor, author or contributor role he will be server the coming soon page too :)
		            if($UserData->roles[0] == "subscriber")
		            {
                        if(!is_feed())
                        {
		                    $template_path = plugin_dir_path(__FILE__).'template/index.php';
	                       include($template_path);
			               exit();
		                }
                    }
		        }
            }
		}

// Live Preview

add_action('init','nifty_cs_get_preview');

function nifty_cs_get_preview ()
{

	 if (  (isset($_GET['get_preview']) && $_GET['get_preview'] == 'true') )
		{

			 $template_path = plugin_dir_path(__FILE__).'template/index.php';
			 include($template_path);
			 exit();
		}
}

// Prevent wp-login.php to be blocked by the Coming soon page.

add_action('init','nifty_cs_skip_redirect_on_login');

function nifty_cs_skip_redirect_on_login ()
{
	global $currentpage;
	if ('wp-login.php' == $currentpage)
		{
		return;
		} else
			{
			 add_action( 'template_redirect', 'nifty_cs_redirect' );
			}
}

add_action( 'wp_ajax_nifty_subscribe', 'nifty_subscribe' );
add_action( 'wp_ajax_nopriv_nifty_subscribe', 'nifty_subscribe' );

function nifty_subscribe() {
// Email Submit
if ( isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

      // Detect & prevent header injections
    $receiver = $_POST['email'];
    $mail_subject = 'New subscriber from coming soon page';
    $mail_text = 'Hello, we have a new subscription from the Coming soon page. Email address: ';
    $admin_mail = ot_get_option( 'enter_your_email_address' );
      $test = "/(content-type|bcc:|cc:|to:)/i";

    foreach ( $_POST as $key => $val ) {
        if ( preg_match( $test, $val ) ) {
          exit;
        }
	  }

  $sanitized_email = sanitize_email($receiver);
  $receiver_sanitized = $sanitized_email;

      // Send email
       mail(  $admin_mail, $mail_subject, $mail_text .$_POST['email'], "From:" . $_POST['email'] );

       die('1');
    }

} // nifty_subscribe

// remove options on deactivate
function nifty_deactivate() {
	delete_option('nifty_options');
}

register_deactivation_hook(__FILE__, 'nifty_deactivate');

// Calling plugins option panel
require_once 'admin/main-options.php';
require_once 'admin/ot-loader.php';

// Calling Google fonts array

require_once 'admin/includes/google-fonts.php';
