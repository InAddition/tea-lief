<?php /* Template Name: Blog Template */ ?>
<?php get_header(); ?>
	<div class="wrapper page-wrapper">
		<div class="container">
			<div class="page-content">
				<h1 class="page-title"><?php the_title() ?></h1>
				<?php
						global $paged;
						if(empty($paged)) $paged = 1;
						$query = new WP_Query(array(
							'post_type' => 'post',
							'posts_per_page' => 12,
							'paged' => $paged
						));
					?>
					<?php if ( $query->have_posts() ) { ?>
						<div class="post-item flex-container post-flex-container">
						<?php while ( $query->have_posts() ) { $query->the_post(); ?>
							<?php
								$image = get_field('featured_photo');
								$image = $image['sizes']['feature'];
								$title = get_the_title();
							?>
							<?php if( 0 == $wp_query->current_post ) { ?>
							<?php } else { ?>
							<a href="<?php the_permalink(); ?>" class="post-block">
								<h2><?php echo mb_strimwidth($title, 0, 70, '...'); ?></h2>
								<?php if($image) { ?>
								<img src="<?php echo $image; ?>" alt="<?php the_title(); ?>">
								<?php } ?>
								<?php if(!$image) { ?>
								<img src="<?php bloginfo('template_url'); ?>/img/default-thumb.jpg" alt="<?php the_title(); ?>">
								<?php } ?>
							</a>
							<?php } ?>
					<?php } ?>
						</div>
						<?php tfg_pagination($pages = $query->max_num_pages); ?>
					<?php } else { ?>
						<p>There are no blog posts at this time. Please check back soon.</p>
					<?php } ?>	
			</div>
		</div>
	</div>
<?php get_footer(); ?>