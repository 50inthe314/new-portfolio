<?php
/**
 * Plugin Name:    Random Content Shortcode
 * Plugin URI:     https://nextgenthemes.com/plugins/random-content-shortcode/
 * Description:    Easy display random Text/HTML, including Shortcode generated content.
 * Version:        2.1.0
 * Author:         Nicolas Jonas
 * Author URI:     https://nextgenthemes.com
 * License:        GPL-3.0
 * License URI:    https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:    random-content-shortcode
 * Domain Path:    /languages
 */

namespace nextgenthemes\random_content_shortcode;

 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

function register_script() {

	wp_register_script(
		'random-content-shortcode',
		plugins_url( 'random-content-shortcode.js', __FILE__ ),
		array(),
		'2.0.1',
		true
	);
}

add_action( 'init', __NAMESPACE__ . '\\init' );

function init() {
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\register_script', -99 );
	add_shortcode( 'random_content', __NAMESPACE__ . '\\shortcode' );
	add_shortcode( 'random-content', __NAMESPACE__ . '\\shortcode' );
	add_filter( 'plugin_action_links_random-content-shortcode/random-content-shortcode.php', __NAMESPACE__ . '\\filter_plugin_action_links' );
}

function shortcode( $atts, $content = null ) {

	$pairs        = array( 'separator' => "\n" );
	$atts         = shortcode_atts( $pairs, $atts, 'random_content' );
	$pieces       = explode( $atts['separator'], $content );
	$final_pieces = array();

	foreach ( $pieces as $key => $value ) {
		$html = trim( wpautop( do_shortcode( $value ) ) );
		if ( in_array( $value, array( '', '<p>', '</p>', '<br>', '<br />', '</p><p>', '<p></p>' ) ) ) {
			continue;
		}
		$final_pieces[ $key ] = $html;
	}

	$content = '<div class="random-content-piece">' . implode( '</div><div class="random-content-piece">', $final_pieces ) . '</div>';
	$content = str_replace( '<p></p>', '', $content );

	wp_enqueue_script( 'random-content-shortcode' );

	return '<script type="text/html" class="random-content-shortcode">' . $content . '</script>';
}

function filter_plugin_action_links( $links ) {

	$extra_links['donate'] = sprintf( '<a href="%s"><strong style="display: inline;">%s</strong></a>', 'https://nextgenthemes.com/donate/', __( 'Donate', 'random-content-shortcode' ) );
	return array_merge( $extra_links, $links );
}
