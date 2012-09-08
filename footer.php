<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Metro
 * @since Metro 1.0
 */
?>
		<div class="clear"></div>
	</div>
</div>

<div id="footer" class="theme_background">
	<div class="wrapper">
		<div id="colophon">
			<?php get_sidebar("footer"); ?>
			<div id="site-info">
				&copy; <a href="<?php echo home_url("/"); ?>" title="<?php echo esc_attr(get_bloginfo("name", "display") ); ?>" rel="home"><?php bloginfo("name"); ?></a>.
				All rights reserved.
				Metro Theme created by Jon Wigham.
				<a href="<?php echo esc_url(__("http://wordpress.org/")); ?>"><?php printf(_("Proudly powered by %s"), "WordPress"); ?></a>.
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>