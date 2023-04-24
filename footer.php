<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>
<?php
if ( is_wc_endpoint_url( 'order-received' ) ) {
    // Dit is een WooCommerce bedankpagina
    // Voer hier de code uit die je wilt uitvoeren voor de bedankpagina
} else { ?>
<footer class="relative">
<?php include get_template_directory() . '/componenten/background-image.php'; ?>
    <section class=" container ">
        <div class="grid grid-cols-5 gap-3 xl:justify-items-center border-y-[1px] border-white py-4 xl:px-2">
            <div class="col-span-5 sm:col-span-2 xl:col-span-1">
                <h3 class="text-white font-typebold text-22 mb-1">Contact</h3>
                <p class="text-white text-13 leading-23 font-volteregular"><?php the_field("name", "option");?></p>
                <p class="text-white text-13 leading-23 font-volteregular"><?php the_field("straat_+_huisnummer", "option");?></p>
                <p class="text-white text-13 leading-23 font-volteregular"><?php the_field("postcode_+_plaats", "option");?></p>
                <a href="mailto:<?php the_field("e-mailadress", "option");?>">
                    <p class="text-white text-13 leading-23 font-volteregular hover:text-yellow duration-300"><?php the_field("e-mailadress", "option");?></p>
                </a>
            </div>
            <div class="col-span-5 sm:col-span-2 xl:col-span-1">
              <a href="https://www.google.com/maps/place/Tapas+de+Buurvrouw/@52.2050401,4.8746315,15z/data=!4m6!3m5!1s0x47c67438059ada8d:0x2940e198a1c6c2aa!8m2!3d52.2049086!4d4.8796955!16s%2Fg%2F1td1_gqk" target="_blank"><img class="rounded-3xl object-cover w-full h-full min-h-[150px] xl:min-h-min" src="/wp-content/themes/day-six/img/local/kaart.jpg" alt=""></a>
            </div>
            <div class="col-span-5 sm:col-span-2 md:col-span-2 xl:col-span-1">
                <h3 class="text-white font-typebold text-22 mb-1">Volg je ons al?</h3>
                <div class="flex flex-row">
                <?php 
                $link = get_field('instagram', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="w-2 mr-[5px] block" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/instagram.php'; ?>
                    </a>
                <?php endif; ?>
                <?php 
                $link = get_field('linkedin', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="w-2 mr-[5px] block" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/linkedin.php'; ?>
                    </a>
                <?php endif; ?>
                <?php 
                $link = get_field('facebook', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="w-2 mr-[5px] block" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include get_template_directory() . '/img/icons/facebook.php'; ?>
                    </a>
                <?php endif; ?>
                </div>
            </div>
            <div class="col-span-5 md:col-span-2 footer-arrow auto-rows-min">
                <h3 class="text-white font-typebold text-22 col-span-2 mb-1">Direct naar</h3>
                <div class="flex flex-col md:flex-row gap-3">
                    <div class="">
                        <?php if( have_rows('rij_1', "option") ): ?>
                            <?php while( have_rows('rij_1', "option") ): the_row(); ?>
                                <?php 
                                $link = get_sub_field('link', "option");
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><p class="text-white text-13 leading-23 font-volteregular hover:text-yellow duration-300"><?php echo esc_html( $link_title ); ?>    </p></a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                    <div class="c">
                        <?php if( have_rows('rij_2', "option") ): ?>
                            <?php while( have_rows('rij_2', "option") ): the_row(); ?>
                                <?php 
                                $link = get_sub_field('link', "option");
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><p class="text-white text-13 leading-23 font-volteregular hover:text-yellow duration-300"><?php echo esc_html( $link_title ); ?>    </p></a>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="flex flex-row flex-wrap justify-between gap-2  py-4 xl:px-4">
            <p class="text-white text-13 leading-23 font-volteregular mx-auto xl:mx-[unset]">© Tapas De Buurvrouw 2023 | <a href="https://studiosnoek.nl" target="_blank" class="hover:text-yellow duration-300">Created by Studio Snoek</a></p>
            <nav class="flex flex-wrap flex-row gap-3 mx-auto xl:ml-auto xl:mr-[unset]">
                <?php 
                $link = get_field('privacy', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="text-13 leading-23 font-volteregular text-white hover:text-yellow duration-300" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                <?php 
                $link = get_field('disclaimer', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="text-13 leading-23 font-volteregular text-white hover:text-yellow duration-300" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                <?php 
                $link = get_field('faq', 'option');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="text-13 leading-23 font-volteregular text-white hover:text-yellow duration-300" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </nav>
        </div>
    </section>
</footer>
<?php }
?>
<script>
setTimeout(function() {
    jQuery('.woocommerce-message').slideUp()
}, 2000);
</script>
<?php wp_footer(); ?>
</body>
</html>
