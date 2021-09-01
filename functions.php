<?php

/**
 * OO-team functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package custom_theme
 */

require_once get_template_directory()  . '/vendor/autoload.php';

/**
 * Add app constants.
 */
require_once get_template_directory()  . '/inc/constants.php';
/**
 * Add initial setup.
 */
require_once get_template_directory() . '/inc/init.php';

/**
 * Add theme setup.
 */
require_once get_template_directory() . '/inc/theme-setup.php';


/**
 * Add custom widgets.
 */
require_once get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue custom scripts.
 */
require_once get_template_directory() . '/inc/load-scripts.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

/**
 * Helper functions.
 */
require_once get_template_directory() . '/inc/helpers.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require_once get_template_directory() . '/inc/jetpack.php';
}
