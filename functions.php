<?php

/**
 * OO-team functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package custom_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

require  get_template_directory()  . '/vendor/autoload.php';

/**
 * Add initial setup.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Add theme setup.
 */
require get_template_directory() . '/inc/theme-setup.php';


/**
 * Add custom widgets.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue custom scripts.
 */
require get_template_directory() . '/inc/load-scripts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Utils functions.
 */
require get_template_directory() . '/inc/utils.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
