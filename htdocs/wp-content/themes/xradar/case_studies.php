<?php
/*
Template Name: Case Studies
*/
?>

<?php

get_header('cstudies'); ?>

    <div id="primary" class="content-area">
        <div id="case-studies-hero"></div>
        <main id="main" class="site-main page-cstudies" role="main">
            <h1>Case Studies</h1>
            <hr>
            <p>We work across a wide range of industries from construction, engineering, archaeological, to military. Our services are adaptable and have a variety of practical applications in the field, all with the aim of saving you time and money.</p>
            <div class="flex-wrap">

                <?php 
                    $child_pages = new WP_Query( array(
                        'post_type'      => 'page', // set the post type to page
                        'posts_per_page' => 4, // number of posts (pages) to show
                        'post_parent'    => 1309, // enter the post ID of the parent page
                        'no_found_rows'  => true, // no pagination necessary so improve efficiency of loop
                        'orderby' => 'ID',
                    ) );

                    if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post();

                        $heroImage = get_field('case_study_hero');

                        echo 
                        '<div style="background-image:url(\'' . $heroImage['url'] . '\')" class="cstudy-item">
                                <a href="' . get_page_link() . '"></a>
                                <div class="overlay"></div>
                                <div class="cstudy-caption">
                                    <h3>' . get_the_title() . '</h3>
                                    <hr>
                                    <p>' . get_field('case_study_snippet') . '</p>
                                </div>
                            </div>';

                    endwhile; endif;  

                    wp_reset_postdata();
                ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();