<?php
/**
 * Template part for displaying WooCommerce mini cart, usually placed in the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mode
 */

?>

<?php if ( class_exists( 'Woocommerce' ) ) : ?>

<?php $cart_content = WC()->cart->cart_contents_count; ?>

<div class="wc-header-cart__wrap">
    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="wc-header-cart__link">
        <i class="mo mo-basket" aria-hidden="true"></i>
        <span class="screen-reader-text"><?php esc_html_e( 'Cart', 'mode' ); ?></span>
        <span class="wc-header-cart__cart-count">(<?php echo intval($cart_content); ?>)</span>
    </a>
    <div class="sub-menu wc-cart-mini__wrapper">
        <div class="wc-cart-mini__inner">
        <?php woocommerce_mini_cart(); ?>
        </div>
    </div>
</div>

<?php endif; //end Woocommerce class_exists check ?>