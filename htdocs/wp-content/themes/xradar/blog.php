<?php
/*
    Template Name: Post-List
*/
?>

<?php get_header('page'); ?>

<div id="primary" class="content-area blog">

    <div class="blog-hero"></div>
    <div class="frontmatter">
        <h1>Blog</h1>
        <hr>
    </div>
    <div class="content">
        <?php 
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => 10
            );
            $the_query = new WP_Query( $args );
        ?>

            <?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="post">
                        <?php if(has_post_thumbnail()): ?>
                            <div class="field-content">
                                <img src="<?php echo the_post_thumbnail_url() ?>"/>
                            </div>
                        <?php endif ?>
                        <div class="blog-title">
                            <span><?php echo the_date('F Y') ?></span>
                            <h3><?php the_title() ?></h3>
                            <hr>
                        </div>
                        <p><?php the_excerpt(); ?></p>
                        <p class="read-more"><a href="<?php the_permalink(); ?>">Read More ></a></p>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

    </div>
    <section class="know-more">
        <h2>Check Out our Services in Action</h2>
        <a href="/case-studies"><button class="cta-button white">View Case Studies</button></a>
    </section>


</div>
<?php
get_footer();