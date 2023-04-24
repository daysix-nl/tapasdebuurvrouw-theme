<div class="<?php the_field('padding-inner'); ?>">
    <?php if(get_field('subtitle')): ?>
        <h4 class="<?php the_field('text-color'); ?> font-bold text-30 leading-30 mb-2"><?php the_field('subtitle'); ?></h4>
    <?php endif; ?>
    <?php if( have_rows('list') ): ?>
        <ul class="grid gap-2">
        <?php while( have_rows('list') ): the_row(); ?>
            <li class="<?php the_field('text-color'); ?> text-18 leading-28"><?php the_sub_field('list_li'); ?></li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>