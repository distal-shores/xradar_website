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
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xradar' ); ?></a>
    <header id="masthead" class="site-header cstudies" role="banner">
        <div class="site-branding">
            <img class="logo" src="http://xradar.dev/wp-content/uploads/2017/07/xr_logo_dark.png">
        </div>

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
            ?>
        </nav><!-- #site-navigation -->
        <div class="submenu">
            <ul>
                <li><a href="/case-study-1/">Case Study 1</a></li>
                <li><a href="/case-study-2/">Case Study 2</a></li>
                <li><a href="/case-study-3/">Case Study 3</a></li>
                <li><a href="/case-study-4/">Case Study 4</a></li>

            </ul>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">