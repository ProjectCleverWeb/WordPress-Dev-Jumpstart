<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Underscores
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function underscores_theme_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'underscores_theme_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function underscores_theme_jetpack_setup
add_action( 'after_setup_theme', 'underscores_theme_jetpack_setup' );

function underscores_theme_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function underscores_theme_infinite_scroll_render