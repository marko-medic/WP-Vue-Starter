<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package custom_theme
 */

class Template_Functions
{
	public function __construct()
	{
		add_filter('body_class', array($this, 'body_classes'));
		add_action('wp_head', array($this, 'pingback_header'));
	}

	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * @param array $classes Classes for the body element.
	 * @return array
	 */
	public static function body_classes($classes)
	{
		// Adds a class of hfeed to non-singular pages.
		if (!is_singular()) {
			$classes[] = 'hfeed';
		}

		// Adds a class of no-sidebar when there is no sidebar present.
		if (!is_active_sidebar('sidebar-1')) {
			$classes[] = 'no-sidebar';
		}

		return $classes;
	}

	/**
	 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
	 */
	public static function pingback_header()
	{
		if (is_singular() && pings_open()) {
			printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
		}
	}
}
