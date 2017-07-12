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

        <h1><?php echo get_post_meta( get_the_ID(), 'main-heading', true ); ?></h1>

        <hr>

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
                <div class="local-contact">
                    <h3>Contact Us</h3>
                    <form>
                        <select>
                            <option>Vancouver</option>
                        </select>
                    </form>
                    <div class="pin"><span>114-2799 Gilmore Ave<br>Burnaby, BC<br>V5C 6S5</span></div>
                    <div class="phone"><span>604-436-7226</span></div>
                    <div class="email"><span>info@xradar.ca</span></div>
                </div>
                <div class="quick-contact">
                    <h3>Quick Contact</h3>
                    <?php ninja_forms_display_form(6); ?>
                </div>
            </div>
        </div>
        <section class="know-more">
            <h2>See Our Services In Action</h2>
            <button class="cta-button white">Learn More</button>
        </section>
    </main>
</div>

<?php
get_footer();