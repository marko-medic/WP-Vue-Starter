<?php

/**
 * Init initial theme stuff.
 *
 * @package custom_theme
 */

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(get_template_directory());
$dotenv->load();
