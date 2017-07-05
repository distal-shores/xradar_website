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
            <div class="rhombus-left"></div>
			<div id="hero-photo">
				<h1>Canada Wide Concrete Scanning</h1>
                <p>Xradar will save you time and money with the most advanced scanning techniques in the industry</p>
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
            <section id="case-studies">
                <div class="rhombus-right"></div>
                <div class="case-studies">
                    <span class="pre-header">- Case Study -</span>
                    <h1>Port Mann Bridge</h1>
                    <button class="cta-button">View Case Study</button>
                </div>
            </section>
            <section class="blogroll">
                <h1>Latest Blog Posts</h1>
                <hr>
            </section>
            <section class="contact-us">
                <h1>Get in Touch</h1>
                <hr>
                <p>
                    We have offices all over Canada in Victoria, Vancouver, Toronto, Montreal and Quebec City. Get in touch and we will be happy to provide you with a quote for our services.
                </p>
                <form>
                    <input type="text" value="" name="name" placeholder="Name">
                    <input type="text" value="" name="company" placeholder="Company">
                    <input class="half-width" type="email" value="" name="email" placeholder="Email">
                    <input class="half-width" type="text" value="" name="phone" placeholder="Phone">
                    <textarea type="text" value="" name="message" placeholder="Your message"></textarea>
                    <select placeholder="Current Location">
                        <option>Current Location</option>
                    </select>
                    <button type="submit" value="Submit" class="cta-button">Submit</button>
                </form>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
