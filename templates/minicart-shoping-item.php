<!-- Shopping Item -->
<div class="shopping-item">
    <div class="dropdown-cart-header">
        <span class="minicart-count-in">
            <?php
                $count = 0;
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    $count++;         
                }               
            ?> <?php echo sprintf ( _n( '%d item', '%d items', $count ), $count ); ?>
            </span>
            

        <a href="<?php echo WC()->cart->get_cart_url();?>">View Cart</a>
    </div>
    <ul class="shopping-list">
        <?php
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
            ?>

        <li>
            <?php
             // Product Remove Icon
                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    'woocommerce_cart_item_remove_link',
                    sprintf(
                        '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa fa-remove"></i></a>',
                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                        esc_html__( 'Remove this item', 'woocommerce' ),
                        esc_attr( $product_id ),
                        esc_attr( $_product->get_sku() )
                    ),
                    $cart_item_key
                );
         
                // Product Thumbnail
                $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                if ( ! $product_permalink ) {
                    echo $thumbnail; // PHPCS: XSS ok.
                } else {
                    printf( '<a href="%s" class="cart-img">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                }
             
                // Product Name
                if ( ! $product_permalink ) {
                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                } else {
                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<h4><a href="%s">%s</a></h4>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                }
                ?>         
            
            <p class="quantity"><span class="amount"><?php echo WC()->cart->get_product_price( $_product );?></span> - x<?php echo $cart_item['quantity']; ?></p>
        </li> 

        <?php } } ?>
    </ul>

    <div class="bottom">
        <div class="total">
            <span>Total</span>
            <span class="total-amount"><?php echo WC()->cart->get_cart_subtotal(); ?></span>
        </div>

        <?php if( $count <= 0 ){?>
            <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) );?>" class="btn animate">Continue Shopping</a>
        <?php } else{ ?>
            <a href="<?php echo WC()->cart->get_checkout_url();?>" class="btn animate">Checkout</a>        
        <?php  }?>
    </div>
</div>
<!--/ End Shopping Item -->

