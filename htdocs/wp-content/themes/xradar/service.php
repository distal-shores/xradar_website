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
    <main id="main" class="site-main page-services" role="main">

        <img src="<?php echo $heroImage['url']; ?>" />

        <div class="my-heading">
            <h1><?php echo get_post_meta( get_the_ID(), 'main-heading', true ); ?></h1>
        </div>

        <?php
            while ( have_posts() ) : the_post(); ?>
                <div class="entry-content-page">
                    <?php the_content(); ?>
                </div>

        <?php
            endwhile;
            wp_reset_query();
        ?>
        <section class="know-more">
            <h2>See Our Services In Action</h2>
            <button class="cta-button white">Learn More</button>
        </section>
    </main>
</div>



<?php
get_footer();