
<?php
/** 
* Product Detail Template
*
* $post = post information, use this to create the Product Object
* $WC_Product = class to instantiate
*
* The basic methods are used here, for more methods, check out the Class documentation: https://docs.woothemes.com/wc-apidocs/class-WC_Product.html
*/
global $post;
$product = get_product($post);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), '1-1-sm' ); 
$lrg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'full' );
$attachment_ids = $product->get_gallery_attachment_ids(); 
$description = $product->get_description();
?>
<?php get_header(); ?>
	<div class="wrapper page-wrapper">
		<div class="container single-product-container">
			<div class="page-content">
				<?php woocommerce_breadcrumb(); ?>
				<?php do_action( 'woo_before_product_detail' ); ?>
				<div class="single-product-info">
					<div class="single-product-gallery">
						<a href="<?php  echo $lrg_image[0]; ?>" class="venobox desktop-product-thumb" data-gall="gallery">
							<img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" class="single-product-feature-photo">
						</a>
						<?php if($attachment_ids) { ?>
						<div class="product-thumbs">
							<?php foreach( array_slice( $attachment_ids, 0,3 ) as $attachment_id ) : ?>

						  <?php $thumbnail_url = wp_get_attachment_image_src( $attachment_id, 'full' )[0];
						  $thumbnail = wp_get_attachment_image_src( $attachment_id, '1-1-sm' )[0];
						  ?>

						  <a href="<?php echo $thumbnail_url; ?>" class="venobox" data-gall="gallery"><img class="thumb" src="<?php echo $thumbnail; ?>"></a>

						<?php endforeach; ?>
						</div>
						<?php } ?>
					</div>
					<div class="single-product-details wysiwyg">
						<h1><?php the_title(); ?></h1>
						<h2><?php the_field('product_subtitle') ?></h2>
						<?php if($product->is_on_sale()): ?> 
							<h3><span class="linethrough">$<?php echo $product->get_regular_price(); ?></span> <?php  echo wc_price($product->get_price_including_tax(1,$product->get_price())); ?></h3>
						<?php else: ?>
							<h3><?php  echo wc_price($product->get_price_including_tax(1,$product->get_price())); ?></h3>
						<?php endif; ?>
						<div class="single-product-excerpt">
							<?php the_excerpt(); ?>
						</div>

						<?php if($product->is_in_stock()): ?>
							<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
								<form class="cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->id ); ?>" data-product_variations="<?php echo htmlspecialchars( json_encode( $attributes ) ) ?>">
									<?php
								 		if ( ! $product->is_sold_individually() ) {
								 			woocommerce_quantity_input( array(
								 				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
								 				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
								 				'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
								 			) );
								 		}
								 	?>
								<input type="submit" value="<?php echo esc_html( $product->single_add_to_cart_text() ); ?>" class="btn submit-btn"  />
								<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
								<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
								<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
							</form>
						<?php else: ?>
							<h3> Sorry, this product is not available. </h3>
						<?php endif; ?>
					</div>
				</div>
				<?php if($description) { ?>
					<div class="wysiwyg single-product-description">
						<?php echo $description; ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>


