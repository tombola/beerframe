<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package beerframe
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function beerframe_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'beerframe_jetpack_setup' );
