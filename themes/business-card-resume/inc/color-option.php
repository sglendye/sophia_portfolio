<?php

	$business_card_resume_first_theme_color = get_theme_mod('business_card_resume_first_theme_color');

	$business_card_resume_custom_css = '';

	/*------------------ Theme Color Option -----------*/
	if ($business_card_resume_first_theme_color) {
		$business_card_resume_custom_css .= ':root {';
		$business_card_resume_custom_css .= '--primary-color: ' . esc_attr($business_card_resume_first_theme_color) . ' !important;';
		$business_card_resume_custom_css .= '} ';
	}

	// Layout Options
	$business_card_resume_theme_layout = get_theme_mod( 'business_card_resume_theme_layout_options','Default Theme');
    if($business_card_resume_theme_layout == 'Default Theme'){
		$business_card_resume_custom_css .='body{';
			$business_card_resume_custom_css .='max-width: 100%;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_theme_layout == 'Container Theme'){
		$business_card_resume_custom_css .='body{';
			$business_card_resume_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_theme_layout == 'Box Container Theme'){
		$business_card_resume_custom_css .='body{';
			$business_card_resume_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$business_card_resume_custom_css .='}';
	}
	
	/*--------- Preloader Color Option -------*/
	$business_card_resume_preloader_color = get_theme_mod('business_card_resume_preloader_color');

	if($business_card_resume_preloader_color != false){
		$business_card_resume_custom_css .=' .tg-loader{';
			$business_card_resume_custom_css .='border-color: '.esc_attr($business_card_resume_preloader_color).';';
		$business_card_resume_custom_css .='} ';
		$business_card_resume_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_preloader_color).';';
		$business_card_resume_custom_css .='} ';
	}

	$business_card_resume_preloader_bg_color = get_theme_mod('business_card_resume_preloader_bg_color');

	if($business_card_resume_preloader_bg_color != false){
		$business_card_resume_custom_css .=' #overlayer, .preloader{';
			$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_preloader_bg_color).';';
		$business_card_resume_custom_css .='} ';
	}

	$business_card_resume_preloader_bg_img = get_theme_mod('business_card_resume_preloader_bg_img');
	if($business_card_resume_preloader_bg_img != false){
		$business_card_resume_custom_css .=' #overlayer, .preloader{';
			$business_card_resume_custom_css .='background: url('.esc_attr($business_card_resume_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$business_card_resume_custom_css .='}';
	}

	/*------------ Button Settings option-----------------*/

	$business_card_resume_top_button_padding = get_theme_mod('business_card_resume_top_button_padding');
	$business_card_resume_bottom_button_padding = get_theme_mod('business_card_resume_bottom_button_padding');
	$business_card_resume_left_button_padding = get_theme_mod('business_card_resume_left_button_padding');
	$business_card_resume_right_button_padding = get_theme_mod('business_card_resume_right_button_padding');
	if($business_card_resume_top_button_padding != false || $business_card_resume_bottom_button_padding != false || $business_card_resume_left_button_padding != false || $business_card_resume_right_button_padding != false){
		$business_card_resume_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
			$business_card_resume_custom_css .='padding-top: '.esc_attr($business_card_resume_top_button_padding).'px; padding-bottom: '.esc_attr($business_card_resume_bottom_button_padding).'px; padding-left: '.esc_attr($business_card_resume_left_button_padding).'px; padding-right: '.esc_attr($business_card_resume_right_button_padding).'px; display:inline-block;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_button_border_radius = get_theme_mod('business_card_resume_button_border_radius');
	$business_card_resume_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
		$business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_button_border_radius).'px;';
	$business_card_resume_custom_css .='}';

	// button font weight
	$business_card_resume_button_font_weight = get_theme_mod('business_card_resume_button_font_weight', '700');
  	$business_card_resume_custom_css .='.blogbtn a{';
    $business_card_resume_custom_css .='font-weight: '.esc_attr($business_card_resume_button_font_weight).';';
  	$business_card_resume_custom_css .='}';


  	// button text transform
  	$business_card_resume_button_text_transform = get_theme_mod('business_card_resume_button_text_transform', 'Uppercase');
  	if($business_card_resume_button_text_transform == 'capitalize' ){
    	$business_card_resume_custom_css .='.blogbtn a{';
      	$business_card_resume_custom_css .=' text-transform: capitalize;';
    	$business_card_resume_custom_css .='}';
  	}elseif($business_card_resume_button_text_transform == 'lowercase' ){
    	$business_card_resume_custom_css .='.blogbtn a{';
      	$business_card_resume_custom_css .=' text-transform: lowercase;';
    	$business_card_resume_custom_css .='}';
  	}

	// Button letter spacing
	$business_card_resume_button_letter_spacing = get_theme_mod('business_card_resume_button_letter_spacing', '0.3');
	$business_card_resume_custom_css .='.blogbtn a{';
		$business_card_resume_custom_css .='letter-spacing: '.esc_attr($business_card_resume_button_letter_spacing).'px;';
	$business_card_resume_custom_css .='}';	

	//Button hover effect
	$business_card_resume_button_hover_effect = get_theme_mod('business_card_resume_button_hover_effect', 'disable');
	if ($business_card_resume_button_hover_effect !== 'disable') {
		$business_card_resume_custom_css .= '.blogbtn:hover {';
		switch ($business_card_resume_button_hover_effect) {
			case 'pulse':
				$business_card_resume_custom_css .= 'animation: pulse 0.5s ease-in-out;';
				break;
			case 'rubberBand':
				$business_card_resume_custom_css .= 'animation: rubberBand 0.5s ease-in-out;';
				break;
			case 'swing':
				$business_card_resume_custom_css .= 'animation: swing 0.5s ease-in-out;';
				break;
			case 'tada':
				$business_card_resume_custom_css .= 'animation: tada 0.5s ease-in-out;';
				break;
			case 'jello':
				$business_card_resume_custom_css .= 'animation: jello 0.5s ease-in-out;';
				break;
		}
		$business_card_resume_custom_css .= '}';
	}

	//keyframes for all animations
	$business_card_resume_custom_css .= '
	@keyframes pulse {
		0% { transform: scale(1); }
		50% { transform: scale(1.1); }
		100% { transform: scale(1); }
	}

	@keyframes rubberBand {
		0% { transform: scale(1); }
		30% { transform: scaleX(1.25) scaleY(0.75); }
		40% { transform: scaleX(0.75) scaleY(1.25); }
		50% { transform: scale(1); }
	}

	@keyframes swing {
		20% { transform: rotate(15deg); }
		40% { transform: rotate(-10deg); }
		60% { transform: rotate(5deg); }
		80% { transform: rotate(-5deg); }
		100% { transform: rotate(0deg); }
	}

	@keyframes tada {
		0% { transform: scale(1); }
		10%, 20% { transform: scale(0.9) rotate(-3deg); }
		30%, 50%, 70%, 90% { transform: scale(1.1) rotate(3deg); }
		40%, 60%, 80% { transform: scale(1.1) rotate(-3deg); }
		100% { transform: scale(1) rotate(0); }
	}

	@keyframes jello {
		0%, 11.1%, 100% { transform: none; }
		22.2% { transform: skewX(-12.5deg) skewY(-12.5deg); }
		33.3% { transform: skewX(6.25deg) skewY(6.25deg); }
		44.4% { transform: skewX(-3.125deg) skewY(-3.125deg); }
		55.5% { transform: skewX(1.5625deg) skewY(1.5625deg); }
		66.6% { transform: skewX(-0.78125deg) skewY(-0.78125deg); }
		77.7% { transform: skewX(0.390625deg) skewY(0.390625deg); }
		88.8% { transform: skewX(-0.1953125deg) skewY(-0.1953125deg); }
	}';

  	// widgets heading font size
	$business_card_resume_widgets_heading_fontsize = get_theme_mod('business_card_resume_widgets_heading_fontsize',25);
	if($business_card_resume_widgets_heading_fontsize != false){
		$business_card_resume_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
			$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_widgets_heading_fontsize).'px; ';
		$business_card_resume_custom_css .='}';
	}

	// widgets heading font weight
	$business_card_resume_widgets_heading_font_weight = get_theme_mod('business_card_resume_widgets_heading_font_weight', '600');
  	$business_card_resume_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
    $business_card_resume_custom_css .='font-weight: '.esc_attr($business_card_resume_widgets_heading_font_weight).';';
  	$business_card_resume_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$business_card_resume_footer_widgets_heading = get_theme_mod( 'business_card_resume_footer_widgets_heading','Left');
    if($business_card_resume_footer_widgets_heading == 'Left'){
		$business_card_resume_custom_css .='#footer h3{';
		$business_card_resume_custom_css .='text-align: left;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_footer_widgets_heading == 'Center'){
		$business_card_resume_custom_css .='#footer h3{';
			$business_card_resume_custom_css .='text-align: center;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_footer_widgets_heading == 'Right'){
		$business_card_resume_custom_css .='#footer h3{';
			$business_card_resume_custom_css .='text-align: right;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_footer_widgets_content = get_theme_mod( 'business_card_resume_footer_widgets_content','Left');
    if($business_card_resume_footer_widgets_content == 'Left'){
		$business_card_resume_custom_css .='#footer .widget ul,#footer aside p,.tagcloud,nav.wp-calendar-nav,#wp-calendar caption,.textwidget {';
		$business_card_resume_custom_css .='text-align: left;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_footer_widgets_content == 'Center'){
		$business_card_resume_custom_css .='#footer .widget ul,#footer aside p,.tagcloud,nav.wp-calendar-nav,#wp-calendar caption,.textwidget{';
			$business_card_resume_custom_css .='text-align: center;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_footer_widgets_content == 'Right'){
		$business_card_resume_custom_css .='#footer .widget ul,#footer aside p,.tagcloud,nav.wp-calendar-nav,#wp-calendar caption,.textwidget {';
			$business_card_resume_custom_css .='text-align: right;';
		$business_card_resume_custom_css .='}';
	}

	// Footer Heading Text Transform

	$business_card_resume_theme_lay = get_theme_mod( 'business_card_resume_footer_text_tranform','Capitalize');
    if($business_card_resume_theme_lay == 'Uppercase'){
		$business_card_resume_custom_css .='#footer h3{';
			$business_card_resume_custom_css .='text-transform: Uppercase;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_theme_lay == 'Lowercase'){
		$business_card_resume_custom_css .='#footer h3{';
			$business_card_resume_custom_css .='text-transform: Lowercase;';
		$business_card_resume_custom_css .='}';
	}
	else if($business_card_resume_theme_lay == 'Capitalize'){
		$business_card_resume_custom_css .='#footer h3{';
			$business_card_resume_custom_css .='text-transform: Capitalize;';
		$business_card_resume_custom_css .='}';
	}	

	// Footer Heading  letter spacing
	$business_card_resume_widgets_heading_letter_spacing = get_theme_mod('business_card_resume_widgets_heading_letter_spacing','');
	$business_card_resume_custom_css .='#footer h3{';
	$business_card_resume_custom_css .='letter-spacing: '.esc_attr($business_card_resume_widgets_heading_letter_spacing).'px;';
	$business_card_resume_custom_css .='}';		
	
/*---------------------------Footer Style -------------------*/

	$business_card_resume_theme_lay = get_theme_mod( 'business_card_resume_footer_template','business_card_resume-footer-one');
    if($business_card_resume_theme_lay == 'business_card_resume-footer-one'){
		$business_card_resume_custom_css .='.footerinner {';
			$business_card_resume_custom_css .='';
		$business_card_resume_custom_css .='}';

	}else if($business_card_resume_theme_lay == 'business_card_resume-footer-two'){
		$business_card_resume_custom_css .='.footerinner {';
			$business_card_resume_custom_css .='background: #E3F2FD !important;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.footerinner p,.footerinner span,.footerinner li a,.footerinner #wp-calendar caption,.footerinner #wp-calendar td,.footerinner #wp-calendar th, .footerinner, .footerinner h3, .footerinner a.rsswidget, .footerinner #wp-calendar a, .copyright a, .footerinner .custom_details, .footerinner ins span, .footerinner .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, .footerinner table, .footerinner th, .footerinner td, .footerinner caption, #sidebar caption,.footerinner nav.wp-calendar-nav a,.footerinner .search-form .search-field{';
			$business_card_resume_custom_css .='color:#000 !important;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='#footer p{';
			$business_card_resume_custom_css .='color:#000 !important;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.footerinner ul li::before{';
			$business_card_resume_custom_css .='background:#000;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.footerinner table, .footerinner th, .footerinner td,.footerinner.search-form .search-field,.footerinner .tagcloud a{';
			$business_card_resume_custom_css .='border: 1px solid #000;';
		$business_card_resume_custom_css .='}';

	}else if($business_card_resume_theme_lay == 'business_card_resume-footer-three'){
		$business_card_resume_custom_css .='.footerinner {';
			$business_card_resume_custom_css .='background: #0A0A1F !important;;';
		$business_card_resume_custom_css .='}';
	}
	else if($business_card_resume_theme_lay == 'business_card_resume-footer-four'){
		$business_card_resume_custom_css .='.footerinner {';
			$business_card_resume_custom_css .='background: #F5F5DC !important;;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.footerinner p,.footerinner span,.footerinner li a,.footerinner #wp-calendar caption,.footerinner #wp-calendar td,.footerinner #wp-calendar th, .footerinner, .footerinner h3, .footerinner a.rsswidget, .footerinner #wp-calendar a, .copyright a, .footerinner .custom_details, .footerinner ins span, .footerinner .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, .footerinner table, .footerinner th, .footerinner td, .footerinner caption, #sidebar caption,.footerinner nav.wp-calendar-nav a,.footerinner .search-form .search-field{';
			$business_card_resume_custom_css .='color:#000 !important;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='#footer p{';
			$business_card_resume_custom_css .='color:#000 !important;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.footerinner ul li::before{';
			$business_card_resume_custom_css .='background:#000;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.footerinner table, .footerinner th, .footerinner td,.footerinner.search-form .search-field,.footerinner .tagcloud a{';
			$business_card_resume_custom_css .='border: 1px solid #000;';
		$business_card_resume_custom_css .='}';
	}
    else if($business_card_resume_theme_lay == 'business_card_resume-footer-five'){
	$business_card_resume_custom_css .='.footerinner {';
		$business_card_resume_custom_css .='background: #333333 !important;;';
	$business_card_resume_custom_css .='}';
   }
	/*----------- Copyright css -----*/
	$business_card_resume_copyright_color = get_theme_mod('business_card_resume_copyright_color');
	$business_card_resume_custom_css .='#footer .copyright p,#footer .copyright a{';
		$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_copyright_color).'!important;';
	$business_card_resume_custom_css .='}';

	$business_card_resume_copyright_top_padding = get_theme_mod('business_card_resume_top_copyright_padding');
	$business_card_resume_copyright_bottom_padding = get_theme_mod('business_card_resume_bottom_copyright_padding');
	if($business_card_resume_copyright_top_padding != '' || $business_card_resume_copyright_bottom_padding != ''){
		$business_card_resume_custom_css .='.inner{';
			$business_card_resume_custom_css .='padding-top: '.esc_attr($business_card_resume_copyright_top_padding).'px; padding-bottom: '.esc_attr($business_card_resume_copyright_bottom_padding).'px; ';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_copyright_alignment = get_theme_mod('business_card_resume_copyright_alignment', 'center');
	if($business_card_resume_copyright_alignment == 'center' ){
		$business_card_resume_custom_css .='#footer .copyright p{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_copyright_alignment .';';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_copyright_alignment == 'left' ){
		$business_card_resume_custom_css .='#footer .copyright p{';
			$business_card_resume_custom_css .=' text-align: '. $business_card_resume_copyright_alignment .';';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_copyright_alignment == 'right' ){
		$business_card_resume_custom_css .='#footer .copyright p{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_copyright_alignment .';';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_copyright_font_size = get_theme_mod('business_card_resume_copyright_font_size');
	$business_card_resume_custom_css .='#footer .copyright p{';
		$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_copyright_font_size).'px;';
	$business_card_resume_custom_css .='}';

	$business_card_resume_back_to_top_color = get_theme_mod('business_card_resume_back_to_top_color');
	$business_card_resume_custom_css .='.back-to-top{';
		$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_back_to_top_color).'!important;';
	$business_card_resume_custom_css .='}';
		$business_card_resume_back_to_top_color = get_theme_mod('business_card_resume_back_to_top_color');
	$business_card_resume_custom_css .='.back-to-top::before{';
		$business_card_resume_custom_css .='border-bottom-color: '.esc_attr($business_card_resume_back_to_top_color).'!important;';
	$business_card_resume_custom_css .='}';

	$business_card_resume_back_to_top_text_color = get_theme_mod('business_card_resume_back_to_top_text_color');
	$business_card_resume_custom_css .='.back-to-top{';
		$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_back_to_top_text_color).'!important;';
	$business_card_resume_custom_css .='}';

	// back to top icon hover color
	$business_card_resume_scroll_icon_hover_color = get_theme_mod('business_card_resume_scroll_icon_hover_color');
	$business_card_resume_custom_css .='.back-to-top:hover{';
		$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_scroll_icon_hover_color). ' !important;';
	$business_card_resume_custom_css .='}';
		$business_card_resume_scroll_icon_hover_color = get_theme_mod('business_card_resume_scroll_icon_hover_color');
	$business_card_resume_custom_css .='.back-to-top:hover::before{';
		$business_card_resume_custom_css .='border-bottom-color: '.esc_attr($business_card_resume_scroll_icon_hover_color).'!important;';
	$business_card_resume_custom_css .='}';

	/*------ Topbar padding ------*/
	$business_card_resume_top_topbar_padding = get_theme_mod('business_card_resume_top_topbar_padding');
	$business_card_resume_bottom_topbar_padding = get_theme_mod('business_card_resume_bottom_topbar_padding');
	if($business_card_resume_top_topbar_padding != false || $business_card_resume_bottom_topbar_padding != false){
		$business_card_resume_custom_css .='.top-bar, .page-template-custom-front-page .top-bar{';
			$business_card_resume_custom_css .='padding-top: '.esc_attr($business_card_resume_top_topbar_padding).'px !important; padding-bottom: '.esc_attr($business_card_resume_bottom_topbar_padding).'px !important; ';
		$business_card_resume_custom_css .='}';
	}

	/*------ Woocommerce ----*/
	$business_card_resume_product_border = get_theme_mod('business_card_resume_product_border',true);

	if($business_card_resume_product_border == false){
		$business_card_resume_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$business_card_resume_custom_css .='border: 0;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_product_top = get_theme_mod('business_card_resume_product_top_padding',10);
	$business_card_resume_product_bottom = get_theme_mod('business_card_resume_product_bottom_padding',10);
	$business_card_resume_product_left = get_theme_mod('business_card_resume_product_left_padding',10);
	$business_card_resume_product_right = get_theme_mod('business_card_resume_product_right_padding',10);
	if($business_card_resume_product_top != false || $business_card_resume_product_bottom != false || $business_card_resume_product_left != false || $business_card_resume_product_right != false){
		$business_card_resume_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$business_card_resume_custom_css .='padding-top: '.esc_attr($business_card_resume_product_top).'px; padding-bottom: '.esc_attr($business_card_resume_product_bottom).'px; padding-left: '.esc_attr($business_card_resume_product_left).'px; padding-right: '.esc_attr($business_card_resume_product_right).'px;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_product_border_radius = get_theme_mod('business_card_resume_product_border_radius');
	if($business_card_resume_product_border_radius != false){
		$business_card_resume_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_product_border_radius).'px;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_product_box_shadow = get_theme_mod('business_card_resume_product_box_shadow','0');
	$business_card_resume_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$business_card_resume_custom_css .='box-shadow: '.esc_attr($business_card_resume_product_box_shadow).'px '.esc_attr($business_card_resume_product_box_shadow).'px '.esc_attr($business_card_resume_product_box_shadow).'px #eee;';
	$business_card_resume_custom_css .='}';		

	/*----- WooCommerce button css --------*/
	$business_card_resume_product_button_top = get_theme_mod('business_card_resume_product_button_top_padding',10);
	$business_card_resume_product_button_bottom = get_theme_mod('business_card_resume_product_button_bottom_padding',10);
	$business_card_resume_product_button_left = get_theme_mod('business_card_resume_product_button_left_padding',12);
	$business_card_resume_product_button_right = get_theme_mod('business_card_resume_product_button_right_padding',12);
	if($business_card_resume_product_button_top != false || $business_card_resume_product_button_bottom != false || $business_card_resume_product_button_left != false || $business_card_resume_product_button_right != false){
		$business_card_resume_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$business_card_resume_custom_css .='padding-top: '.esc_attr($business_card_resume_product_button_top).'px; padding-bottom: '.esc_attr($business_card_resume_product_button_bottom).'px; padding-left: '.esc_attr($business_card_resume_product_button_left).'px; padding-right: '.esc_attr($business_card_resume_product_button_right).'px;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_product_button_border_radius = get_theme_mod('business_card_resume_product_button_border_radius');
	if($business_card_resume_product_button_border_radius != false){
		$business_card_resume_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_product_button_border_radius).'px !important;';
		$business_card_resume_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$business_card_resume_product_sale_top = get_theme_mod('business_card_resume_product_sale_top_padding');
	$business_card_resume_product_sale_bottom = get_theme_mod('business_card_resume_product_sale_bottom_padding');
	$business_card_resume_product_sale_left = get_theme_mod('business_card_resume_product_sale_left_padding');
	$business_card_resume_product_sale_right = get_theme_mod('business_card_resume_product_sale_right_padding');
	if($business_card_resume_product_sale_top != false || $business_card_resume_product_sale_bottom != false || $business_card_resume_product_sale_left != false || $business_card_resume_product_sale_right != false){
		$business_card_resume_custom_css .='.woocommerce span.onsale {';
			$business_card_resume_custom_css .='padding-top: '.esc_attr($business_card_resume_product_sale_top).'px; padding-bottom: '.esc_attr($business_card_resume_product_sale_bottom).'px; padding-left: '.esc_attr($business_card_resume_product_sale_left).'px; padding-right: '.esc_attr($business_card_resume_product_sale_right).'px;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_product_sale_border_radius = get_theme_mod('business_card_resume_product_sale_border_radius',0);
	if($business_card_resume_product_sale_border_radius != false){
		$business_card_resume_custom_css .='.woocommerce span.onsale {';
			$business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_product_sale_border_radius).'px;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_menu_case = get_theme_mod('business_card_resume_product_sale_position', 'Right');
	if($business_card_resume_menu_case == 'Right' ){
		$business_card_resume_custom_css .='.woocommerce ul.products li.product .onsale{';
			$business_card_resume_custom_css .=' left:auto; right:0;';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_menu_case == 'Left' ){
		$business_card_resume_custom_css .='.woocommerce ul.products li.product .onsale{';
			$business_card_resume_custom_css .=' left:-10px; right:auto;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_product_sale_font_size = get_theme_mod('business_card_resume_product_sale_font_size',13);
	$business_card_resume_custom_css .='.woocommerce span.onsale {';
		$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_product_sale_font_size).'px;';
	$business_card_resume_custom_css .='}';


	/*---- Comment form ----*/
	$business_card_resume_comment_width = get_theme_mod('business_card_resume_comment_width', '100');
	$business_card_resume_custom_css .='#comments textarea{';
		$business_card_resume_custom_css .=' width:'.esc_attr($business_card_resume_comment_width).'%;';
	$business_card_resume_custom_css .='}';

	$business_card_resume_comment_submit_text = get_theme_mod('business_card_resume_comment_submit_text', 'Post Comment');
	if($business_card_resume_comment_submit_text == ''){
		$business_card_resume_custom_css .='#comments p.form-submit {';
			$business_card_resume_custom_css .='display: none;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_comment_title = get_theme_mod('business_card_resume_comment_title', 'Leave a Reply');
	if($business_card_resume_comment_title == ''){
		$business_card_resume_custom_css .='#comments h2#reply-title {';
			$business_card_resume_custom_css .='display: none;';
		$business_card_resume_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$business_card_resume_footer_bg_color = get_theme_mod('business_card_resume_footer_bg_color');
	if($business_card_resume_footer_bg_color != false){
		$business_card_resume_custom_css .='.footerinner{';
			$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_footer_bg_color).';';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_footer_bg_image = get_theme_mod('business_card_resume_footer_bg_image');
	if($business_card_resume_footer_bg_image != false){
		$business_card_resume_custom_css .='.footerinner{';
			$business_card_resume_custom_css .='background: url('.esc_attr($business_card_resume_footer_bg_image).');  background-size: cover;';
		$business_card_resume_custom_css .='}';

	}

	//footer icon color
	$business_card_resume_footer_icon_color = get_theme_mod('business_card_resume_footer_icon_color', '#fff');
	$business_card_resume_custom_css .='#footer .copyright a i{';
		$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_footer_icon_color).'!important;';
	$business_card_resume_custom_css .='}';

	/*-------- Footer Icon Alignment ------*/
	$business_card_resume_footer_icon_alignment = get_theme_mod('business_card_resume_footer_icon_alignment', 'Center');
	if($business_card_resume_footer_icon_alignment == 'Center' ){
		$business_card_resume_custom_css .='#footer .copyright{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_footer_icon_alignment .';';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_footer_icon_alignment == 'Left' ){
		$business_card_resume_custom_css .='#footer .copyright{';
			$business_card_resume_custom_css .=' text-align: '. $business_card_resume_footer_icon_alignment .';';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_footer_icon_alignment == 'Right' ){
		$business_card_resume_custom_css .='#footer .copyright{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_footer_icon_alignment .';';
		$business_card_resume_custom_css .='}';
	}

	//Footer Social Icon Font size
	$business_card_resume_footer_icon_font_size = get_theme_mod('business_card_resume_footer_icon_font_size');
	$business_card_resume_custom_css .='#footer .copyright a i{';
	$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_footer_icon_font_size).'px;';
	$business_card_resume_custom_css .='}';


    // footer image position
	$business_card_resume_footer_img_position = get_theme_mod('business_card_resume_footer_img_position','center center');
	if($business_card_resume_footer_img_position != false){
		$business_card_resume_custom_css .='.footerinner{';
			$business_card_resume_custom_css .='background-position: '.esc_attr($business_card_resume_footer_img_position).'!important;';
		$business_card_resume_custom_css .='}';
	}	

	// Footer Attatchment
	$business_card_resume_theme_lay = get_theme_mod( 'business_card_resume_footer_attatchment','scroll');
	if($business_card_resume_theme_lay == 'fixed'){
		$business_card_resume_custom_css .='.footerinner{';
			$business_card_resume_custom_css .='background-attachment: fixed;';
		$business_card_resume_custom_css .='}';
	}elseif ($business_card_resume_theme_lay == 'scroll'){
		$business_card_resume_custom_css .='.footerinner{';
			$business_card_resume_custom_css .='background-attachment: scroll;';
		$business_card_resume_custom_css .='}';
	}		

	/*---------------------------Footer top bottom padding -------------------*/

	$business_card_resume_footer_padding = get_theme_mod('business_card_resume_footer_padding');
	if($business_card_resume_footer_padding != false){
		$business_card_resume_custom_css .='#footer .footerinner{';
			$business_card_resume_custom_css .='padding: '.esc_attr($business_card_resume_footer_padding).' 0 !important;';
		$business_card_resume_custom_css .='}';
	}


	/*----- Featured image css -----*/
	$business_card_resume_feature_image_border_radius = get_theme_mod('business_card_resume_feature_image_border_radius');
	if($business_card_resume_feature_image_border_radius != false){
		$business_card_resume_custom_css .='#blog_post .blog-sec img{';
			$business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_feature_image_border_radius).'px;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_feature_image_shadow = get_theme_mod('business_card_resume_feature_image_shadow');
	if($business_card_resume_feature_image_shadow != false){
		$business_card_resume_custom_css .='#blog_post .blog-sec img{';
			$business_card_resume_custom_css .='box-shadow: '.esc_attr($business_card_resume_feature_image_shadow).'px '.esc_attr($business_card_resume_feature_image_shadow).'px '.esc_attr($business_card_resume_feature_image_shadow).'px #aaa;';
		$business_card_resume_custom_css .='}';
	}

	// blog post Pagination Alignment
	$business_card_resume_post_pagination_alignment = get_theme_mod( 'business_card_resume_post_pagination_option','Right');
	if($business_card_resume_post_pagination_alignment == 'Left'){
		$business_card_resume_custom_css .='.navigation nav.pagination{';
			$business_card_resume_custom_css .='justify-content: left;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_post_pagination_alignment == 'Center'){
		$business_card_resume_custom_css .='.navigation nav.pagination{';
			$business_card_resume_custom_css .='justify-content: center;';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_post_pagination_alignment == 'Right'){
		$business_card_resume_custom_css .='.navigation nav.pagination{';
			$business_card_resume_custom_css .='justify-content: right;';
		$business_card_resume_custom_css .='}';
	}

	//Blog Post Initial Cap
	$business_card_resume_initial_caps_enable = get_theme_mod('business_card_resume_initial_caps_enable', 'false');
	if($business_card_resume_initial_caps_enable == 'true' ){
		$business_card_resume_custom_css .='.blogger .entry-content p:nth-of-type(1)::first-letter,.blogger p:nth-of-type(1)::first-letter{';
			$business_card_resume_custom_css .=' font-size: 60px!important; font-weight: 800!important;';
		$business_card_resume_custom_css .=' margin-right: 4px;text-transform: uppercase;';
			$business_card_resume_custom_css .=' font-family: "Vollkorn", serif!important;';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_initial_caps_enable == 'false' ){
		$business_card_resume_custom_css .='.blogger .entry-content p:nth-of-type(1)::first-letter,.blogger p:nth-of-type(1)::first-letter{';
			$business_card_resume_custom_css .='display: none!important;';
		$business_card_resume_custom_css .='}';
	}

	/*----- Related posts image css-----*/
	 $business_card_resume_related_posts_image_shadow = get_theme_mod('business_card_resume_related_posts_image_shadow');
	 if($business_card_resume_related_posts_image_shadow != false){
		 $business_card_resume_custom_css .='.related-posts .blog-sec img{';
			 $business_card_resume_custom_css .='box-shadow: '.esc_attr($business_card_resume_related_posts_image_shadow).'px '.esc_attr($business_card_resume_related_posts_image_shadow).'px '.esc_attr($business_card_resume_related_posts_image_shadow).'px #aaa;';
		 $business_card_resume_custom_css .='}';
	}
	 
	 $business_card_resume_related_image_border_radius = get_theme_mod('business_card_resume_related_image_border_radius');
	 if($business_card_resume_related_image_border_radius != false){
		 $business_card_resume_custom_css .='.related-posts .blog-sec img{';
			 $business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_related_image_border_radius).'px;';
		 $business_card_resume_custom_css .='}';
	}

	/*----- Related Post display type css ------*/
	$business_card_resume_related_post_display_type = get_theme_mod('business_card_resume_related_post_display_type', 'blocks');
	if($business_card_resume_related_post_display_type == 'without blocks' ){
		$business_card_resume_custom_css .='.related-posts .blog-sec{';
			$business_card_resume_custom_css .='border: 0!important;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_related_post_metabox_seperator = get_theme_mod('business_card_resume_related_post_metabox_seperator', '|');
	if($business_card_resume_related_post_metabox_seperator != '' ){
		$business_card_resume_custom_css .='.related-posts .blog-sec .post-info span:after{';
			$business_card_resume_custom_css .=' content: "'.esc_attr($business_card_resume_related_post_metabox_seperator).'"; padding-left:10px;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.related-posts .blog-sec .post-info span:last-child:after{';
			$business_card_resume_custom_css .=' content: none;';
		$business_card_resume_custom_css .='}';
	}	

	/*------ Sticky header padding ------------*/
	$business_card_resume_top_sticky_header_padding = get_theme_mod('business_card_resume_top_sticky_header_padding');
	$business_card_resume_bottom_sticky_header_padding = get_theme_mod('business_card_resume_bottom_sticky_header_padding');
	$business_card_resume_custom_css .=' .fixed-header{';
		$business_card_resume_custom_css .=' padding-top: '.esc_attr($business_card_resume_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($business_card_resume_bottom_sticky_header_padding).'px';
	$business_card_resume_custom_css .='}';

		// featured image dimention
	$business_card_resume_blog_image_dimension = get_theme_mod('business_card_resume_blog_image_dimension', 'default');
	$business_card_resume_feature_image_custom_width = get_theme_mod('business_card_resume_feature_image_custom_width',250);
	$business_card_resume_feature_image_custom_height = get_theme_mod('business_card_resume_feature_image_custom_height',250);
	if($business_card_resume_blog_image_dimension == 'custom'){
		$business_card_resume_custom_css .='#blog_post .blog-sec img{';
			$business_card_resume_custom_css .='width: '.esc_attr($business_card_resume_feature_image_custom_width).'px; height: '.esc_attr($business_card_resume_feature_image_custom_height).'px;';
		$business_card_resume_custom_css .='}';
	}

	/*------ Related products ---------*/
	$business_card_resume_related_products = get_theme_mod('business_card_resume_single_related_products',true);
	if($business_card_resume_related_products == false){
		$business_card_resume_custom_css .=' .related.products{';
			$business_card_resume_custom_css .='display: none;';
		$business_card_resume_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$business_card_resume_menu_font_size = get_theme_mod('business_card_resume_menu_font_size',13);
	if($business_card_resume_menu_font_size != false){
		$business_card_resume_custom_css .='.nav-menu li a{';
			$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_menu_font_size).'px !important ;';
		$business_card_resume_custom_css .='}';
	}

	// menu padding
	$business_card_resume_menu_padding = get_theme_mod('business_card_resume_menu_padding',15);
	$business_card_resume_custom_css .='.nav-menu ul li a, .sf-arrows ul .sf-with-ul, .sf-arrows .sf-with-ul{';
		$business_card_resume_custom_css .='padding: '.esc_attr($business_card_resume_menu_padding).'px;';
	$business_card_resume_custom_css .='}';

	$business_card_resume_menu_font_weight = get_theme_mod('business_card_resume_menu_font_weight');
	$business_card_resume_custom_css .='.nav-menu ul li a{';
		$business_card_resume_custom_css .='font-weight: '.esc_attr($business_card_resume_menu_font_weight).';';
	$business_card_resume_custom_css .='}';

	$business_card_resume_menus_item = get_theme_mod( 'business_card_resume_menus_item_style','None');
    if($business_card_resume_menus_item == 'None'){
		$business_card_resume_custom_css .='.nav-menu ul li a{';
			$business_card_resume_custom_css .='';
		$business_card_resume_custom_css .='}';
	}else if($business_card_resume_menus_item == 'Zoom In'){
		$business_card_resume_custom_css .='.nav-menu ul li a:hover{';
			$business_card_resume_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$business_card_resume_custom_css .='}';
	}else if ($business_card_resume_menus_item == 'Underline Expand') { 
		$business_card_resume_custom_css .= '.nav-menu ul li a { position: relative; text-decoration: none; }';
		$business_card_resume_custom_css .= '.nav-menu ul li a::before {';
			$business_card_resume_custom_css .= 'content: ""; position: absolute; left: 50%; bottom: calc(' . esc_attr($business_card_resume_menu_padding) . 'px / 2); width: 0; height: 3px; background-color: currentColor; opacity: 0;';
			$business_card_resume_custom_css .= 'transition: width 0.5s ease, left 0.5s ease, opacity 0.3s ease;';
		$business_card_resume_custom_css .= '}';
		$business_card_resume_custom_css .= '.nav-menu ul li a:hover::before {';
			$business_card_resume_custom_css .= 'width: 100%; left: 0; opacity: 1;';
		$business_card_resume_custom_css .= '}';
	}	

	// menu color
	$business_card_resume_menu_color = get_theme_mod('business_card_resume_menu_color');

	$business_card_resume_custom_css .='.nav-menu a,.nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_menu_color).' !important;';
	$business_card_resume_custom_css .='}';

	// menu hover color
	$business_card_resume_menu_hover_color = get_theme_mod('business_card_resume_menu_hover_color');
	$business_card_resume_custom_css .='.nav-menu a:hover, .nav-menu ul li a:hover{';
			$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_menu_hover_color).' !important;';
	$business_card_resume_custom_css .='}';

	// Submenu color
	$business_card_resume_submenu_menu_color = get_theme_mod('business_card_resume_submenu_menu_color');
	$business_card_resume_custom_css .='.nav-menu ul.sub-menu a, .nav-menu ul.sub-menu li a,.nav-menu ul.children a, .nav-menu ul.children li a{';
			$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_submenu_menu_color).' !important;';
	$business_card_resume_custom_css .='}';

	// submenu hover color
	$business_card_resume_submenu_hover_color = get_theme_mod('business_card_resume_submenu_hover_color');
	$business_card_resume_custom_css .='.nav-menu ul.sub-menu a:hover, .nav-menu ul.sub-menu li a:hover.nav-menu ul.children a:hover, .nav-menu ul.children li a:hover{';
			$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_submenu_hover_color).' !important;';
	$business_card_resume_custom_css .='}';

	// Breadcrumb Alignmennt
	$business_card_resume_single_page_breadcrumb_alignment = get_theme_mod('business_card_resume_single_page_breadcrumb_alignment', 'Left');
	if($business_card_resume_single_page_breadcrumb_alignment == 'Center' ){
		$business_card_resume_custom_css .='.bradcrumbs{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_single_page_breadcrumb_alignment .';';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_single_page_breadcrumb_alignment == 'Left' ){
		$business_card_resume_custom_css .='.bradcrumbs{';
			$business_card_resume_custom_css .=' text-align: '. $business_card_resume_single_page_breadcrumb_alignment .';';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_single_page_breadcrumb_alignment == 'Right' ){
		$business_card_resume_custom_css .='.bradcrumbs{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_single_page_breadcrumb_alignment .';';
		$business_card_resume_custom_css .='}';
	}

	// Breadcrumb color option
	$business_card_resume_breadcrumb_color = get_theme_mod('business_card_resume_breadcrumb_color');
	$business_card_resume_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_breadcrumb_color).'!important;';
	$business_card_resume_custom_css .='}';

	// Breadcrumb bg color option
	$business_card_resume_breadcrumb_background_color = get_theme_mod('business_card_resume_breadcrumb_background_color');
	$business_card_resume_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_breadcrumb_background_color).'!important;';
	$business_card_resume_custom_css .='}';

	// Breadcrumb hover color option
	$business_card_resume_breadcrumb_hover_color = get_theme_mod('business_card_resume_breadcrumb_hover_color');
	$business_card_resume_custom_css .='.bradcrumbs a:hover{';
		$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_breadcrumb_hover_color).'!important;';
	$business_card_resume_custom_css .='}';

	// Breadcrumb hover bg color option
	$business_card_resume_breadcrumb_hover_bg_color = get_theme_mod('business_card_resume_breadcrumb_hover_bg_color');
	$business_card_resume_custom_css .='.bradcrumbs a:hover{';
		$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_breadcrumb_hover_bg_color).'!important;';
	$business_card_resume_custom_css .='}';

	$business_card_resume_breadcrumb_border_color = get_theme_mod('business_card_resume_breadcrumb_border_color');
	$business_card_resume_custom_css .='.bradcrumbs a{';
		$business_card_resume_custom_css .='border-color: '.esc_attr($business_card_resume_breadcrumb_border_color).'!important;';
	$business_card_resume_custom_css .='}';

	// Featured image header
	$header_image_url = business_card_resume_banner_image( $image_url = '' );
	$business_card_resume_custom_css .='#page-site-header{';
		$business_card_resume_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$business_card_resume_custom_css .='}';

	$business_card_resume_post_featured_image = get_theme_mod('business_card_resume_post_featured_image', 'in-content');
	if($business_card_resume_post_featured_image == 'banner' ){
		$business_card_resume_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$business_card_resume_custom_css .=' display: none;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.page-template-custom-front-page #page-site-header{';
			$business_card_resume_custom_css .=' display: none;';
		$business_card_resume_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$business_card_resume_shop_page_navigation = get_theme_mod('business_card_resume_shop_page_navigation',true);
	if ($business_card_resume_shop_page_navigation == false) {
		$business_card_resume_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$business_card_resume_custom_css .='display: none;';
		$business_card_resume_custom_css .='}';
	}

	/*-------- Blog Post Alignment ------*/
	$business_card_resume_post_alignment = get_theme_mod('business_card_resume_blog_post_alignment', 'center');
	if($business_card_resume_post_alignment == 'left' ){
		$business_card_resume_custom_css .='.blog-sec, .blog-sec h2, .blog-sec .post-info, .blog-sec .blogbtn{';
			$business_card_resume_custom_css .=' text-align: '. $business_card_resume_post_alignment .'!important;';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_post_alignment == 'right' ){
		$business_card_resume_custom_css .='.blog-sec, .blog-sec h2, .blog-sec .post-info, .blog-sec .blogbtn{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_post_alignment .'!important;';
		$business_card_resume_custom_css .='}';
	}	

	/*----- Blog Post display type css ------*/
	$business_card_resume_blog_post_display_type = get_theme_mod('business_card_resume_blog_post_display_type', 'blocks');
	if($business_card_resume_blog_post_display_type == 'without blocks' ){
		$business_card_resume_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$business_card_resume_custom_css .='border: 0;';
		$business_card_resume_custom_css .='}';
	}

	// Metabox Seperator Blog Post
	$business_card_resume_metabox_seperator = get_theme_mod('business_card_resume_metabox_seperator', '|');
	if($business_card_resume_metabox_seperator != '' ){
		$business_card_resume_custom_css .='#blog_post .blog-sec  .post-info span:after{';
			$business_card_resume_custom_css .=' content: "'.esc_attr($business_card_resume_metabox_seperator).'"; padding-left:10px;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='#blog_post .blog-sec  .post-info span:last-child:after{';
			$business_card_resume_custom_css .=' content: none;';
		$business_card_resume_custom_css .='}';
	}	

	// Metabox Seperator Single post
	$business_card_resume_single_post_metabox_seperator = get_theme_mod('business_card_resume_single_post_metabox_seperator', '|');
	if($business_card_resume_single_post_metabox_seperator != '' ){
		$business_card_resume_custom_css .='.post-info span:after{';
			$business_card_resume_custom_css .=' content: "'.esc_attr($business_card_resume_single_post_metabox_seperator).'"; padding-left:10px;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.post-info span:last-child:after{';
			$business_card_resume_custom_css .=' content: none;';
		$business_card_resume_custom_css .='}';
	}	

	// Metabox Seperator Grid post
	$business_card_resume_grid_post_metabox_seperator = get_theme_mod('business_card_resume_grid_post_metabox_seperator','|');
	if($business_card_resume_grid_post_metabox_seperator != '' ){
		$business_card_resume_custom_css .='.grid-post-info span:after{';
			$business_card_resume_custom_css .=' content: "'.esc_attr($business_card_resume_grid_post_metabox_seperator).'"; padding-left:10px;';
		$business_card_resume_custom_css .='}';
		$business_card_resume_custom_css .='.grid-post-info span:last-child:after{';
			$business_card_resume_custom_css .=' content: none;';
		$business_card_resume_custom_css .='}';
	}

	/*----- grid Post display type css ------*/
	$business_card_resume_grid_post_display_type = get_theme_mod('business_card_resume_grid_post_display_type', 'blocks');
	if($business_card_resume_grid_post_display_type == 'without blocks' ){
		$business_card_resume_custom_css .='.grid-sec{';
			$business_card_resume_custom_css .='border: 0;';
		$business_card_resume_custom_css .='}';
	}
	$business_card_resume_grid_post_image_border_radius = get_theme_mod('business_card_resume_grid_post_image_border_radius');
	 if($business_card_resume_grid_post_image_border_radius != false){
		 $business_card_resume_custom_css .='.grid-sec img{';
			 $business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_grid_post_image_border_radius).'px;';
		 $business_card_resume_custom_css .='}';
	 }
 
	$business_card_resume_grid_posts_image_shadow = get_theme_mod('business_card_resume_grid_posts_image_shadow');
	if($business_card_resume_grid_posts_image_shadow != false){
		$business_card_resume_custom_css .='.grid-sec img{';
			$business_card_resume_custom_css .='box-shadow: '.esc_attr($business_card_resume_grid_posts_image_shadow).'px '.esc_attr($business_card_resume_grid_posts_image_shadow).'px '.esc_attr($business_card_resume_grid_posts_image_shadow).'px #aaa;';
		$business_card_resume_custom_css .='}';
	}

	/*-------- grid post Alignment ------*/
	$business_card_resume_grid_alignment = get_theme_mod('business_card_resume_grid_alignment', 'center');
	if($business_card_resume_grid_alignment == 'left' ){
		$business_card_resume_custom_css .='.grid-sec, .grid-sec h2, .grid-post-info, .grid-sec .entry-content, .grid-sec .blogbtn{';
			$business_card_resume_custom_css .=' text-align: '. $business_card_resume_grid_alignment .'!important;';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_grid_alignment == 'right' ){
		$business_card_resume_custom_css .='.grid-sec, .grid-sec h2, .grid-post-info, .grid-sec .entry-content, .grid-sec .blogbtn{';
			$business_card_resume_custom_css .='text-align: '. $business_card_resume_grid_alignment .'!important;';
		$business_card_resume_custom_css .='}';
	}	


	if (get_theme_mod('business_card_resume_hide_topbar_responsive',true) == false) {
		$business_card_resume_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$business_card_resume_custom_css .=' display: none;';
		$business_card_resume_custom_css .='} }';
	} else if(get_theme_mod('business_card_resume_hide_topbar_responsive',true) == true){
		$business_card_resume_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$business_card_resume_custom_css .=' display: block;';
		$business_card_resume_custom_css .='} }';
	}

	// Site title Font Size
	$business_card_resume_site_title_font_size = get_theme_mod('business_card_resume_site_title_font_size', '25');
	$business_card_resume_custom_css .='.logo h1, .logo p.site-title{';
		$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_site_title_font_size).'px;';
	$business_card_resume_custom_css .='}';

	// Site tagline Font Size
	$business_card_resume_site_tagline_font_size = get_theme_mod('business_card_resume_site_tagline_font_size', '14');
	$business_card_resume_custom_css .='.logo p.site-description{';
		$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_site_tagline_font_size).'px;';
	$business_card_resume_custom_css .='}';

	if (get_theme_mod('business_card_resume_sticky_header_responsive') == false) {
		$business_card_resume_custom_css .='@media screen and (max-width: 575px){
			.toggle-menu.sticky{';
			$business_card_resume_custom_css .=' position: static;';
		$business_card_resume_custom_css .='} }';
	}
	
	// responsive settings

	$business_card_resume_toggle_button_bg_color_settings = get_theme_mod('business_card_resume_toggle_button_bg_color_settings');
	$business_card_resume_custom_css .='.toggle-menu{';
	$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_toggle_button_bg_color_settings).';';
	$business_card_resume_custom_css .='} ';

	if (get_theme_mod('business_card_resume_preloader_responsive',false) == true && get_theme_mod('business_card_resume_preloader',false) == false) {
		$business_card_resume_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$business_card_resume_custom_css .=' visibility: hidden;';
		$business_card_resume_custom_css .='} }';
	}
	if (get_theme_mod('business_card_resume_preloader_responsive',false) == false) {
		$business_card_resume_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$business_card_resume_custom_css .=' visibility: hidden;';
		$business_card_resume_custom_css .='} }';
	}

	// responsive slider
	if (get_theme_mod('business_card_resume_banner_responsive',true) == true && get_theme_mod('business_card_resume_show_banner',true) == false) {
		$business_card_resume_custom_css .='@media screen and (min-width: 575px){
			#banner{';
			$business_card_resume_custom_css .=' display: none;';
		$business_card_resume_custom_css .='} }';
	}
	if (get_theme_mod('business_card_resume_banner_responsive',true) == false) {
		$business_card_resume_custom_css .='@media screen and (max-width: 575px){
			#banner{';
			$business_card_resume_custom_css .=' display: none;';
		$business_card_resume_custom_css .='} }';
	}

	// scroll to top
	$business_card_resume_scroll = get_theme_mod( 'business_card_resume_backtotop_responsive',true);
	if (get_theme_mod('business_card_resume_backtotop_responsive',true) == true && get_theme_mod('business_card_resume_hide_scroll',true) == false) {
    	$business_card_resume_custom_css .='.show-back-to-top{';
			$business_card_resume_custom_css .='visibility: hidden !important;';
		$business_card_resume_custom_css .='} ';
	}
    if($business_card_resume_scroll == true){
    	$business_card_resume_custom_css .='@media screen and (max-width:575px) {';
		$business_card_resume_custom_css .='.show-back-to-top{';
			$business_card_resume_custom_css .='visibility: visible !important;';
		$business_card_resume_custom_css .='} }';
	}else if($business_card_resume_scroll == false){
		$business_card_resume_custom_css .='@media screen and (max-width:575px) {';
		$business_card_resume_custom_css .='.show-back-to-top{';
			$business_card_resume_custom_css .='visibility: hidden !important;';
		$business_card_resume_custom_css .='} }';
	}

	$business_card_resume_resp_sidebar = get_theme_mod( 'business_card_resume_sidebar_hide_show',true);
    if($business_card_resume_resp_sidebar == true){
    	$business_card_resume_custom_css .='@media screen and (max-width:575px) {';
		$business_card_resume_custom_css .='#sidebar{';
			$business_card_resume_custom_css .='display:block;';
		$business_card_resume_custom_css .='} }';
	}else if($business_card_resume_resp_sidebar == false){
		$business_card_resume_custom_css .='@media screen and (max-width:575px) {';
		$business_card_resume_custom_css .='#sidebar{';
			$business_card_resume_custom_css .='display:none;';
		$business_card_resume_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$business_card_resume_copyright_bg_color = get_theme_mod('business_card_resume_copyright_bg_color');
	if($business_card_resume_copyright_bg_color != false){
		$business_card_resume_custom_css .='.inner{';
			$business_card_resume_custom_css .='background-color: '.esc_attr($business_card_resume_copyright_bg_color).';';
		$business_card_resume_custom_css .='}';
	}

	// Banner Social Icons Font Size
	$business_card_resume_banner_social_icons_font_size = get_theme_mod('business_card_resume_banner_social_icons_font_size', '16');
	$business_card_resume_custom_css .='.social-icons a{';
		$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_banner_social_icons_font_size).'px;';
	$business_card_resume_custom_css .='}';

	// Header Icons Font Size
	$business_card_resume_header_icons_font_size = get_theme_mod('business_card_resume_header_icons_font_size', '16');
	$business_card_resume_custom_css .='.contact-icons a{';
		$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_header_icons_font_size).'px;';
	$business_card_resume_custom_css .='}';
    
	//Header icon color
	$business_card_resume_header_icon_color = get_theme_mod('business_card_resume_header_icon_color', '');
	$business_card_resume_custom_css .='.contact-icons a i{';
		$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_header_icon_color).'!important;';
	$business_card_resume_custom_css .='}';

	/*------Slider css -------*/
	$business_card_resume_show_banner = get_theme_mod('business_card_resume_show_banner',false);
	if($business_card_resume_show_banner == false){
		$business_card_resume_custom_css .='.page-template-custom-front-page #header {';
			$business_card_resume_custom_css .='position: static; background:#000;';
		$business_card_resume_custom_css .='}';
	}

		// Slider Button color
	$business_card_resume_slider_btn_color = get_theme_mod('business_card_resume_slider_btn_color','#fff');
	$business_card_resume_custom_css .='.read-more a,.porfolio a{';
			$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_slider_btn_color).' !important;';
	$business_card_resume_custom_css .='}';

	// Slider button bg color
	$business_card_resume_slider_btn_bg_color = get_theme_mod('business_card_resume_slider_btn_bg_color');
	$business_card_resume_custom_css .='.read-more a,.porfolio a{';
			$business_card_resume_custom_css .='background: '.esc_attr($business_card_resume_slider_btn_bg_color).' !important;';
	$business_card_resume_custom_css .='}';

	// Slider button lable hover color
	$business_card_resume_slider_btn_lable_hover_color = get_theme_mod('business_card_resume_slider_btn_lable_hover_color','#fff');
	$business_card_resume_custom_css .='.read-more a:hover,.porfolio a:hover{';
			$business_card_resume_custom_css .='color: '.esc_attr($business_card_resume_slider_btn_lable_hover_color).' !important;';
	$business_card_resume_custom_css .='}';

	// Slider button bg hover color
	$business_card_resume_slider_btn_bg_hover_color = get_theme_mod('business_card_resume_slider_btn_bg_hover_color','var(--primary-color)');
	$business_card_resume_custom_css .='.read-more a:hover,.porfolio a:hover{';
			$business_card_resume_custom_css .='background: '.esc_attr($business_card_resume_slider_btn_bg_hover_color).' !important;';
	$business_card_resume_custom_css .='}';

	// menu padding
	$business_card_resume_menu_case = get_theme_mod('business_card_resume_menu_case', 'Capitalize');
	if($business_card_resume_menu_case == 'uppercase' ){
		$business_card_resume_custom_css .='.nav-menu ul li a{';
			$business_card_resume_custom_css .=' text-transform: uppercase;';
		$business_card_resume_custom_css .='}';
	}elseif($business_card_resume_menu_case == 'lowercase' ){
		$business_card_resume_custom_css .='.nav-menu ul li a{';
			$business_card_resume_custom_css .=' text-transform: lowercase;';
		$business_card_resume_custom_css .='}';
	}

	$business_card_resume_banner_image = get_theme_mod('business_card_resume_banner_image');
	if($business_card_resume_banner_image != false){
		$business_card_resume_custom_css .='#banner{';
			$business_card_resume_custom_css .='background: url('.esc_url($business_card_resume_banner_image).');';
		$business_card_resume_custom_css .='}';
	}

	// Single post image border radious
	$business_card_resume_single_post_img_border_radius = get_theme_mod('business_card_resume_single_post_img_border_radius', 0);
	$business_card_resume_custom_css .='.feature-box img{';
		$business_card_resume_custom_css .='border-radius: '.esc_attr($business_card_resume_single_post_img_border_radius).'px;';
	$business_card_resume_custom_css .='}';

	// Single post image box shadow
	$business_card_resume_single_post_img_box_shadow = get_theme_mod('business_card_resume_single_post_img_box_shadow',0);
	$business_card_resume_custom_css .='.feature-box img{';
		$business_card_resume_custom_css .='box-shadow: '.esc_attr($business_card_resume_single_post_img_box_shadow).'px '.esc_attr($business_card_resume_single_post_img_box_shadow).'px '.esc_attr($business_card_resume_single_post_img_box_shadow).'px #ccc;';
	$business_card_resume_custom_css .='}';

	// single post image dimention
	$business_card_resume_single_post_image_dimension = get_theme_mod('business_card_resume_single_post_image_dimension', 'default');
	$business_card_resume_single_post_image_custom_width = get_theme_mod('business_card_resume_single_post_image_custom_width',400);
	$business_card_resume_single_post_image_custom_height = get_theme_mod('business_card_resume_single_post_image_custom_height',400);
	if($business_card_resume_single_post_image_dimension == 'custom'){
		$business_card_resume_custom_css .='.singlepost-page .feature-box img{';
			$business_card_resume_custom_css .='width: '.esc_attr($business_card_resume_single_post_image_custom_width).'px; height: '.esc_attr($business_card_resume_single_post_image_custom_height).'px;';
		$business_card_resume_custom_css .='}';
	}

	// Button Font Size
	$business_card_resume_button_font_size = get_theme_mod('business_card_resume_button_font_size', '12');
	$business_card_resume_custom_css .='.blogbtn a{';
		$business_card_resume_custom_css .='font-size: '.esc_attr($business_card_resume_button_font_size).'px;';
	$business_card_resume_custom_css .='}';

	// sticky sidebar
	$business_card_resume_sticky_sidebar = get_theme_mod('business_card_resume_sticky_sidebar');
	if ( $business_card_resume_sticky_sidebar ) {
		$business_card_resume_custom_css .= '@media (min-width: 768px) {';
			$business_card_resume_custom_css .= '#sidebar {';
				$business_card_resume_custom_css .= 'position: sticky;';
				$business_card_resume_custom_css .= 'top: 25px;';
				$business_card_resume_custom_css .= 'align-self: start;';
			$business_card_resume_custom_css .= '}';
		$business_card_resume_custom_css .= '}';
	}

    // Copyright Sticky 
	$business_card_resume_resp_stickycopyright = get_theme_mod( 'business_card_resume_stickycopyright_hide_show',false);
	if($business_card_resume_resp_stickycopyright == true && get_theme_mod( 'business_card_resume_copyright_sticky',false) != true){
    	$business_card_resume_custom_css .='.copyright-sticky{';
			$business_card_resume_custom_css .='position:static;';
		$business_card_resume_custom_css .='} ';
	}	

	// change the Category style //
	$business_card_resume_single_post_styling = get_theme_mod( 'business_card_resume_single_post_styling','Button');
		if($business_card_resume_single_post_styling == 'Underline'){
		$business_card_resume_custom_css .='.single-post-category .post-categories li a{';
			$business_card_resume_custom_css .='text-decoration: underline; color: #fff !important; background-color:transparent;';
		$business_card_resume_custom_css .='}';
	}
	else if($business_card_resume_single_post_styling == 'Default'){
		$business_card_resume_custom_css .='.single-post-category .post-categories li a{';
			$business_card_resume_custom_css .='text-decoration: none; color: #fff !important; background-color:transparent;';
		$business_card_resume_custom_css .='}';
	}