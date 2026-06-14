<?php
//about theme info
add_action( 'admin_menu', 'business_card_resume_gettingstarted' );
function business_card_resume_gettingstarted() {    	
	add_theme_page( esc_html__('Demo Theme Content', 'business-card-resume'), esc_html__('Demo Theme Content', 'business-card-resume'), 'edit_theme_options', 'business_card_resume_guide', 'business_card_resume_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function business_card_resume_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');

   // Admin notice code START
	wp_register_script('business-card-resume-notice', esc_url(get_template_directory_uri()) . '/inc/getting-started/js/notice.js', array('jquery'), time(), true);
	wp_enqueue_script('business-card-resume-notice');
	// Admin notice code END
}
add_action('admin_enqueue_scripts', 'business_card_resume_admin_theme_style');

//guidline for about theme
function business_card_resume_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'business-card-resume' );
?>
<div class="wrapper-info">
	<div class="intro">
		<h3><?php esc_html_e( 'Welcome to Business Card Resume WordPress Theme', 'business-card-resume' ); ?></h3>
		<p>( Version: <?php echo esc_html($theme['Version']);?> )</p>
	</div>
	<div class="col-left">
		<div class="left-box">
			<div class="color_bg_blue color-info">

				<div class="intro-text"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/themesglance-logo.png" alt="" />
				</div>
				<p class="intro_version"><span class="highlight1">Congratulations!</span></p>
				<?php
					/* Demo Import */
					require get_parent_theme_file_path( '/inc/getting-started/demo-content.php' );
				?>
			</div>
			<div class="best-offers">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/best-offer.png" alt="best-offer" />
				<div class="offers">
					<p class="offer-text"><?php echo esc_html__( 'On Premium WordPress Theme', 'business-card-resume' ); ?></p>
					<p class="coupon"><?php echo esc_html__( 'Use Coupon Code:" GET20 "', 'business-card-resume' ); ?></p>
					<a href="<?php echo esc_url( BUSINESS_CARD_RESUME_THEMESGLANCE_PRO_THEME_URL ); ?>" class="btn-pro" target="_blank" >
						<?php esc_html_e('Get Pro', 'business-card-resume'); ?>
					</a>
				</div>
			</div>
		</div>
		<div class="started">
			<h3><?php esc_html_e( 'Lite Theme Info', 'business-card-resume' ); ?></h3>
			<p><?php esc_html_e( 'The Businesscard Resume Theme is a modern, professional, and fully responsive solution designed for freelancers, designers, developers, employees, job seekers, consultants, and digital entrepreneurs aiming to build a strong personal metor and online presence. Perfect for creating digital CVs, biodata profiles, interactive resumes, portfolio websites, and personal profile platforms, it offers a clean, minimal, and elegant one page and onepage layout that effectively showcases skills, work experience, achievements, career summaries, education, and professional milestones in a clear and engaging format. With customizable sections, portfolio displays, downloadable resume options, call-to-action elements, and seamless social media integration, it enhances networking, personal branding, and professional visibility. Built with SEO-friendly, schema-ready code and optimized performance, it ensures better search engine rankings and fast loading across all devices. Integration with essential tools like Contact Form 7 for inquiries, Mailchimp for communication, and Yoast SEO for optimization adds functionality without complexity, making the Businesscard Resume Theme a polished, reliable, and effective choice for standing out in today’s competitive digital landscape.', 'business-card-resume')?></p>
			<hr>
			
				<div class="service">
					<div class="info col-lg-3 col-md-3">
						<h3><span class="dashicons dashicons-media-document"></span> <?php esc_html_e('Get Support', 'business-card-resume'); ?></h3>
						<ol>
							<li>
							<a href="<?php echo esc_url( BUSINESS_CARD_RESUME_THEMESGLANCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'business-card-resume'); ?></a>
							</li>
						</ol>
					</div>
					<div class="info col-lg-3 col-md-3">
						<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e('Getting Started', 'business-card-resume'); ?></h3>
						<ol>
							<li> <?php esc_html_e('Start', 'business-card-resume'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'business-card-resume'); ?></a> <?php esc_html_e('your website.', 'business-card-resume'); ?></li>
						</ol>
					</div>
					<div class="info col-lg-3 col-md-3">
						<h3><span class="dashicons dashicons-star-filled"></span> <?php esc_html_e('Rate This Theme', 'business-card-resume'); ?></h3>
						<ol>
							<li>
							<a href="<?php echo esc_url( BUSINESS_CARD_RESUME_THEMESGLANCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate it here', 'business-card-resume'); ?></a>
							</li>
						</ol>
					</div>
					<div class="info col-lg-3 col-md-3">
						<h3><span class="dashicons dashicons-editor-help"></span> <?php esc_html_e( 'Help Docs', 'business-card-resume' ); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Business Card Resume Lite', 'business-card-resume' ); ?> <a href="<?php echo esc_url( BUSINESS_CARD_RESUME_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'business-card-resume' ); ?></a></li>
						</ol>
					</div>
				</div>			
		
			<h3><?php esc_html_e( 'Get started with Business Card Resume Theme', 'business-card-resume' ); ?></h3>
			<div class="col-left-inner"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/free-screenshot.png" alt="" />
			</div>		
			<div class="col-right-inner">
				<p><?php esc_html_e( 'Go to', 'business-card-resume' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'business-card-resume' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'business-card-resume' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Easily customizable ', 'business-card-resume' ); ?> </li>
					<li><?php esc_html_e( 'Absolutely free', 'business-card-resume' ); ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
		</div>
		<div class="centerbold">
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/responsive.png" alt="" />
			<hr class="firsthr">
			<div class="btn-grp">
				<a href="<?php echo esc_url( BUSINESS_CARD_RESUME_THEMESGLANCE_PRO_THEME_URL ); ?>" target="_blank"><?php esc_html_e('Get Premium', 'business-card-resume'); ?></a>
				<a href="<?php echo esc_url( BUSINESS_CARD_RESUME_THEMESGLANCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'business-card-resume'); ?></a>
				<a href="<?php echo esc_url( BUSINESS_CARD_RESUME_THEMESGLANCE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'business-card-resume'); ?></a>
				<a href="<?php echo esc_url( BUSINESS_CARD_RESUME_BUNDLE_URL ); ?>" target="_blank"><?php esc_html_e('Bundle of 176+ Premium WP Themes at $79', 'business-card-resume'); ?></a>
			</div>
			<hr class="secondhr">
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'business-card-resume'); ?></h3>
		<ul>
		 	<li><?php esc_html_e( 'Slider with unlimited slides', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Simple Menu option', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Default demo Importer', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Primary color option', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Woocommerce Products Section', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'About Section', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Custom Post type for “testimonial” listing', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Features Section', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Team section with the custom post type', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Video Section', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Newsletter Section', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Services section', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Blog Post section on the home', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Frequently asked question', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Latest Blog Post Section', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Contact Page Template', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Recent Post Widget with thumbnails', 'business-card-resume'); ?></li>
		 	<li><?php esc_html_e( 'Blog full width, With Left and Right sidebar Templat', 'business-card-resume'); ?></li>
		</ul>
	</div>
	
</div>
<?php } ?>