<?php
/**
 * Shortcodes
 *
 * 
 *
 * @package drossel_devana
 */

/*
==================================================
CONTACT FORM
Format: [contact_form]
==================================================
 */
function drossel_contact_form( $atts, $content = null ) {
	
	//get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
	);
	
	//return HTML
	ob_start();
	include 'templates/contact-form.php';
	return ob_get_clean();
	
}
add_shortcode( 'contact_form', 'drossel_contact_form' );

/*
==================================================
SLIDERS
Format: [slider id="slider id"]
==================================================
 */
function drossel_sliders($atts, $content = null)
{
  
    $atts = shortcode_atts(
        array(
            'id' => '',
        ),
        $atts,
        'drossel_sliders'
    );

    ob_start();

    $meta_keys = array('first_image', 'second_image', 'third_image', 'fourth_image', 'fifth_image');

    $j = 0;
    $i = get_post_meta($atts['id'], 'number_of_img', true);

    ?>
    <div class="g_slide" id="slides-<?php echo $atts['id']; ?>">
        <div class="switch_main">
        <?php
        foreach ($meta_keys as $meta_key) {
            if ($j >= $i) {
                continue;
            }
            ?>
                <a class="item switch_item" href="<?php echo get_post_meta($atts['id'], $meta_key . '_link', true); ?>">
                    <img data-src="<?php echo wp_get_attachment_image_src(get_post_meta($atts['id'], $meta_key, true), 'full')[0]; ?>" />
                </a>
                <div id="caption-<?php echo $j; ?>" class="slider-caption"><p><?php echo get_post_meta($atts['id'], $meta_key . '_caption', true); ?></p></div>

            <?php
            $j++;
        }
        ?>
        </div>
    </div>

    <script>
        $(function(){
            switchable({
		        $element: $('#slides-<?php echo $atts['id']; ?>'),
                interval: 4000,
		        effect: 'fade'
	        });
        });
    </script>

    <?php

    return ob_get_clean();
}
add_shortcode('slider', 'drossel_sliders');
// --------------- Sliders-----------------