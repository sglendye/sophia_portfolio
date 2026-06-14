<?php
/**
 * @package Business Card Resume
 * @subpackage business-card-resume
 * Setup the WordPress core custom header feature.
 *
 * @uses business_card_resume_header_style()
*/

function business_card_resume_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'business_card_resume_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1400,
		'height'                 => 95,
		'wp-head-callback'       => 'business_card_resume_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'business_card_resume_custom_header_setup' );

if ( ! function_exists( 'business_card_resume_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see business_card_resume_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'business_card_resume_header_style' );
function business_card_resume_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$business_card_resume_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: left top;
			background-size: cover;
		}";
	   	wp_add_inline_style( 'business-card-resume-basic-style', $business_card_resume_custom_css );
	endif;
}
endif; //business_card_resume_header_style