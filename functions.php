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

add_action( 'wp_head', 'rf_add_ga' );
if ( ! function_exists( 'rf_add_ga' ) ) {
	function rf_add_ga() {
			echo '<!-- Google tag (gtag.js) -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-FEX6TDPNPS"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag("js", new Date());
			
			  gtag("config", "G-FEX6TDPNPS");
			</script>';
	}
}
