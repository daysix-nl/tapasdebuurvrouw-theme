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
        class="bg-darkyellow text-white text-18 px-2 py-0.75 rounded-3xl min-w-[175px] w-fit flex justify-center items-center"
    >
        <?php echo esc_html( $link_title ); ?>
    </a>
<?php endif; ?>