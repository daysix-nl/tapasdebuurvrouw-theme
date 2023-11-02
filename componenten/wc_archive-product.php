<section>
    <div class="bg-cover bg-center bg-no-repeat w-full h-[60vh]" style="background-image: url('/wp-content/uploads/2023/04/Header_Online_Bestellen.jpg')"></div>
</section>
<section>
	<div class="container flex gap-3 py-8 md:py-10 ">
        <div class="hidden lg:block">
        <div class="relative-float">
            <div class="float-content pr-3">
                <div class="w-[300px] bg-darkgrey rounded-2xl px-2 py-3 inner-shadow">
                    <div class="grid grid-cols-1 gap-1">
                    <?php
                    // Check value exists.
                    if( have_rows('bestellen', 'option') ):

                        // Loop through rows.
                        while ( have_rows('bestellen', 'option') ) : the_row(); 

                            // Case: Paragraph layout.
                            if( get_row_layout() == 'bestellen_groep'): ?>
            
                                    <a href="#<?php the_sub_field('categorie_slug', 'option');?>" class="text-white font-volteregular text-16"><?php the_sub_field('titel', 'option');?></a>
                        <?php
                            // Case: Paragraph layout.
                            elseif( get_row_layout() == 'bestellen_gerecht'): ?>
            
                                    <a href="#<?php the_sub_field('categorie_slug', 'option');?>" class="text-white font-volteregular text-16"><?php the_sub_field('titel', 'option');?></a>

                    <?php

                            endif;

                        // End loop.
                        endwhile;

                    // No value.
                    else :
                        // Do something...
                    endif;
                    ?>
                    </div>
                </div>
            </div>
        </div>
        </div>

		<div class="w-full text-center">
            <h1 class="text-60 leading-70 text-white text-center font-typebold">Online bestellen</h1>
      

            <?php
            // Check value exists.
            if( have_rows('bestellen', 'option') ):

                // Loop through rows.
                while ( have_rows('bestellen', 'option') ) : the_row(); 

                    // Case: Paragraph layout.
                    if( get_row_layout() == 'bestellen_groep'): ?>
                <div id="<?php the_sub_field('categorie_slug', 'option');?>"></div>
                <h2 class="text-45 leading-55 text-white text-center font-typebold pt-6"><?php the_sub_field('titel', 'option');?></h2>
                <p class="text-white font-volteregular text-16 pt-2"><?php the_sub_field('tekst', 'option');?></p>
                <div class="grid grid-cols-2 md:grid-cols-3 py-6 gap-3">
   
                <?php
                    $catt = get_sub_field('categorie_slug', 'option');
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 3,
                        'product_cat' => $catt
                        );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="col-span-1">
                            <div class="rounded-t-2xl relative aspect-square h-auto card-item overflow-hidden">
                                <a href="<?php the_permalink(); ?>" id="bestellen_<?php echo $loop->post->post_title; ?>">
                                    <div class="card-item-bg duration-300 h-full w-full bg-cover bg-center bg-no-repeat" style="background-image: url('<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>')"></div>
                                    <div class="card-item-overlay absolute top-[30%] left-0 right-0 bottom-0"></div>
                                    <h3 class="absolute bottom-7 text-center w-full text-25 leading-25 font-typebold text-white px-1 card-item-content-first duration-300"><?php echo $loop->post->post_title; ?></h3>
                                    <p class="absolute bottom-5 text-center w-full text-14 leading-14 font-volteregular text-white px-1 card-item-content-first duration-300"><?php the_field('usp');?></p>
                                    <a class="bg-yellow font-volteregular text-16 leading-19 h-3 text-white card-item-content-second duration-300 mb-1 absolute bottom-0 left-3 right-3 rounded-full flex justify-center items-center p-[2px]" href="<?php the_permalink(); ?>" id="bestellen_<?php echo $loop->post->post_title; ?>">Bestellen</a> 
                                </a>
                            </div>
                            <p class="text-center w-full text-14 leading-14 font-volteregular text-white px-1"><?php echo $loop->post->post_excerpt; ?></p>
                            </div>
                        <?php
                            endwhile;
                    } else {
                        echo __( 'No products found' );
                    }
                    wp_reset_postdata();
                ?>

            </div>
                    <?php
             // Case: Paragraph layout.
                    elseif( get_row_layout() == 'bestellen_gerecht'): ?>
                <div id="<?php the_sub_field('categorie_slug', 'option');?>"></div>
                <h2 class="text-45 leading-55 text-white text-center font-typebold pt-6"><?php the_sub_field('titel', 'option');?></h2>
                <p class="text-white font-volteregular text-16 pt-2"><?php the_sub_field('tekst', 'option');?></p>
                <div class="grid grid-cols-2 py-6 gap-x-3 justify-start text-left">
   
                <?php
                    $catt = get_sub_field('categorie_slug', 'option');
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'product_cat' => $catt
                        );
                    $loop = new WP_Query( $args );
                    if ( $loop->have_posts() ) {
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="col-span-1">
                            <div class="rounded-t-2xl h-auto">
                                <h3 class="text-25 leading-25 font-typebold text-white px-1 duration-300"><?php echo $loop->post->post_title; ?></h3>
                            </div>
                            </div>
                            <div class="col-span-1 grid grid-cols-2">
                                <div class="col-span-1">
                                    <p class="text-25 leading-25 font-typebold text-white px-1 duration-300">€ 2,30</p>
                                </div>
                                <div class="col-span-1">
                                    <p class="text-25 leading-25 font-typebold text-white px-1 duration-300">Bestel</p>
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
                        <?php
                            endwhile;
                    } else {
                        echo __( 'No products found' );
                    }
                    wp_reset_postdata();
                ?>
            </div>
              <?php

                    endif;

                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;
            ?>

                



           
		</div>
	</div>
</section>
