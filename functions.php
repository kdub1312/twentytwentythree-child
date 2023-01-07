<?php
/* Enqueue Styles */
// if ( ! function_exists('thr_enqueue_styles') ) {
//     function thr_enqueue_styles() {
//         wp_enqueue_style( 'twenty-twenty-three-style-child', get_template_directory_uri() .'/style.css' );
//     }
//     add_action('wp_enqueue_scripts', 'thr_enqueue_styles');
// }

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
	);
}