<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'page' ); ?>>
<?php
if ( is_wc_endpoint_url( 'order-received' ) ) {
    // Dit is een WooCommerce bedankpagina
    // Voer hier de code uit die je wilt uitvoeren voor de bedankpagina
} else { ?>



<header class="fixed top-0 right-0 left-0 z-10">
    <section class="bg-smokeblack px-2 md:px-10 flex flex-row h-[30px] items-center justify-center gap-3">
        <p class="text-13 leading-13 flex flex-row text-[#9ca3af] font-voltemedium">
            <!-- Gratis bij u thuisbezorgd -->
        </p>
      
    </section>
    <section class="bg-transparant px-2 md:px-10 flex flex-row justify-between items-center">
        <a href="/">
            <?php include get_template_directory() . '/img/local/logo.php'; ?>
        </a>
    </section>
</header>
    <menu class="flex flex-row gap-2 fixed top-[80px] right-3 z-[15] h-5 items-center">
            <button id="menuToggle" class="button-menu text-white">
                <span></span>
                <span></span>
                <span></span>
            </button>
             <?php if ( ! WC()->cart->get_cart_contents_count() == 0 ) { ?>
             <a href="/afrekenen" class="button-cart text-white relative h-50 mb-3">
                <?php include get_template_directory() . '/img/icons/bord.php'; ?>
                <small class="absolute top-[0px] right-[9px] text-10 text-center w-[15px]"><?php echo WC()->cart->get_cart_contents_count(); ?></small>
            </a>
        <?php } ?>

        </menu>

<div class="mobile-navbar-block right-0 lg:right-[20px] xl:right-[80px] top-0 lg:top-[130px] w-screen lg:w-[980px] md:rounded-2xl">
    <nav>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mt-12 lg:mt-0">
            <div class="col-span-1 hidden lg:block">
                <div class="relative aspect-square h-auto bg-yellow overflow-hidden rounded-2xl">
                    <a href="/bestellen" class="absolute top-0 bottom-0 left-0 right-0" id="">
                        <div class="flex items-center h-full">
                            <h3 class="text-center w-full text-40 leading-40 font-typebold text-white px-1">Online<br> Bestellen</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-span-1 lg:col-span-2">
                <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-4 gap-2">
                    <?php
                    // Check value exists.
                    if( have_rows('navigatie', 'option') ):
                        // Loop through rows.
                        while ( have_rows('navigatie', 'option') ) : the_row();
                            // Case: Navigatie item.
                        
                            if( get_row_layout() == 'navigatie_item'): ?>
                                <div class="rounded-t-2xl relative aspect-square h-auto card-item overflow-hidden">
                                    <a href="<?php the_sub_field('button_link', 'option');?>" id="<?php the_sub_field('button_id', 'option');?>">
                                        <div class="card-item-bg duration-300 h-full w-full bg-cover bg-center bg-no-repeat" style="background-image: url('<?php the_sub_field('afbeelding', 'option');?>')"></div>
                                        <div class="card-item-overlay absolute top-[30%] left-0 right-0 bottom-0"></div>
                                        <h3 class="absolute bottom-4 text-center w-full text-16 leading-16 font-typebold text-white px-1 card-item-content-first duration-300"><?php the_sub_field('titel', 'option');?></h3>
                                        <a class="bg-yellow font-volteregular text-12 leading-12 h-2 text-white card-item-content-second duration-300 mb-1 absolute bottom-0 left-[13px] right-[13px] rounded-full flex justify-center items-center p-[2px]" href="<?php the_sub_field('link', 'option');?>" id="<?php the_sub_field('button_id', 'option');?>"><?php the_sub_field('button_tekst', 'option');?></a> 
                                    </a>
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
                    <div class="relative aspect-square h-auto bg-yellow overflow-hidden rounded-2xl block lg:hidden">
                    <a href="/bestellen" class="absolute top-0 bottom-0 left-0 right-0" id="">
                        <div class="flex items-center h-full">
                            <h3 class="text-center w-full text-22 leading-22 font-typebold text-white px-1">Online<br> Bestellen</h3>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="overlay"></div>
<?php }
?>