<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package xradar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="hero-photo">
				<h1>Canada Wide Concrete Scanning</h1>
				<button class="cta-button">Our Services</button>
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
                <button class="cta-button black">Learn More</button>
            </section>
            <section class="case-studies">
                <h1>Case Studies</h1>
                <button class="cta-button">View Case Study</button>
            </section>
            <section class="blogroll">
                <h1>Latest Blog Posts</h1>
                <hr>
            </section>
            <section class="contact-us">
                <h2>Get In Touch</h2>
                <div class="contact-text">
                    Keytar McSweeney's Williamsburg, readymade leggings try-hard 90's street art letterpress hoodie occupy Wes Anderson Banksy. Asymmetrical viral letterpress, McSweeney's seitan 3 wolf moon drinking vinegar sartorial pour-over messenger bag
                </div>
                <div class="contact-form">
                    <form>
                        <input type="text" value="" placeholder="Name">
                        <input type="email" value="" placeholder="Email">
                        <input type="text" value="" placeholder="Subject">
                        <textarea type="text" value="" placeholder="Your message"></textarea>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
