<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="relative">
        <div class="container grid grid-cols-2 gap-3 md:gap-8">
            <div class="hidden md:block col-span-1"></div>
            <?php 
                $image = get_field('image');
                if( !empty( $image ) ): ?>
                    <img class="col-span-2 md:col-span-[unet] md:absolute md:top-0 md:left-[-40px] md:w-[50%] h-full object-cover rounded-3xl md:pr-0" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <div class="col-span-2 md:col-span-1 md:py-6">
                <h2 class="text-45 leading-45 font-typebold text-white pb-3 uppercase"><?php the_field('title'); ?></h2>
                <p class="text-16 leading-26 font-volteregular text-white pb-3"><?php the_field('text'); ?></p>
                <div class="flex gap-3">
                    <?php 
                    $link = get_field('link_1');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="bg-yellow font-volteregular text-16 leading-19 h-3 text-white rounded-full flex justify-center items-center p-[2px] w-[200px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                    <?php 
                    $link = get_field('link_2');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="bg-yellow font-volteregular text-16 leading-19 h-3 text-white rounded-full flex justify-center items-center p-[2px] w-[200px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                
            </div>
        </div>
    </div>
</section>