<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('business_card_resume_above_introduction_section'); ?>
  
  <?php if( get_theme_mod( 'business_card_resume_show_banner', false ) != '' || get_theme_mod( 'business_card_resume_banner_responsive', false ) != '' ) {?>
    <section id="banner" class="wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1.4s">
      <div class="container">
            <div class="banner-caption">
              <div class="inner_carousel">
                <?php if(get_theme_mod('business_card_resume_title') != '') {?>
                  <h2><?php echo esc_html(get_theme_mod('business_card_resume_title')) ?></h2>
                  <?php }?>
                <?php if(get_theme_mod('business_card_resume_tagline_title') != '') {?>
                  <h1><?php echo esc_html(get_theme_mod('business_card_resume_tagline_title')) ?></h1>
                  <?php }?>
                  <?php if(get_theme_mod('business_card_resume_designation_text') != '') {?>
                  <p><?php echo esc_html(get_theme_mod('business_card_resume_designation_text')) ?></p>
                <?php }?>
                
                <div class="banner-buttons">
                <?php if ( get_theme_mod('business_card_resume_banner_button_label','HIRE ME') != '' ) {?>
                    <div class ="read-more mt-md-4 me-4 mt-0">
                      <a href="<?php echo esc_url(get_theme_mod('business_card_resume_top_button_url',''));?>"><?php echo esc_html(get_theme_mod('business_card_resume_banner_button_label','Hire Me'));?><span class="screen-reader-text"><?php esc_html_e( 'Hire Me','business-card-resume' );?></span></a>
                    </div>
                <?php }?>
                <?php if ( get_theme_mod('business_card_resume_banner_button_text','CHECK MY PORTFOLIO') != '' ) {?>
                    <div class ="porfolio mt-md-4 mt-0">
                      <a href="<?php echo esc_url(get_theme_mod('business_card_resume_banner_button_url',''));?>"><?php echo esc_html(get_theme_mod('business_card_resume_banner_button_text','Check My Portfolio'));?><span class="screen-reader-text"><?php esc_html_e( 'Check My Portfolio','business-card-resume' );?></span></a>
                    </div>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="social-icons">
            <?php if ( get_theme_mod('business_card_resume_facebook_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_facebook_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'business-card-resume'); ?></span></a>
            <?php }?>
            <?php if ( get_theme_mod('business_card_resume_twitter_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_twitter_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'business-card-resume'); ?></span></a>
            <?php }?>
            <?php if ( get_theme_mod('business_card_resume_instagram_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_instagram_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_insta_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'business-card-resume'); ?></span></a>
            <?php }?>
            <?php if ( get_theme_mod('business_card_resume_linkedin_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_linkedin_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_linkdin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Linkedin', 'business-card-resume'); ?></span></a>
            <?php }?>
          </div>
        </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>

  <?php do_action('business_card_resume_below_introduction_section'); ?>

  <?php if(get_theme_mod('business_card_resume_section_title') != '' || get_theme_mod('business_card_resume_section_text') != ''){ ?>
    <section id="service-section" class="py-5">
      <div class="services wow fadeIn" data-wow-delay="0.3s" data-wow-duration="1.8s">
        <div class="service-head pt-2 mb-3">
            <?php if(get_theme_mod('business_card_resume_section_text') != '') {?>
              <p><?php echo esc_html(get_theme_mod('business_card_resume_section_text')) ?></p>
            <?php }?>
            <?php if(get_theme_mod('business_card_resume_section_title') != '') {?>
              <h2><?php echo esc_html(get_theme_mod('business_card_resume_section_title')) ?></h2>
          <?php }?>
        </div>
        <div class="portfolio-box">
          <div class="tab text-center mt-3 mb-5">
            <?php
              $category_post = get_theme_mod('business_card_resume_services_number', '');
              for ( $j = 1; $j <= $category_post; $j++ ){ ?>
              <button class="tablinks" onclick="business_card_resume_project_tab(event, '<?php $main_id = get_theme_mod('business_card_resume_services_text'.$j); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?> ')">
              <?php echo esc_html(get_theme_mod('business_card_resume_services_text'.$j)); ?></button>
            <?php }?>
          </div>

          <?php for ( $j = 1; $j <= $category_post; $j++ ){ ?>
            <div id="<?php $main_id = get_theme_mod('business_card_resume_services_text'.$j); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?>"  class="tabcontent mt-3">        
              <div class="owl-carousel">
                <?php 
                  $business_card_resume_catData=  get_theme_mod('business_card_resume_services_category'.$j);
                  if($business_card_resume_catData){
                  $page_query = new WP_Query(array( 'category_name' => esc_html( $business_card_resume_catData ,'business-card-resume')));?>
                    <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                      <div class="service-box">
                        <?php if(has_post_thumbnail()) {?>
                          <div class="box mb-4">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <div class="box-title mb-4">
                              <i class="fas fa-plus"></i><a href="<?php the_permalink();?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a>  
                            </div>
                          </div>
                        <?php }?>
                      </div>
                    <?php endwhile;
                    wp_reset_postdata();
                  }
                ?>
              </div>
            </div>
          <?php }?>
          <?php if ( get_theme_mod('business_card_resume_service_button_text','CHECK MY PORTFOLIO') != '' ) {?>
            <div class ="porfolio mt-md-4 mt-0">
              <a href="<?php echo esc_url(get_theme_mod('business_card_resume_service_button_url',''));?>"><?php echo esc_html(get_theme_mod('business_card_resume_service_button_text','View All Portfolio'));?><span class="screen-reader-text"><?php esc_html_e( 'View All Portfolio','business-card-resume' );?></span></a>
            </div>
          <?php }?>
      </div>
    </div>
    </section>
  <?php }?>

  <?php do_action('business_card_resume_after_service_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>