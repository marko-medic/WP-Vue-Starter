<?php

/**
 * Enqueue theme assets.
 *
 * @package custom_theme
 */

/**
 * Enqueue slick slider from CDN.
 */
function custom_theme_enqueue_slick() {
	wp_enqueue_script( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_style( 'slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_slick' );

/**
 * Enqueue theme fonts.
 */
function custom_theme_enqueue_fonts() {
	wp_enqueue_style( 'custom_theme-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500;700&family=Work+Sans:wght@200;300;400&family=Abhaya+Libre:wght@700&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_fonts' );

/**
 * Enqueue theme scripts and styles.
 */
function custom_theme_enqueue_scripts() {
	wp_enqueue_style( 'custom_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'custom_theme-style-rtl', 'rtl', 'replace' );
	wp_enqueue_script( 'custom_theme-script', get_template_directory_uri() . '/dist/js/app.min.js', array( 'slick-slider' ), _S_VERSION, true );

	wp_localize_script(
		'custom_theme-script',
		'wp_data',
		array(
			'root_url'     => get_site_url(),
			'template_url' => get_stylesheet_directory_uri(),
			'nonce'        => wp_create_nonce( 'wp_rest' ),
			'env' => $_ENV,
		)
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_scripts' );
