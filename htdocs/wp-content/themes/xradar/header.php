<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xradar
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="o-wrapper" class="o-wrapper">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xradar' ); ?></a>
	<div id="top-buffer">1-855-5-Xradar(97-2327)</div>
	<header id="masthead" class="site-header" role="banner">
	
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="logo" src="http://xradar.dev/wp-content/uploads/2017/07/xr_logo_light.svg">
			</a>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="c-buttons">
				<button id="c-button--push-right" class="c-button menu-toggle"></button>
			</div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

