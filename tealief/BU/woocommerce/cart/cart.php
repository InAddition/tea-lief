<?php
/** 
* Cart Template
* NOTE: In order for this to work, you have to create a theme/woocommerce/cart/cart.php file that includes this file. Or you can directly edit the cart.php file, up to you.
*
* $post = post information, use this to create the Product Object
* $WC_Product = class to instantiate
*
* The basic methods are used here, for more methods, check out the Class documentation: https://docs.woothemes.com/wc-apidocs/class-WC_Product.html
*/

?>

<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

wc_print_notices();

do_action( 'woocommerce_before_cart' ); ?>

<?php if ( !WC()->cart->get_cart_contents_count() == 0 ) : ?>
	<form action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

	<?php do_action( 'woocommerce_before_cart_table' ); ?>

	<ul class="shop_table shop_table_responsive cart">

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<li class="product-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<div class="product-thumbnail">
							<?php
								$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

								if ( ! $product_permalink ) {
									echo $thumbnail;
								} else {
									printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
								}
							?>
						</div>
						<div class="product-details">
							

							<div class="product-name details" data-title="<?php _e( 'Product', 'woocommerce' ); ?>">
								<h4>
									<?php
										if ( ! $product_permalink ) {
											echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
										} else {
											echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
										}

										// Meta data
										echo WC()->cart->get_item_data( $cart_item );

										// Backorder notification
										if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
											echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
										}
									?>
								</h4>
							</div>



							<div class="product-quantity details" data-title="<?php _e( 'Quantity', 'woocommerce' ); ?>">
								<?php
									if ( $_product->is_sold_individually() ) {
										$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
									} else {
										$product_quantity = woocommerce_quantity_input( array(
											'input_name'  => "cart[{$cart_item_key}][qty]",
											'input_value' => $cart_item['quantity'],
											'max_value'   => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
											'min_value'   => '0'
										), $_product, false );
									}

									echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
								?>
							</div>

							<div class="product-subtotal details" data-title="<?php _e( 'Total', 'woocommerce' ); ?>">
								<?php
									echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
								?>
								<?php if ($cart_item['quantity'] > 1): ?>
									(<?php
										echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
									?> x
									<?php echo $cart_item['quantity'] ?>
									)
								<?php endif; ?>
							</div>
							<?php
								echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
									'<a href="%s" class="remove" title="%s" data-product_id="%s" data-product_sku="%s">Remove Item</a>',
									esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
									__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								), $cart_item_key );
							?>
						</div>
					</li>
					
				<?php } 
			} 

			do_action( 'woocommerce_cart_contents' );
			?>
				<li class="update"><input type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update Cart', 'woocommerce' ); ?>" /></li>
				<li class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">

							<label for="coupon_code"><?php _e( 'Coupon', 'woocommerce' ); ?>:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <input type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply Coupon', 'woocommerce' ); ?>" />

							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart' ); ?>
				</li>

			</ul>

	<?php do_action( 'woocommerce_after_cart_table' ); ?>

	</form>
	<div class="cart-collaterals">

		<?php do_action( 'woocommerce_cart_collaterals' ); ?>

	</div>

	<?php do_action( 'woocommerce_after_cart' ); ?>

<?php else: ?>
	<div class="no-products">Sorry, it looks like you haven't added anything to your cart. How about <a href="<?php echo bloginfo('url'); ?>/shop">browsing some of our products?</a> </div>
<?php endif; ?>



