<?php /* Template Name: Home Template */ ?>
<?php 
	$subtitle = get_field('site_subtitle');
	$posts = get_field('featured_products');
	$mission_title = get_field('mission_statement_title');
	$callout_2 = get_field('callout_2');
	$mission_copy = get_field('mission_statement_copy');
	$home_copy = get_field('homepage_copy_area');
	$callout_3 = get_field('callout_footer');
	$instagram = get_field('instagram_feed');
?>
<?php get_header(); ?>
	<div class="hero">
		<div class="hero-container">
			<?php if($subtitle) { ?>
			<div class="hero-message">
				<?php echo $subtitle ?>
			</div>
			<?php } ?>

			<?php if( have_rows('feature_slides') ): ?>
			<div class="feature-slider js-slider">

				<?php while( have_rows('feature_slides') ): the_row(); 
					$image = get_sub_field('featured_slide');
					$image = $image[ 'sizes' ][ 'slide'];
				?>
					<div class="feature-slide">
						<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
					</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>

			<?php if($mission_title || $mission_copy) { ?>
			<div class="hero-cta">
				<?php if($mission_title) { ?>
				<h2><?php echo $mission_title ?></h2>
				<?php } ?>
				<?php if($mission_copy) { ?>
				<div class="hero-copy">
					<?php echo $mission_copy ?>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="home-products">
		<h3>Products</h3>
		<div class="home-products-container">

			<?php 

			

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
        				<img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" alt="<?php the_title(); ?>">
        			</a>
			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>

		</div>
	</div>
	<div class="home-cta">
		<div class="wrapper">
			<div class="container">
				<?php if($callout_2) { ?>
				<h2 class="home-cta-tagline-2"><?php echo $callout_2 ?></h2>
				<?php } ?>
				<div class="home-cta-group">
					<?php if( have_rows('call_to_action_area_1') ): ?>
						<?php while( have_rows('call_to_action_area_1') ): the_row(); 
							$image1 = get_sub_field('cta_background_photo');
							$cta_title = get_sub_field('cta_title');
							$cta_copy = get_sub_field('cta_copy');
						?>
							<div class="home-cta-photo" style="background-image: url('<?php echo $image1 ?>')">
								<div class="home-cta-photo-copy">
									<h2><?php echo $cta_title ?></h2>
									<div class="home-cta-copy">
										<?php echo $cta_copy ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					<div class="home-cta-rows">
						<?php if( have_rows('call_to_action_area_2') ): ?>
							<?php while( have_rows('call_to_action_area_2') ): the_row(); 
								$image = get_sub_field('cta_icon');
								$cta_title = get_sub_field('cta_title');
								$cta_copy = get_sub_field('cta_copy');
							?>
								<div class="home-cta-row home-cta-top-row-1 home-cta-row-dark">
									<div class="home-cta-row-icon">
										<img src="<?php echo $image ?>" alt="<?php the_title(); ?>">
									</div>
									<div class="home-cta-row-text">
										<h2><?php echo $cta_title ?></h2>
										<div class="home-cta-copy">
											<?php echo $cta_copy ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('call_to_action_area_3') ): ?>
							<?php while( have_rows('call_to_action_area_3') ): the_row(); 
								$image = get_sub_field('cta_icon');
								$cta_title = get_sub_field('cta_title');
								$cta_copy = get_sub_field('cta_copy');
							?>
								<div class="home-cta-row home-cta-top-row-2 home-cta-row-light">
									<div class="home-cta-row-icon">
										<img src="<?php echo $image ?>" alt="<?php the_title(); ?>">
									</div>
									<div class="home-cta-row-text">
										<h2><?php echo $cta_title ?></h2>
										<div class="home-cta-copy">
											<?php echo $cta_copy ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
				</div>
			</div>
				<div class="home-cta-group">
					<div class="home-cta-rows">
						<?php if( have_rows('call_to_action_area_4') ): ?>
							<?php while( have_rows('call_to_action_area_4') ): the_row(); 
								$image = get_sub_field('cta_icon');
								$cta_title = get_sub_field('cta_title');
								$cta_copy = get_sub_field('cta_copy');
							?>
								<div class="home-cta-row home-cta-btm-row home-cta-row-dark">
									<div class="home-cta-row-icon">
										<img src="<?php echo $image ?>" alt="<?php the_title(); ?>">
									</div>
									<div class="home-cta-row-text">
										<h2><?php echo $cta_title ?></h2>
										<div class="home-cta-copy">
											<?php echo $cta_copy ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<?php if( have_rows('call_to_action_area_5') ): ?>
						<?php while( have_rows('call_to_action_area_5') ): the_row(); 
							$image = get_sub_field('cta_background_photo');
							$cta_title = get_sub_field('cta_title');
							$cta_copy = get_sub_field('cta_copy');
						?>
							<div class="home-cta-photo" style="background-image: url(<?php echo $image ?>)">
								<div class="home-cta-photo-copy">
									<h2><?php echo $cta_title ?></h2>
									<div class="home-cta-copy">
										<?php echo $cta_copy ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="newsletter">
		<p>Sign up for our newsletter for $10 off your first purchase.</p>

		<form action="https://wearekured.us17.list-manage.com/subscribe/post?u=ee6d602af178bd321df4a43c3&amp;id=3924ed8a83" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"   novalidate>
			<input type="email" placeholder="Enter Your Email Address" name="EMAIL" class="required email" id="mce-EMAIL">
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ee6d602af178bd321df4a43c3_3924ed8a83" tabindex="-1" value=""></div>
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">
		</form>


	</div>


	<div class="wrapper instagram-wrapper">
		<div class="container">
			<h2>From Our Instagram</h2>
			<p>
				<a href="https://www.instagram.com/wearekured/" target="_blank">Follow Us @wearekured</a>
			</p>
			<div class="instagram-grid">
				<?php echo $instagram ?>
			</div>
		</div>
		
	</div>
	<?php if($home_copy) { ?>
	<div class="home-copy-area">
		<div class="wrapper">
			<div class="container wysiwyg">
				
					<?php echo $home_copy ?>
				
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if($callout_3) { ?>
	<div class="home-cta-tagline-3"> 
		<h2><?php echo $callout_3 ?></h2>
	</div>
	<?php } ?>
	<?php if( have_rows('reviews') ): ?>
	<div class="review-container">
		<h2>Reviews</h2>
		<div class="reviews-slider">
			<div class="reviews js-slider">
				<?php while( have_rows('reviews') ): the_row(); 
					$review = get_sub_field('review');
					$reviewer = get_sub_field('reviewer');
				?>
					<div class="review">
						<p>
							<?php echo $review ?><span> - <?php echo $reviewer ?></span>
						</p>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
	<?php endif; ?>


<?php get_footer(); ?>