<?php
/*
Template Name: Contact
*/
?>

<?php

get_header('page'); ?>

    <div id="primary" class="content-area">
        <div id="contact-hero-photo"></div>
        <main id="main" class="site-main contact" role="main">
            <div class="white-box">
                <h1>Contact Us</h1>
                <hr>
            </div>
            <div class="flex-wrap">
                <?php 
                    $child_pages = new WP_Query( array(
                        'post_type'      => 'page', // set the post type to page
                        'posts_per_page' => 10, // number of posts (pages) to show
                        'post_parent'    => 1311, // enter the post ID of the parent page
                        'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                        'orderby' => 'ID',
                    ) );

                    if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();

                        $heroImage = get_field('city_hero_image');

                        echo
                        '<div class="contact-city">
                            <a class="overlay-link" href="' . get_page_link() .'"></a>
                            <div class="overlay"></div>
                            <img src="' . $heroImage['url'] . '"/>
                            <h3>' . get_the_title() . '</h3>
                            <hr>
                            <div class="details">
                                <span class="pin">' . get_field('address') . '</span>
                                <span class="phone">' . get_field('phone_number') . '</span>
                                <span class="mail">' . get_field('email') . '</span>
                            </div>
                        </div>';
                
                    endwhile; endif;  

                    wp_reset_postdata();
                ?>

            </div>

            <div class="get-in-touch">
                <?php ninja_forms_display_form(6); ?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();