
<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">  
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
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
                                <h3 class="absolute bottom-5 text-center w-full text-25 leading-25 font-typebold text-white px-1 card-item-content-first duration-300 break-words"><?php the_sub_field('titel', 'option');?></h3>
                                <a class="bg-yellow font-volteregular text-16 leading-19 h-3 text-white card-item-content-second duration-300 mb-1 absolute bottom-0 left-3 right-3 rounded-full flex justify-center items-center p-[2px]" href="<?php the_sub_field('button_link', 'option');?>" id="<?php the_sub_field('button_id', 'option');?>"><?php the_sub_field('button_tekst', 'option');?></a> 
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
        </div>
    </div>  
</section>


