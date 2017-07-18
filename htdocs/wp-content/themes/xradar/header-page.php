<?php?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>

    <?php wp_head(); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.overlay-link').hover(function() {
                $(this).parent().find('img').addClass('tinted');
            }, function() {
                $(this).parent().find('img').removeClass('tinted');   
            });
        });

    </script>
</head>

<body <?php body_class(); ?>>
<div id="o-wrapper" class="o-wrapper">
<div id="top-buffer"><a href="tel:1-855-597-2327">1-855-5-Xradar(97-2327)</a></div>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xradar' ); ?></a>
    <header id="masthead" class="site-header page" role="banner">
        <div class="site-branding">
            <a href="/"><img class="logo" src="http://xradar.dev/wp-content/uploads/2017/07/xr_logo_dark.png"></a>
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
        </nav><!-- #site-navigation -->

    </header><!-- #masthead -->

    <div id="content" class="site-content">