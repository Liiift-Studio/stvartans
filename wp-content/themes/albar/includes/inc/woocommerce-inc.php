<?php
// Ensure cart contents update when products are added to the cart via AJAX
add_filter('woocommerce_add_to_cart_fragments', 'kaira_wc_header_add_to_cart_fragment');
 
function kaira_wc_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    
    ob_start(); ?>
        <a class="header-cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php _e('View your shopping cart', 'albar'); ?>">
            <span class="header-cart-checkout <?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? sanitize_html_class( 'cart-has-items' ) : ''; ?>">
                <i class="fas fa-shopping-cart"></i>
                <span><?php echo sprintf( _n( '%d item', '%d items', $woocommerce->cart->cart_contents_count, 'albar' ), $woocommerce->cart->cart_contents_count); ?></span>
            </span>
        </a>
    <?php
    $fragments['a.header-cart-contents'] = ob_get_clean();
    
    return $fragments;
}
