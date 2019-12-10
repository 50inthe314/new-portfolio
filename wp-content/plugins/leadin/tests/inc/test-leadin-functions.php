<?php
/**
 * Class LeadinFunctionsTest
 *
 * @package Leadin
 */

/**
 * Test leadin-functions.php
 */
class LeadinFunctionsTest extends WP_UnitTestCase {

	/**
	 * Test function leadin_get_affiliate_code
	 */
	public function test_get_affiliate_code() {
		add_option( 'hubspot_affiliate_code', 'foo' );
		$this->assertEquals( leadin_get_affiliate_code(), 'foo' );
		update_option( 'hubspot_affiliate_code', 'hubs.to/bar' );
		$this->assertEquals( leadin_get_affiliate_code(), 'bar' );
		update_option( 'hubspot_affiliate_code', 'https://xhubs.to/123' );
		$this->assertEquals( leadin_get_affiliate_code(), '123' );
		update_option( 'hubspot_affiliate_code', 'https://mbsy.co/xyz' );
		$this->assertEquals( leadin_get_affiliate_code(), 'xyz' );
		update_option( 'hubspot_affiliate_code', 'https://abc.xyz/1234' );
		$this->assertEquals( leadin_get_affiliate_code(), 'https://abc.xyz/1234' );
		delete_option( 'hubspot_affiliate_code' );
	}

	/**
	 * Test function leadin_get_subroutes
	 */
	public function test_get_iframe_src() {
		WP_Screen::get( 'hubspot_page_leadin' )->set_current_screen();

		// Signup.
		$this->assertRegExp( '/\/signup\/wordpress?/', leadin_get_iframe_src() );

		// Portal Id.
		add_option( 'leadin_portalId', 1 );
		$this->assertRegExp( '/\/1\/?/', leadin_get_iframe_src() );
		update_option( 'leadin_portalId', 2 );
		$this->assertRegExp( '/\/2\/?/', leadin_get_iframe_src() );

		// Screen.
		WP_Screen::get( 'hubspot_page_leadin_forms' )->set_current_screen();
		$this->assertRegExp( '/\/2\/forms?/', leadin_get_iframe_src() );

		// Sub-screen.
		$_GET = array(
			'leadin_route' => array(
				0 => 'foo',
				1 => 'bar',
			),
		);
		$this->assertRegExp( '/\/2\/forms\/foo\/bar?/', leadin_get_iframe_src() );

		// Root screen with sub-screen.
		WP_Screen::get( 'hubspot_page_leadin' )->set_current_screen();
		$this->assertRegExp( '/\/2\/foo\/bar?/', leadin_get_iframe_src() );

		delete_option( 'leadin_portalId' );
	}
}
