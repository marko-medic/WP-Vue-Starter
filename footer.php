<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>




</div> <!-- #content-wrapper -->
	<v-footer :content="'<?php echo get_bloginfo(); ?>'"></v-footer>
</div><!-- #app -->

<?php wp_footer(); ?>

</body>

</html>