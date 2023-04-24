<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
} ?>

<section>
	<div class="bg-cover bg-center bg-no-repeat w-full h-[60vh]" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
</section>

<section>
    <div class="container py-8 md:py-10">
        <h1 class="text-60 leading-70 text-white text-center font-typebold"><?php the_title();?></h1>
        <div class="text-16 font-volteregular text-white leading-26 text-center md:mx-6 pt-3"><?php the_content(); ?></div>
    </div>
</section>

<section>
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-6 pb-8 md:pb-10">
        <div class="col-span-1 md:ml-8">
            <div class="">
                <div class="rounded-t-2xl relative aspect-square h-auto card-item overflow-hidden">
                    <div class="card-item-bg duration-300 h-full w-full bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                    <div class="card-item-overlay absolute top-[30%] left-0 right-0 bottom-0"></div>
                    <div class="w-full">
                        <h3 class="absolute bottom-7 text-center w-full flex justify-center text-25 leading-25 font-typebold text-white px-1"><?php the_title();?></h3>
                        <p class="absolute bottom-5 text-center  w-full text-14 leading-14 font-volteregular text-white px-1"><?php the_field('usp');?></p>
                    </div>
                </div>
                <p class="text-center w-full text-14 leading-14 font-volteregular text-white px-4 lg:px-8"<?php the_excerpt(); ?>></p>
            </div>
        </div>
        <div class="col-span-1 md:mr-8 pomm-innit">
        <!-- ADD TO CART -->
            <?php
            if ( $product->is_in_stock() ) : ?>
                <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
                
                <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
                    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
                    <div class="w-full">
                        <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="bg-yellow font-volteregular text-16 leading-19 h-3 text-white duration-300 mb-1 rounded-full flex justify-center items-center py-[2px] px-4">Bestel</button>
                    </div>
                    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
                </form>
                <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
            <?php endif; ?>

        </div>
    </div>
</section>


<?php do_action( 'woocommerce_after_single_product' ); ?>
<?php endwhile; // end of the loop. ?>