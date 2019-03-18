<?php
/*
Template Name: svadobne-template
 */
?>
<?php get_header();?>




<?php
$args = array(
    'post_type' => 'products',
    'post_status' => 'publish',
    'product_category' => 'tutut'
    // 'meta_key' => 'category',
    // 'meta_value' => 'svadobne',
);

$loop = new WP_Query($args);
if ($loop->have_posts()):
?>
  <div>
    <?php
while ($loop->have_posts()):
    $loop->the_post();

    if (has_post_thumbnail($post->ID)): $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
        ?>
        <div class="img__wrap">
            <img class="img__img" src="<?php echo $image[0]; ?>">
            <div class="img__description_layer"> 
                <p class="img__description">
                    <?php echo get_the_title(); ?><br>
                    <?php echo get_post_meta( $post->ID, 'description', true ); ?><br>
                    Veľkosť: <?php echo get_post_meta( $post->ID, 'size', true ); ?><br>
                    Dostupnosť: <?php echo (get_post_meta( $post->ID, 'availability', true ) == 'yes' )? 'áno' : 'nie';  ?><br>
                    Cena: <?php echo get_post_meta( $post->ID, 'price', true ); ?> €
                </p>
                
            </div>
        </div>
		<?php
    endif;

endwhile;
wp_reset_postdata();
?>
  </div>
<?php
else:
    esc_html_e('No testimonials in the diving taxonomy!', 'text-domain');
endif;
?>

<?php get_footer();?>