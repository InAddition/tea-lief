<?php get_header(); ?>
	<div class="wrapper page-wrapper">
		<div class="container">
			<div class="page-content wysiwyg">
				<h1 class="page-title"><?php the_title() ?></h1>

				<div class="wysiwyg">
					<?php
					  if (have_posts()) : while (have_posts()) : the_post();
					      the_content();
					    endwhile;
					  endif;
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>