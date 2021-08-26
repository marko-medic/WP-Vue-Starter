<?php

/**
 * The template for displaying about-us page
 *
 * This is the template that displays about-us page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custom_theme
 */

get_header();
?>


<main id="primary" class="site-main">

<?php while(have_posts()):
	the_post();
?>

<h1>About us: </h1>
<v-about></v-about>
<v-form></v-form>

	<?php endwhile; ?>

</main><!-- #main -->


<?php
get_footer();
