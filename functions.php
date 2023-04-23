<?php

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

// add_action( 'wp_footer', 'prefix_footer_code' );
// function prefix_footer_code() {
// 		echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3019479180746594"
// 		crossorigin="anonymous"></script>
// 			<ins class="adsbygoogle"
// 				style="display:block; text-align:center;"
// 				data-ad-layout="in-article"
// 				data-ad-format="fluid"
// 				data-ad-client="ca-pub-3019479180746594"
// 				data-ad-slot="7707770834"></ins>
// 			<script>
// 			(adsbygoogle = window.adsbygoogle || []).push({});
// 		</script>'
// }

