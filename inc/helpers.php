<?php

class Helpers
{
	public static function custom_theme_load_icon($icon_url)
	{
		return print_r(file_get_contents(get_stylesheet_directory_uri() . '/assets/icons/' . $icon_url . '.svg'));
	}

	public static function custom_theme_get_image_url($image_url)
	{
		return print_r(get_stylesheet_directory_uri() . '/assets/images/' . $image_url);
	}
}
