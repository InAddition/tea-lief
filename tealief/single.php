<?php 
	$image = get_field('featured_photo');
	$image = $image['sizes']['page-header'];
	$title = get_the_title();
	$date = date( 'F jS Y', get_the_time( 'U' ) );
?>
<?php get_header(); ?>
	<div class="wrapper page-wrapper">
		<div class="container">
			<div class="page-content wysiwyg">

			<!--Post Header-->
				<div class="post-header">
					<div class="post-title">
						<div>
							<h1><?php echo $title ?></h1>
							<span>Posted: <?php echo $date ?></span>
						</div>
					</div>
					<?php if($image) { ?>
					<img src="<?php echo $image; ?>" alt="<?php echo $title ?>" class="post-image">
					<?php } ?>
				
				</div>
				<div class="post-divider"></div>
				<!--Post Header-->


				<?php if( have_rows('post_content') ): ?>
						 <?php while ( have_rows('post_content') ) : the_row(); ?>

						 	<!--WYSIWYG-->
						 	<?php  if( get_row_layout() == 'text_block' ) { ?>
						 	<div class="post-copy">
						 		<div class="wysiwyg">
							 		<?php the_sub_field('text'); ?>
							 	</div>
						 	</div>
						 	<?php } ?>

	

				 		 	<!--Divider-->
				 	 	 	<?php  if( get_row_layout() == 'section_divider' ) { ?>
				 	 	 	<div class="post-divider"></div>
				 	 	 	<?php } ?>

				 		 	<!--Photo-->
				 	 	 	<?php  if( get_row_layout() == 'photo_block' ) { ?>
				 	 	 	<?php 
				 	 	 		$post_image = get_sub_field('photo');
				 	 	 		$post_image = $post_image['sizes']['full'];
				 	 	 		$post_link = get_sub_field('photo_link');
				 	 	 	?>
				 	 	 	<?php if($post_link) { ?>
				 	 	 	<a href="<?php echo $post_link; ?>" class="post-item post-content-image">
					 	 	 	<img src="<?php echo $post_image; ?>" alt="<?php echo $title ?>">
					 	 	 </a>
				 	 	 	<?php } ?>
				 	 	 	<?php if(!$post_link) { ?>
					 	 	 <img src="<?php echo $post_image; ?>" alt="<?php echo $title ?>" class="post-image">
				 	 	 	<?php } ?>
				 	 	 	<?php } ?>

				 		



						 <?php endwhile; ?>
					<?php endif; ?>

			</div>
		</div>
	</div>
<?php get_footer(); ?>