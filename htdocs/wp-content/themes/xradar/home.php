<?php
/**
    Template Name: Home
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="rhombus-left"></div>
            <div id="hero-photo">
                <h1>Canada Wide Concrete Scanning</h1>
                <p>Xradar will save you time and money with the most advanced scanning techniques in the industry</p>
                <a href="/services"><button class="cta-button">Our Services</button></a>
            </div>
            <section id="company-intro">
                <h1>Canada's Leading Provider of Concrete Scanning Services</h1>
                <hr>
                <p>
                    Using the most advanced technology in the industry, our dedicated team saves you time and money by scanning and mapping the position of underground objects, allowing you to cut and core safely.
                </p>
                <p>
                    We are proud industry leaders and deliver our services to a huge range of sectors, including construction, earth sciences, archaeology, and military, to name a few.
                </p>
                <a href="/services"><button class="cta-button black">Learn More</button></a>
            </section>
            <section id="case-studies">
                <div class="rhombus-right"></div>
                <div class="case-studies">
                    <span class="pre-header">- Case Study -</span>
                    <h1>Port Mann Bridge</h1>
                    <a href="/case-studies/port-mann-bridge"><button class="cta-button">View Case Study</button></a>
                </div>
            </section>
            <div class="featured">
                <h2>Latest Blog Post</h2>
                <hr>
                <div class="flex-wrap">

                    <?php
                    global $post;
                    $args = array( 'numberposts' => 2);
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) :  setup_postdata($post); ?>

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
                    <?php endforeach; wp_reset_postdata(); ?> 
                </div>
            </div>
            <section class="contact-us">
                <h1>Get in Touch</h1>
                <hr>
                <p>
                    We have offices all over Canada in Victoria, Vancouver, Toronto, Montreal and Quebec City. Get in touch and we will be happy to provide you with a quote for our services.
                </p>
                <div class="get-in-touch">
                    <?php ninja_forms_display_form(6); ?>
                </div>
            </section>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
