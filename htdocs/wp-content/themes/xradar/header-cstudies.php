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
                <?php 
                    $child_pages = new WP_Query( array(
                        'post_type'      => 'page', // set the post type to page
                        'posts_per_page' => 4, // number of posts (pages) to show
                        'post_parent'    => 1309, // enter the post ID of the parent page
                        'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                        'orderby' => 'ID',
                    ) );

                    if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();

                        echo '<li><a href="' . get_page_link() . '">' . get_the_title() . '</a></li>';

                    endwhile; endif;  

                    wp_reset_postdata();
                ?>
            </ul>
        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">