<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MySite
 */

?>
<!-- #content -->

	<footer  style="background-color:white;" class="site-footer">
		<nav style="background-color:black; padding:10px 18px;" class="site-nav">
		<?php
		$args = array(
			'theme_location' => 'footer'
		);

		?>
		<?php wp_nav_menu($args); ?>

	</nav>
<p style="text-align:center;"><?php bloginfo('name');?><strong>AR SHOPPING MALL - &copy</strong> <?php echo date('Y');?></p>
	</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
