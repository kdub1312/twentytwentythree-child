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

add_action( 'wp_head', 'rf_enable_adsense' );
if ( ! function_exists( 'rf_enable_adsense' ) ) {
	function rf_enable_adsense() {
			echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3019479180746594"
			crossorigin="anonymous"></script>';
	}
}

add_action( 'wp_footer', 'prefix_footer_code' );
function prefix_footer_code() {
		echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3019479180746594"
		crossorigin="anonymous"></script>
			<ins class="adsbygoogle"
				style="display:block; text-align:center;"
				data-ad-layout="in-article"
				data-ad-format="fluid"
				data-ad-client="ca-pub-3019479180746594"
				data-ad-slot="7707770834"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>';
}

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
       return $data;
    }
  
    $filetype = wp_check_filetype( $filename, $mimes );
  
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
  }
  add_action( 'admin_head', 'fix_svg' );


  function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
    }
    add_filter( 'upload_mimes', 'allow_svg_upload' );

  
?>
