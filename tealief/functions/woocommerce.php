<?php

/********** Gerneral **********************/




/********** Cart Hook**********************/

/**
 * Add Cart icon and count to header if WC is active
 */
function wc_cart_count() {
 
    if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
 
        $count = WC()->cart->cart_contents_count;
        ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
            <?php
        if ( $count > 0 ) {
            ?>
            <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
            <?php
        }
                ?> </a><?php
    }
 
}
add_action( 'wc_header_top', 'wc_cart_count' );

/**
 * Ensure cart contents update when products are added to the cart via AJAX
 */
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php            
    }
        ?></a><?php
 
    $fragments['a.cart-contents'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );






add_action( 'woo_before_product_detail', 'wc_print_notices', 10 );


// Remove Labels from checkout fields and replace them with placeholders
function custom_override_checkout_fields( $fields ) {
     foreach ($fields as $category => $value) {
        // loop by fields
        foreach ($fields[$category] as $field => $property) {
            // remove label property
            $fields[$category][$field]['placeholder'] = $fields[$category][$field]['label'];
        }
    }
     return $fields;
}


add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



/**
 * Add Tracking Code to the Order Recieved Page
 */
function wc_ninja_checkout_analytics( $order_id ) {
    $order = new WC_Order( $order_id );
    $currency = $order->get_order_currency();
    $total = $order->get_total();
    $date = $order->order_date;
    $oid = $order->get_order_number();
    ?>
    <!-- Paste Tracking Code Under Here -->

    <script type="text/javascript">
        var mantis = mantis || [];
        mantis.push(['analytics', 'load', {
            advertiser: '5aac537eccb05113cd7c355a',
            transaction: '<?php echo $oid ?>', // set this to a unique value (if applicable), such as a purchase id, to trace our conversions to your system (make sure to change the transaction= in the pixel below as well
            revenue: '<?php echo $total ?>' // set to a decimal amount (ie: "99.99") on your thank you page that represents the total purchase amount (make sure to add revenue= in the pixel below as well, ie: transaction=123&revenue=99.99)
        }]);
        </script>
    <script type="text/javascript" data-cfasync="false" src="https://assets.mantisadnetwork.com/analytics.min.js" async></script>
    <noscript><img src="//mantodea.mantisadnetwork.com/analytics/pixel?advertiser=5aac537eccb05113cd7c355a&transaction=<?php echo $oid ?>&revenue=<?php echo $total ?>" /></noscript>

    <!-- End Tracking Code -->
    <?php   
}
add_action( 'woocommerce_thankyou', 'wc_ninja_checkout_analytics' );

/********
Wholesale
********/

// Change the default country on WooCommerce Wholesale Lead Capture's registration
function wwsSetRegistrationDefaultCountry() {
  
    if ( is_page( 'wholesale-registration-page' ) ) {
        ?>
  
        <script type="text/javascript">
            jQuery(document).ready(function () {
                jQuery('select#wwlc_country').val('US');
                jQuery('select#wwlc_country').trigger('change');
            });
        </script>
  
        <?php
    }
  
}
add_action( 'wp_footer', 'wwsSetRegistrationDefaultCountry', 99 );


?>