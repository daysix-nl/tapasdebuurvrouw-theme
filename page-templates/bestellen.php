<?php
/**
 * Template name: Bestellen
 */
 get_header(); ?>


<!-- 

<section>
    <div class="bg-cover bg-center bg-no-repeat w-full h-[60vh]" style="background-image: url('http://de-buurvrouw.local/wp-content/uploads/2023/01/bbq.jpg')"></div>
</section>

<section>
	<div class="container flex gap-3 py-8 md:py-10">
		<div class="w-[400px] bg-darkgrey rounded-2xl px-2 py-3 inner-shadow hidden lg:block">
			<p class="text-white text-18">Hier komt een filter</p>
		</div>
		<div class="w-full text-center">
            <h1 class="text-60 leading-70 text-white text-center font-typebold">Online bestellen</h1>
            <div class="grid grid-cols-3 py-6 gap-x-3">


                <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 12
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
                                    <p class="absolute bottom-5 text-center w-full text-14 leading-14 font-volteregular text-white px-1 card-item-content-first duration-300">v.a. 4 personen € 63,80</p>
                                    <a class="bg-yellow font-volteregular text-16 leading-19 h-3 text-white card-item-content-second duration-300 mb-1 absolute bottom-0 left-3 right-3 rounded-full flex justify-center items-center p-[2px]" href="<?php the_permalink(); ?>" id="bestellen_<?php echo $loop->post->post_title; ?>">Bestellen</a> 
                                </a>
                            </div>
                            <p class="text-center w-full text-14 leading-14 font-volteregular text-white px-1">De Tapas borrel plank bestaat uit koude gerechten in een mix van vlees, vis en vegetarisch.</p>
                            </div>
                        
                        <?php
                            endwhile;
                    } else {
                        echo __( 'No products found' );
                    }
                    wp_reset_postdata();
                ?>




            </div>
		</div>
	</div>
</section> -->


<?php get_footer(); ?>