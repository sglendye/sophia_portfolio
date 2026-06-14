<?php
/**
 * The template part for displaying grid layout
 * @package Business Card Resume
 * @subpackage business_card_resume
 * @since 1.0
 */
?>
<?php 
  $business_card_resume_archive_year  = get_the_time('Y'); 
  $business_card_resume_archive_month = get_the_time('m'); 
  $business_card_resume_archive_day   = get_the_time('d'); 
?>
<?php 
  $business_card_resume_grid_columns = get_theme_mod('business_card_resume_grid_columns', '3');
  if ($business_card_resume_grid_columns == '2') {
    $business_card_resume_column_class = 'col-lg-6 col-md-6';
  } elseif ($business_card_resume_grid_columns == '4') {
    $business_card_resume_column_class = 'col-lg-3 col-md-6';
  } elseif ($business_card_resume_grid_columns == '3') {
    $business_card_resume_column_class = 'col-lg-4 col-md-4';
  }
?>
<div class="<?php echo esc_attr($business_card_resume_column_class); ?>">
    <article class="grid-sec text-center p-2 mb-4">
        <?php 
            if(has_post_thumbnail() && get_theme_mod('business_card_resume_grid_post_featured_image',true) == true) { 
            the_post_thumbnail(); 
            }
        ?>
        <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>

        <?php if( get_theme_mod( 'business_card_resume_grid_post_date',true) != '' || get_theme_mod( 'business_card_resume_grid_post_author',true) != '' || get_theme_mod( 'business_card_resume_grid_post_comment',true) != '' || get_theme_mod( 'business_card_resume_grid_post_time',true) != '') { ?>
            <div class="grid-post-info p-2 mb-2">
              <?php if( get_theme_mod( 'business_card_resume_grid_post_date',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('business_card_resume_grid_post_date_icon',"fa fa-calendar pe-2 ")); ?>"></i><a href="<?php echo esc_url( get_day_link( $business_card_resume_archive_year, $business_card_resume_archive_month, $business_card_resume_archive_day)); ?>"><span class="entry-date pe-3"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
              <?php }?>
              <?php if( get_theme_mod( 'business_card_resume_grid_post_author',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('business_card_resume_grid_post_author_icon',"fa fa-user pe-2" )); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author pe-3"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
              <?php }?>
              <?php if( get_theme_mod( 'business_card_resume_grid_post_comment',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('business_card_resume_grid_post_comment_icon',"fa fa-comments pe-2" )); ?>"></i><span class="entry-comments pe-3"> <?php comments_number( __('0 Comments','business-card-resume'), __('0 Comments','business-card-resume'), __('% Comments','business-card-resume') ); ?></span> 
              <?php }?>
              <?php if( get_theme_mod( 'business_card_resume_grid_post_time',true) != '') { ?>
                <i class="<?php echo esc_attr(get_theme_mod('business_card_resume_grid_post_time_icon',"fa fa-clock pe-2" )); ?>"></i> <span class="entry-comments pe-3"> <?php echo esc_html( get_the_time() ); ?></span>
              <?php }?>
            </div>
        <?php }?>
        <div class="entry-content">
	        		<p>
			          <?php $business_card_resume_theme_lay = get_theme_mod( 'business_card_resume_grid_post_content','Excerpt Content');
				          if($business_card_resume_theme_lay == 'Full Content'){ ?>
				            <?php the_content(); ?>
				          <?php }
				          if($business_card_resume_theme_lay == 'Excerpt Content'){ ?>
				            <?php if(get_the_excerpt()) { ?>
				              <?php $business_card_resume_excerpt = get_the_excerpt(); echo esc_html( business_card_resume_string_limit_words( $business_card_resume_excerpt, esc_attr(get_theme_mod('business_card_resume_grid_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('business_card_resume_grid_excerpt_suffix','...') ); ?>
				            <?php }?>
				          <?php }?>
			        </p>
	      </div>
        <?php if ( get_theme_mod('business_card_resume_grid_button_text','Read Full') != '' ) {?>
            <div class="blogbtn my-3">
              <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html( get_theme_mod('business_card_resume_grid_button_text',__('Read Full', 'business-card-resume')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('business_card_resume_grid_button_text',__('Read Full', 'business-card-resume')) ); ?></span></a>
            </div>
        <?php }?>
    </article>
</div>