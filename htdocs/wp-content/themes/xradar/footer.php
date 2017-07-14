<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xradar
 */

?>

    	</div><!-- #content -->

        <span class="gradient-blend">
            <span class="transparent-border"></span>
        </span>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-logo">
                <img class="logo" src="http://xradar.dev/wp-content/uploads/2017/07/xr_logo_light.svg">
                <span>2017 Xradar &copy; <br> All rights reserved</span>      
            </div>
            <div class="footer-sitemap">
                <div class="sitemap-list">
                    <h3>Services</h3>
                    <ul>
                        <li>Concrete Scanning</li>
                        <li>Corrosion Mapping</li>
                        <li>Pulse Echo</li>
                    </ul>
                </div>
                <div class="sitemap-list">
                    <h3>Case Studies</h3>
                    <ul>
                        <li>Port Mann</li>
                    </ul>
                </div>
                <div class="sitemap-list">
                    <h3>Company</h3>
                    <ul>
                        <li>About</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
    	</footer><!-- #colophon -->
    </div><!-- #page -->
</div><!-- o-wrapper -->
<nav id="c-menu--push-right" class="c-menu c-menu--push-right">
    <button class="c-menu__close">&larr; Close Menu</button>
    <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
        ) );
    ?>
</nav>
<div id="c-mask" class="c-mask"></div>


<?php wp_footer(); ?>

</body>
</html>
