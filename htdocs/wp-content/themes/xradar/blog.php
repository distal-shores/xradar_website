<?php
/*
    Template Name: Post-List
*/
?>

<?php get_header('cstudies'); ?>

<div id="primary" class="content-area blog">

    <div class="blog-hero"></div>
    <h1>Blog</h1>
    <hr>

    <?php 
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => 10
        );
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            echo '<ul>';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<li>' . get_the_title() . '</li>';
            }
            echo '</ul>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();

     ?>

<!--         <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2> -->

<!--  -->


</div>
<?php
get_footer();