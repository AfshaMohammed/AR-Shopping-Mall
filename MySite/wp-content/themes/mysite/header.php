<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MySite
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<style>
p{
	text-align:right;
	font-weight:bold;
}
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mysite' ); ?></a>

	<header style="background-color:white; text-align:center;" class="site-header">
		
			<img src="<?php echo(get_template_directory_uri()); ?> /Images/Head.jpg" alt="Logo" width="250" height="50">
			<?php
			 echo "<p>Today is " .Date("m/d/Y")."</p>;
			?>
	</header><!-- #masthead -->
	<nav style="background-color:#000000; padding:10px 18px;" class="site-nav">
		<?php
		$args = array(
			'theme_location' => 'primary'
		);

		?>
		<?php wp_nav_menu($args); ?>

	</nav>

	<div id="content" class="site-content">
