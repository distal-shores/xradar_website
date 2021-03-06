<?php
/*
Template Name: Service
*/
?>

<?php 

    $heroImage = get_field('service_hero_image');

?>

<?php

get_header('services'); ?>

<div id="primary" class="content-area services">
    <main id="main" class="site-main page-service" role="main">

            <div class="service-hero" style="background:url('<?php echo $heroImage['url']; ?>');" /></div>
        <div class="frontmatter">
            <h1><?php echo get_the_title(); ?></h1>
            <hr>
        </div>


        <div class="flex-wrap">
            <div class="service-content">
                <?php
                    while ( have_posts() ) : the_post(); ?>
                        <div class="entry-content-page">
                            <?php the_content(); ?>
                        </div>

                <?php
                    endwhile;
                    wp_reset_query();
                ?>
            </div>
            <div class="sidebar-contact">
                <h3>Contact Us</h3>
                <div class="details">
                    <span class="pin">4 Place du Commerce, Suite 101, Verdun, QC H3E 1J4</span>
                    <span class="phone">604-436-7226</span>
                    <span class="mail">montreal@xradar.ca</span>
                </div>
                <div class="get-in-touch">
                    <h3>Quick Contact</h3>
                    <?php ninja_forms_display_form(6); ?>
                </div>
            </div>
        </div>
        <div class="get-in-touch2">
            <?php ninja_forms_display_form(7); ?>
        </div>
        <section class="know-more">
            <h2>See Our Services In Action</h2>
            <a href="/case-studies"><button class="cta-button white">Learn More</button></a>
        </section>
    </main>
</div>

<?php
get_footer();