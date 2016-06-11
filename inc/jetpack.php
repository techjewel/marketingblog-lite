<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package marketingblog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
if ( ! function_exists( 'marketingblog_lite_jetpack_setup' ) ) :
	function marketingblog_lite_jetpack_setup() {
		add_theme_support( 'infinite-scroll', array(
			'type'      => 'click',
			'container' => 'main',
			'footer'    => 'page',
		) );
	}
endif;
add_action( 'after_setup_theme', 'marketingblog_lite_jetpack_setup' );
