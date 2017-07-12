<?php
/*
Template Name: Case Study
*/
?>

<?php 

$heroImage = get_field('case_study_hero');

?>

<?php

get_header('cstudies'); ?>

<div id="primary" class="content-area services">
    <div class="cstudy-hero" style="background:url('<?php echo $heroImage['url']; ?>');" /></div>
    <main id="main" class="site-main page-cstudy" role="main">

        <span class="title-leader">- Case Study -</span>

        <h1><?php echo get_post_meta( get_the_ID(), 'main-heading', true ); ?></h1>
        <hr>

        <div class="flex-wrap">
            <div class="cstudy-content">
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
    </main>
    <section class="know-more">
        <h2>Get to Know Our Services</h2>
        <button class="cta-button white">View Our Services</button>
    </section>
</div>

<?php
get_footer();