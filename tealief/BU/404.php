<?php get_header(); ?>
	<div class="wrapper page-wrapper">
		<div class="container">
			<div class="page-content">
				<?php
				  if (have_posts()) : while (have_posts()) : the_post();
				      the_content();
				    endwhile;
				  endif;
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>