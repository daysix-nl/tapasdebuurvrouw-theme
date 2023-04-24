<section>
	<div class="bg-cover bg-center bg-no-repeat w-full h-[60vh]" style="background-image: url('/wp-content/uploads/2023/01/Gourmet-pakket_vierkant.jpg')">')"></div>
</section>
<section>
    <div class="container pt-8 md:pt-10">
        <h1 class="text-60 leading-70 text-white text-center font-typebold">Bijna aan tafel!</h1>
    </div>
</section>
<!-- WINKELWAGEN -->
<section>
    <div class="container grid gap-5 pt-6">
    <?php defined( 'ABSPATH' ) || exit;
    do_action( 'woocommerce_before_cart' ); ?>
    <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <?php do_action( 'woocommerce_before_cart_table' ); ?>
        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">	
            <tbody>
                <?php do_action( 'woocommerce_before_cart_contents' ); ?>
                <?php
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                    $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
                    if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                        $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                        ?>
                        <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                        <div class="col-span-1">
                            <div class="grid grid-cols-4 gap-6">
                                <div class="col-span-1">
                                    <?php
                                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                                    if ( ! $product_permalink ) {
                                        echo $thumbnail; // PHPCS: XSS ok.
                                    } else {
                                        printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                    }
                                    ?>
                                </div>
                                <div class="col-span-2 pomm-wijzigen pt-2">
                                <div class="flex items-center pb-2">
                                    <div class="">
                                        <?php
                                        if ( ! $product_permalink ) {
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                        } else {
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="text-white font-typebold text-25 leading-25">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                        }
                                            ?>
                                    </div>
                                    <div class="text-white pl-1 font-typebold text-20 leading-25">-
                                        <?php
                                            echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                        ?>
                                    </div>
                                </div>
                                <?php
                                        // Meta data.
                                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.
                                        // Backorder notification.
                                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                                        }
                                        ?>
                                </div>
                                <div class="col-span-1 flex flex-col pomm-wijzigen items-end">
                                <?php
                                    do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );
                                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="text-14 leading-14 font-volteregular text-white underline" aria-label="%s" data-product_id="%s" data-product_sku="%s">verwijderen</a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            esc_html__( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() )
                                        ),
                                        $cart_item_key
                                    );
                                ?>
                                </div>
                            </div>
                            </div>
                        </tr>
                        <?php
                    }
                }
                ?>
                <?php do_action( 'woocommerce_cart_contents' ); ?>
                <?php do_action( 'woocommerce_after_cart_contents' ); ?>
            </tbody>
        </table>
        <?php do_action( 'woocommerce_after_cart_table' ); ?>
    </form>
    <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
    <?php do_action( 'woocommerce_after_cart' ); ?>
    </div>
</section>

<!-- AFREKENEN -->

<div class="container pb-8 md:pb-10">
    <div class="flex justify-end">
        <div class="max-w-[855px]">
            <!-- <p class="text-45 leading-55 text-white text-center font-typebold pb-3"><?php echo WC()->cart->get_cart_total(); ?></p> -->
            <h2 class="text-45 leading-55 text-white text-center font-typebold pb-3">Gegevens</h2>
            <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
        </div>
    </div>
    
</div>


</section>