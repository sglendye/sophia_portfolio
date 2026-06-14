<?php
/**
 * Business Card Resume: Block Patterns
 *
 * @package Business Card Resume
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'business-card-resume',
		array( 'label' => __( 'Business Card Resume', 'business-card-resume' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'business-card-resume/banner-section',
		array(
			'title'      => __( 'Banner Section', 'business-card-resume' ),
			'categories' => array( 'business-card-resume' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/banner.png\",\"id\":214,\"dimRatio\":50,\"minHeight\":500,\"align\":\"full\",\"className\":\"business-card-resume-slider-section\"} -->\n<div class=\"wp-block-cover alignfull business-card-resume-slider-section\" style=\"min-height:500px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-214\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"className\":\"slider-section\"} -->\n<div class=\"wp-block-columns slider-section\"><!-- wp:column {\"className\":\"slider-content\"} -->\n<div class=\"wp-block-column slider-content\"><!-- wp:heading {\"textColor\":\"white\"} -->\n<h2 class=\"has-white-color has-text-color\">Hello, My Name is</h2>\n<!-- /wp:heading -->\n\n<!-- wp:heading {\"level\":1,\"style\":{\"color\":{\"text\":\"var(--primary-color)\"}}} -->\n<h1 class=\"has-text-color\" style=\"color:var(--primary-color)\">Max Miedinger</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"textColor\":\"white\"} -->\n<p class=\"has-white-color has-text-color\">FREELANCE GRAPHIC DESIGNER &amp; UX/UI DESIGNER</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {\"className\":\"btn-section\"} -->\n<div class=\"wp-block-columns btn-section\"><!-- wp:column {\"width\":\"\",\"className\":\"slider-btn\"} -->\n<div class=\"wp-block-column slider-btn\"><!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"black\",\"textColor\":\"white\",\"className\":\"is-style-fill\"} -->\n<div class=\"wp-block-button is-style-fill\"><a class=\"wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button\">Hire Me</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"\",\"className\":\"slider-btn\"} -->\n<div class=\"wp-block-column slider-btn\"><!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"left\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"black\",\"textColor\":\"white\",\"className\":\"is-style-fill\"} -->\n<div class=\"wp-block-button is-style-fill\"><a class=\"wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button\">Check My Portfolio</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"icons-section\"} -->\n<div class=\"wp-block-column icons-section\"><!-- wp:social-links {\"iconColor\":\"white\",\"iconColorValue\":\"#ffffff\",\"iconBackgroundColor\":\"black\",\"iconBackgroundColorValue\":\"#000000\",\"size\":\"has-large-icon-size\",\"className\":\"is-style-default\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"right\"}} -->\n<ul class=\"wp-block-social-links has-large-icon-size has-icon-color has-icon-background-color is-style-default\"><!-- wp:social-link {\"url\":\"www.facebbok.com\",\"service\":\"facebook\",\"label\":\"#\"} /-->\n\n<!-- wp:social-link {\"url\":\"www.ftwitter.com\",\"service\":\"twitter\",\"label\":\"#\"} /-->\n\n<!-- wp:social-link {\"url\":\"www.instagram.com\",\"service\":\"instagram\",\"label\":\"#\"} /-->\n\n<!-- wp:social-link {\"url\":\"www.linkedin.com\",\"service\":\"linkedin\",\"label\":\"#\"} /--></ul>\n<!-- /wp:social-links --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'business-card-resume/service-section',
		array(
			'title'      => __( 'Service Section', 'business-card-resume' ),
			'categories' => array( 'business-card-resume' ),
			'content'    => "<!-- wp:group {\"className\":\"business-card-resume-service-section py-5\"} -->\n<div class=\"wp-block-group business-card-resume-service-section py-5\"><!-- wp:paragraph {\"textColor\":\"white\"} -->\n<p class=\"has-white-color has-text-color\">Portfolio</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"style\":{\"typography\":{\"letterSpacing\":\"0px\"},\"color\":{\"text\":\"var(--primary-color)\"}}} -->\n<h2 class=\"has-text-color\" style=\"color:var(--primary-color);letter-spacing:0px\">My Latest Works</h2>\n<!-- /wp:heading -->\n\n<!-- wp:columns {\"className\":\"post-section\"} -->\n<div class=\"wp-block-columns post-section\"><!-- wp:column {\"className\":\"service-box mb-lg-0 mb-3\"} -->\n<div class=\"wp-block-column service-box mb-lg-0 mb-3\"><!-- wp:image {\"id\":309,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n<figure class=\"wp-block-image size-full mb-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Image1.png\" alt=\"\" class=\"wp-image-309\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"service-box mb-lg-0 mb-3\"} -->\n<div class=\"wp-block-column service-box mb-lg-0 mb-3\"><!-- wp:image {\"id\":310,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n<figure class=\"wp-block-image size-full mb-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Image2.png\" alt=\"\" class=\"wp-image-310\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"service-box mb-lg-0 mb-3\"} -->\n<div class=\"wp-block-column service-box mb-lg-0 mb-3\"><!-- wp:image {\"id\":312,\"sizeSlug\":\"full\",\"linkDestination\":\"none\",\"className\":\"mb-0\"} -->\n<figure class=\"wp-block-image size-full mb-0\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Image3.png\" alt=\"\" class=\"wp-image-312\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"service-box mb-lg-0 mb-3\"} -->\n<div class=\"wp-block-column service-box mb-lg-0 mb-3\"><!-- wp:image {\"id\":306,\"width\":296,\"height\":203,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"" . esc_url(get_template_directory_uri()) . "/block-patterns/images/Image4.png\" alt=\"\" class=\"wp-image-306\" width=\"296\" height=\"203\"/></figure>\n<!-- /wp:image --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:buttons {\"className\":\"service-btn\",\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons service-btn\"><!-- wp:button {\"backgroundColor\":\"black\",\"textColor\":\"white\",\"style\":{\"border\":{\"radius\":\"0px\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-color has-black-background-color has-text-color has-background wp-element-button\" style=\"border-radius:0px\">View All Portfolio</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:group -->",
		)
	);
}