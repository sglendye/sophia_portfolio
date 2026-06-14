<?php
/**
 * The template for displaying the footer.
 * @package Business Card Resume
 */
?>
<?php if( get_theme_mod( 'business_card_resume_hide_scroll',true) != '' || get_theme_mod( 'business_card_resume_backtotop_responsive',true) != '') { ?>
  <?php $business_card_resume_scroll_align = get_theme_mod( 'business_card_resume_back_to_top','Right');
  if($business_card_resume_scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left text-center"><?php esc_html_e('Top', 'business-card-resume'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'business-card-resume'); ?></span></a>
  <?php }else if($business_card_resume_scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center text-center"><?php esc_html_e('Top', 'business-card-resume'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'business-card-resume'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right text-center"><?php esc_html_e('Top', 'business-card-resume'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'business-card-resume'); ?></span></a>
  <?php }?>
<?php }?>
<footer role="contentinfo" id="footer">
  <?php //Set widget areas classes based on user choice
    $business_card_resume_footer_columns = get_theme_mod('business_card_resume_footer_widget', '4');
    if ($business_card_resume_footer_columns == '3') {
      $business_card_resume_cols = 'col-lg-4 col-md-4';
    } elseif ($business_card_resume_footer_columns == '4') {
      $business_card_resume_cols = 'col-lg-3 col-md-3';
    } elseif ($business_card_resume_footer_columns == '2') {
      $business_card_resume_cols = 'col-lg-6 col-md-6';
    } else {
      $business_card_resume_cols = 'col-lg-12 col-md-12';
    }
  ?>
  <?php if (get_theme_mod('business_card_resume_footer_hide_show', true)){ ?>
    <div class="footerinner py-4">
      <div class="container">
      <div class="row">
        <!-- Footer 1 -->
        <div class="<?php echo esc_attr($business_card_resume_cols); ?> footer-block wow zoomIn">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <?php dynamic_sidebar('footer-1'); ?>
            <?php else : ?>
                <aside id="categories" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('footer1', 'business-card-resume'); ?>">
                    <h3 class="widget-title"><?php esc_html_e('Categories', 'business-card-resume'); ?></h3>
                    <ul>
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                </aside>
            <?php endif; ?>
        </div>
        <!-- Footer 2 -->
        <div class="<?php echo esc_attr($business_card_resume_cols); ?> footer-block wow zoomIn">
            <?php if (is_active_sidebar('footer-2')) : ?>
                <?php dynamic_sidebar('footer-2'); ?>
            <?php else : ?>
                <aside id="archives" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('footer2', 'business-card-resume'); ?>">
                    <h3 class="widget-title"><?php esc_html_e('Archives', 'business-card-resume'); ?></h3>
                    <ul>
                        <?php wp_get_archives(array('type' => 'monthly')); ?>
                    </ul>
                </aside>
            <?php endif; ?>
        </div>
        <!-- Footer 3 -->
        <div class="<?php echo esc_attr($business_card_resume_cols); ?> footer-block wow zoomIn">
            <?php if (is_active_sidebar('footer-3')) : ?>
                <?php dynamic_sidebar('footer-3'); ?>
            <?php else : ?>
                <aside id="meta" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('footer3', 'business-card-resume'); ?>">
                    <h3 class="widget-title"><?php esc_html_e('Meta', 'business-card-resume'); ?></h3>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </aside>
            <?php endif; ?>
        </div>

        <!-- Footer 4 -->
        <div class="<?php echo esc_attr($business_card_resume_cols); ?> footer-block wow zoomIn">
            <?php if (is_active_sidebar('footer-4')) : ?>
                <?php dynamic_sidebar('footer-4'); ?>
            <?php else : ?>
                <aside id="search-widget" class="widget py-3" role="complementary" aria-label="<?php esc_attr_e('footer4', 'business-card-resume'); ?>">
                    <h3 class="widget-title"><?php esc_html_e('Search', 'business-card-resume'); ?></h3>
                    <?php the_widget('WP_Widget_Search'); ?>
                </aside>
            <?php endif; ?>
        </div>
      </div>
      </div>
    </div>
  <?php } ?>   
  <div class="footer <?php if( get_theme_mod( 'business_card_resume_copyright_sticky', false) == 1) { ?> copyright-sticky<?php } else { ?>close-sticky <?php } ?>">  
  <?php if (get_theme_mod('business_card_resume_copyright_hide_show', true)) {?>
    <div class="inner sticky-copyright">
      <div class="container">
        <div class="copyright">
          <p class="m-0"><?php business_card_resume_credit_link(); ?> <?php echo esc_html(get_theme_mod('business_card_resume_text',__('By Themesglance','business-card-resume'))); ?></p>
          <?php if(get_theme_mod('business_card_resume_footer_social_media_hide_show',false)){ ?>
          <div class="mt-2">
            <?php if ( get_theme_mod('business_card_resume_footer_facebook_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_footer_facebook_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_footer_facebook_icon','fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Facebook', 'business-card-resume'); ?></span></a>
            <?php }?>
            <?php if ( get_theme_mod('business_card_resume_footer_twitter_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_footer_twitter_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_footer_twitter_icon','fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Twitter', 'business-card-resume'); ?></span></a>
            <?php }?>
            <?php if ( get_theme_mod('business_card_resume_footer_instagram_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_footer_instagram_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_footer_insta_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Instagram', 'business-card-resume'); ?></span></a>
            <?php }?>
            <?php if ( get_theme_mod('business_card_resume_footer_linkedin_url') != "" ) {?>
              <a target="_blank" href="<?php echo esc_url(get_theme_mod('business_card_resume_footer_linkedin_url')); ?>"><i class="<?php echo esc_html(get_theme_mod('business_card_resume_footer_linkdin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php echo esc_html('Linkedin', 'business-card-resume'); ?></span></a>
            <?php }?>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  <?php } ?> 
  </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>