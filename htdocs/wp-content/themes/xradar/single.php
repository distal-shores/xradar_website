<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xradar
 */

get_header('page'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main post" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="post-hero" style="background-image:url('<?php if(has_post_thumbnail()) {
					echo the_post_thumbnail_url();
				} ?>');"></div>
			<div class="post-frontmatter">
				<h1><?php echo get_the_title(); ?></h1>
				<hr>
			</div>
			<div class="flex-wrap">
				<section class="content">
					<?php echo the_content(); ?>
					<?php next_post_link( '%link', 'Next Blog Post', TRUE ); ?>
				</section>
				<?php endwhile; // End of the loop. ?>
				<?php wp_reset_query(); ?>
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

			<div class="featured">
				<h2>Featured Blog Posts</h2>
				<hr>
				<div class="flex-wrap">
					<?php
					query_posts('posts_per_page=2&cat=74');
					if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="featured-post">
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
					<?php wp_reset_query(); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
