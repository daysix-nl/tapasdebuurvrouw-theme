<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="cols-span-1">
            <h2 class="text-45 leading-45 font-typebold text-white pb-3"><?php the_field("title") ?></h2>
            <div class="form-contact pr-5">
                <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
            </div>
        </div>
        <div class="cols-span-1 pr-5">
            <?php if(get_field("text")): ?>
                <p class="text-16 leading-26 font-volteregular text-white pb-1.5"><?php the_field("text") ?></p>
            <?php endif; ?>
            <?php if(get_field("sub_text")): ?>
                <p class="text-16 leading-26 font-volteregular text-white pb-3"><?php the_field("sub_text") ?></p>
            <?php endif; ?>
            <div class="pb-3">
                <p class="text-16 leading-26 font-volteregular text-white"><?php the_field("name", "option");?></p>
                <p class="text-16 leading-26 font-volteregular text-white"><?php the_field("straat_+_huisnummer", "option");?></p>
                <p class="text-16 leading-26 font-volteregular text-white"><?php the_field("postcode_+_plaats", "option");?></p>
            </div>
            <div class="flex flex-col">
                <a class="text-16 leading-26 font-volteregular text-white" href="tel:+<?php the_field("telefoonummer", "option");?>"><?php the_field("telefoonummer", "option");?></a>
                <a class="text-16 leading-26 font-volteregular text-white" href="mailto:<?php the_field("e-mailadress", "option");?>"><?php the_field("e-mailadress", "option");?></a>
            </div>
            <div class="flex flex-col mt-3">
                <p class="text-16 leading-26 font-volteregular text-white">Volg ons!</p>
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

        </div>
    </div>
</section>