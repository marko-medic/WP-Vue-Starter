<?php
/**
 * Template part for displaying a custom site logo.
 *
 * @package custom_theme
 */

?>
<div class="site-branding">
	<?php the_custom_logo(); ?>

	<?php if ( is_front_page() && is_home() ) : ?>
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</h1>
	<?php else : ?>
		<p class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?>
			</a>
		</p>
	<?php endif; ?>
</div><!-- .site-branding -->
