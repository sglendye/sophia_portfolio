<?php
/**
 * The Header for our theme.
 * @package Business Card Resume
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}?>
	
	<?php if(get_theme_mod('business_card_resume_preloader',false) || get_theme_mod('business_card_resume_preloader_responsive',false)){ ?>
    <?php if(get_theme_mod( 'business_card_resume_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
      	<span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'business_card_resume_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
	<?php }?>
	<header role="banner" class="position-relative">
		<a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'business-card-resume' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'business-card-resume' ); ?></span></a>

		<div id="header">	
			<?php ?>
				<div class="toggle-menu responsive-menu">
	        <button role="tab" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('business_card_resume_menu_open_icon','fas fa-bars')); ?> me-2"></i><?php echo esc_html( get_theme_mod('business_card_resume_mobile_menu_label', __('Menu','business-card-resume'))); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('business_card_resume_mobile_menu_label', __('Menu','business-card-resume'))); ?></span></button>
	      </div>
	    <?php ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 align-self-center">
						<div class="logo text-md-start text-center">
	          	<?php if ( has_custom_logo() ) : ?>
	            	<div class="site-logo"><?php the_custom_logo(); ?></div>
	            <?php endif; ?>
	              <?php $business_card_resume_blog_info = get_bloginfo( 'name' ); ?>
	              <?php if ( ! empty( $business_card_resume_blog_info ) ) : ?>
	              	<?php if( get_theme_mod('business_card_resume_show_site_title',true) != ''){ ?>
		                <?php if ( is_front_page() && is_home() ) : ?>
		                	<h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                <?php else : ?>
		                  <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		                <?php endif; ?>
		            <?php }?>
	            <?php endif; ?>
	            <?php if( get_theme_mod('business_card_resume_show_tagline',false) != ''){ ?>
	              <?php
	              $business_card_resume_description = get_bloginfo( 'description', 'display' );
	              if ( $business_card_resume_description || is_customize_preview() ) :
	              ?>
	              	<p class="site-description m-0">
	                  <?php echo esc_html($business_card_resume_description); ?>
	              	</p>
	              <?php endif; ?>
	            <?php }?>
		        </div>
					</div>
					<div class="col-lg-7 col-md-5 col-12 align-self-center">
						<div class="<?php if( get_theme_mod( 'business_card_resume_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
	            <div id="sidelong-menu" class="nav side-nav">
	              <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'business-card-resume' ); ?>">
	              	<?php 
	                  wp_nav_menu( array( 
	                    'theme_location' => 'primary',
	                    'container_class' => 'main-menu-navigation clearfix' ,
	                    'menu_class' => 'clearfix',
	                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
	                    'fallback_cb' => 'wp_page_menu',
	                  ) ); 
	              	?>
	              </nav>
	            	<a href="javascript:void(0)" class="closebtn responsive-menu"><?php echo esc_html( get_theme_mod('business_card_resume_close_menu_label', __('Close Menu','business-card-resume'))); ?><i class="<?php echo esc_html(get_theme_mod('business_card_resume_menu_close_icon','fas fa-times-circle')); ?> m-3"></i><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('business_card_resume_close_menu_label', __('Close Menu','business-card-resume'))); ?></span></a>
	            </div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-12 contact-icons align-self-center">
						<?php if ( get_theme_mod('business_card_resume_call','') != "" ) {?>
							<span><a href="tel:<?php echo esc_attr(get_theme_mod('business_card_resume_call')); ?>"><i class="<?php echo esc_attr(get_theme_mod('business_card_resume_call_icon','fas fa-phone')); ?> "></i></a></span>
						<?php }?>
						<?php if ( get_theme_mod('business_card_resume_mail_address','') != "" ) {?>
							<span><a href="mailto:<?php echo esc_attr(get_theme_mod('business_card_resume_mail_address')); ?>"><i class="<?php echo esc_attr(get_theme_mod('business_card_resume_mail_icon','fas fa-envelope')); ?>"></i></a></span>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php if(get_theme_mod('business_card_resume_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
    	<div id="page-site-header">
        <div class='page-header'> 
        	<?php the_title( '<h1>', '</h1>' ); ?>
        </div>
    	</div>
    <?php }
	}?>