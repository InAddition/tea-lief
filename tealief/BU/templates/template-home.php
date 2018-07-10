<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>
	<div class="hero">
		<div class="hero-container">
			<div class="hero-message">
				TOP NOTCH BRAND LEADING THE WAY IN THE INNOVATION OF CBD TECHNOLOGY
			</div>
			<div class="feature-slider js-slider">
				<div class="feature-slide">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/slide-1.jpg">
				</div>
				<div class="feature-slide">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/slide-2.jpg">
				</div>
				<div class="feature-slide">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/slide-3.jpg">
				</div>
				<div class="feature-slide">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/slide-4.jpg">
				</div>
				<div class="feature-slide">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/slide-5.jpg">
				</div>
				<div class="feature-slide">
					<img src="<?php bloginfo('template_url'); ?>/img/slides/slide-6.jpg">
				</div>
			</div>
			<div class="hero-cta">
				<h2>Mission Statement</h2>
				<p>KURED is a socially-minded lifestyle CBD company founded to help pave the way CBD is viewed internationally. KURED puts the customer first, providing the highest quality CBD. Based out of Colorado, USA KURED was created with passion of spreading the powers of using CBD. KURED is the future of CBD!</p>
			</div>
		</div>
	</div>
	<div class="home-products">
		<h3>Products</h3>
		<div class="home-products-container">

			<?php 

			$posts = get_field('featured_products');

			if( $posts ): ?>
		
			    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			        <?php setup_postdata($post); ?>
			        <?php 
			        	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), '1-1-sm' ); 
			        ?>
    			    <a href="<?php the_permalink(); ?>" class="home-product">
        				<div class="home-product-info">
        					<h2><?php the_title(); ?></h2>
        					<h3><?php the_field('product_subtitle') ?></h3>
        					<div class="btn sml-btn">
        						<span>
        							Buy Now
        						</span>
        					</div>
        				</div>
        				<img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" >
        			</a>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

		</div>
	</div>
	<div class="home-cta">
		<div class="wrapper">
			<div class="container">
				<div class="home-cta-group">
					<div class="home-cta-photo">
						<div class="home-cta-photo-copy">
							<h2>Ebnya Terpenes from Israel</h2>
							<p>Standing for uncompromising quality, safety and enhancement of health, Ebnya terpenes from Israel are the only type we use to infuse our CBD pens</p>
						</div>
					</div>
					<div class="home-cta-rows">
						<div class="home-cta-row home-cta-top-row-1 home-cta-row-dark">
							<div class="home-cta-row-icon">
								<img src="<?php bloginfo('template_url'); ?>/img/cta/icon-certified.png">
							</div>
							<div class="home-cta-row-text">
								<h2>Certified CBD</h2>
								<p>Our state of the art, single use ceramic vaporizers contain 100% certified CBD oil and we have the proof. Go ahead, <a href="<?php bloginfo('url'); ?>/certificate-of-analysis/">take a look.</a></p>
							</div>
						</div>
						<div class="home-cta-row home-cta-top-row-2 home-cta-row-light">
							<div class="home-cta-row-icon">
								<img src="<?php bloginfo('template_url'); ?>/img/cta/icon-cbd.png">
							</div>
							<div class="home-cta-row-text">
								<h2>Why use KURED CBD</h2>
								<p>If you didn’t know yet, CBD contains essential medicinal benefits including treatment for anxiety, inflammation and insomnia, with no psychoactive effects. There are many reasons why you should use KURED CBD pens. Check out <a href="https://hempcbdsciences.com/" target="_blank">this link to find out more.</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="home-cta-group">
					<div class="home-cta-rows">
						<div class="home-cta-row home-cta-btm-row home-cta-row-dark">
							<div class="home-cta-row-icon">
								<img src="<?php bloginfo('template_url'); ?>/img/cta/icon-co.png">
							</div>
							<div class="home-cta-row-text">
								<h2>Denver CO</h2>
								<p>KURED LLC is proudly based in Denver, CO, our favorite city in our favorite state. In saying that, we ship our pens nationally and internationally, for those who can’t meet us for lunch.</p>
							</div>
						</div>
					</div>
					<div class="home-cta-photo alt-home-cta-photo">
						<div class="home-cta-photo-copy">
							<h2>Satisfaction Guarantee</h2>
							<p>At KURED, we are all about satisfaction. We want you to enjoy our product, and while we’re pretty confident in saying that you will like what we have to offer, we want to know if you don’t. Money-back guarantee on our pens.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter">
		<p>Subscribe for updates and special offers</p>
		<form>
			<input type="text" placeholder="Enter Your Email Address">
			<input type="submit" value="Submit">
		</form>
	</div>
	<div class="wrapper instagram-wrapper">
		<div class="container">
			<h2>From Our Instagram</h2>
			<p>
				<a href="#">Follow Us @kuredcbd</a>
			</p>
			<div class="instagram-grid">
				<div class="instagram-item">
					<a href="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-1.jpg" class="venobox" rel="gal">
						<img src="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-1.jpg">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="instagram-item">
					<a href="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-2.jpg" class="venobox" rel="gal">
						<img src="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-2.jpg">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="instagram-item">
					<a href="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-3.jpg" class="venobox" rel="gal">
						<img src="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-3.jpg">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="instagram-item">
					<a href="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-4.jpg" class="venobox" rel="gal">
						<img src="<?php bloginfo('template_url'); ?>/img/temp/temp-instagram-4.jpg">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
		
	</div>
<?php get_footer(); ?>