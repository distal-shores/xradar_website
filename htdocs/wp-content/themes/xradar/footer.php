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
                        <li><a href="/services/concrete-scanning">Concrete Scanning</a></li>
                        <li><a href="/services/concrete-scanning">Corrosion Mapping</a></li>
                        <li><a href="/services/concrete-scanning">Pulse Echo</a></li>
                        <li><a href="/services/concrete-scanning">Engineering Reports</a></li>
                    </ul>
                </div>
                <div class="sitemap-list">
                    <h3>Case Studies</h3>
                    <?php 
                        $child_pages = new WP_Query( array(
                            'post_type'      => 'page', // set the post type to page
                            'posts_per_page' => 4, // number of posts (pages) to show
                            'post_parent'    => 1309, // enter the post ID of the parent page
                            'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                            'orderby' => 'ID',
                        ) );

                        if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();

                            echo 
                            '<ul>
                                <li><a href="' . get_page_link() . '">' . get_the_title() . '</a></li>
                            </ul>';

                        endwhile; endif;  

                        wp_reset_postdata();
                    ?>
                </div>
                <div class="sitemap-list">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="/about">About</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
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
            'theme_location' => 'mobile-menu',
            'menu_id'        => 'mobile-menu',
        ) );
    ?>
</nav>
<div id="c-mask" class="c-mask"></div>


<?php wp_footer(); ?>

</body>
</html>
