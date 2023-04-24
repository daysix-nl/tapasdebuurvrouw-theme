<?php 
$link = get_field('button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
?>
    <a
        id="button-<?php echo esc_html( str_replace(' ', '', $link_title) ); ?>" 
        href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"     
        class="btn-<?php the_field('button_color');?> text-16 leading-16 md:text-16 md:leading-26  font-dmsans font-light p-button rounded-full transition ease-in duration-300 hover:ease-out h-[45px] flex items-center w-fit"
    >
        <?php echo esc_html( $link_title ); ?>
    </a>
<?php endif; ?>