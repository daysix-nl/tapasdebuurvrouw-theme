<section class="custom-block <?php the_field('background');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">

<div class="grid gap-5">


                <?php
                $loop = new WP_Query( array(
                    'post_type' => 'ptgerechten',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                )
                );
                ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <?php $postid = get_the_ID(); ?>
            <div class="container">
                <div class="rounded-3xl grid-cols-1 md:grid-cols-3 grid overflow-hidden bg-[#272626] shadow">
                    <div class="col-span-1 md:col-span-2 order-2 md:order-1">
                        <div class="tab-wrapper relative">
                            <div class="tab-header">
                                <button class="tab-btn">Gerecht</button>
                                <button class="tab-btn">Ingrediënten</button>
                                <button class="tab-btn">Bereidingswijze</button>
                                <div class="underline"></div>
                            </div>
                            <div class="tab-body">
                                <div class="tab-content h-[450px] overflow-scroll relative">
                                    <a href="<?php the_permalink();?>" target="_blank" class="absolute top-2 right-4 text-white underline">Print dit gerecht</a>
                                    <h4 class="text-45 leading-45 font-typebold text-white pb-3"><?php the_title();?></h4>
                                    <div class="text-16 leading-26 font-volteregular text-white"><?php the_field('gerecht', $postid);?></div>
                                </div>
                                <div class="tab-content h-[450px] overflow-scroll relative">
                                    <a href="<?php the_permalink();?>" target="_blank" class="absolute top-2 right-4 text-white underline">Print dit gerecht</a>
                                    <div class="text-16 leading-26 font-volteregular text-white"><?php the_field('ingredienten', $postid);?></div>
                                </div>
                                <div class="tab-content h-[450px] overflow-scroll relative">
                                     <a href="<?php the_permalink();?>" target="_blank" class="absolute top-2 right-4 text-white underline">Print dit gerecht</a>
                                    <div class="text-16 leading-26 font-volteregular text-white"><?php the_field('bereidingswijze', $postid);?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1  md:col-span-1 order-1 md:order-2">
                        <img class="w-full h-full object-cover" src="<?php the_field('afbeelding', $postid);?>" alt="Afbeelding gerecht">
                    </div>
                </div>
            </div>
           <?php endwhile; wp_reset_query(); ?>
    </div>
</section>