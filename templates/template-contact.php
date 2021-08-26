<?php
/**
 * The template for displaying the contact page.
 *
 * This page template will display any functions hooked into the `contact page` action.
 * By contact this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the contact page Control plugin.
 *
 * Template name: Contact Page Template
 *
 * @package custom_theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main contact-template" role="main">
                <h1>Contact us: </h1>
                <?php while(have_posts()): the_post(); ?>
                       <?php the_title() ?> 
                       <?php the_content() ?> 

                <?php endwhile; ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();