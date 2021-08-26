<?php

/**
 * OO-team functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package custom_theme
 */

require  get_template_directory()  . '/vendor/autoload.php';

/**
 * Add app constants.
 */
require  get_template_directory()  . '/inc/constants.php';
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
 * Helper functions.
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
