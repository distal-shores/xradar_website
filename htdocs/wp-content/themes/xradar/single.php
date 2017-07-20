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
			<div class="flex-wrap">
				<div class="the-post">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="post-hero" style="background-image:url('<?php if(has_post_thumbnail()) {
							echo the_post_thumbnail_url();
						} ?>');"></div>
						<div class="post-frontmatter">
							<h1><?php echo get_the_title(); ?></h1>
							<hr>
						</div>
						<section class="content">
							<?php echo the_content(); ?>
							<?php next_post_link( '%link', 'Next Blog Post', TRUE ); ?>
						</section>
					<?php endwhile; // End of the loop. ?>
					<?php wp_reset_query(); ?>
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
