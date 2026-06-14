<div class="theme-info">
	<?php
        // Check if the demo import has been completed
        $business_card_resume_demo_import_completed = get_option('business_card_resume_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($business_card_resume_demo_import_completed) {
            echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'business-card-resume') . '</p>';
            echo '<span><a href="' . esc_url(home_url()) . '" class="import-btn site-btn" target="_blank">' . esc_html__('VIEW SITE', 'business-card-resume') . '</a></span>';
            echo '<span><a href="' . esc_url( admin_url('customize.php')) . '" class="import-btn site-btn" target="_blank">' . esc_html__('CUSTOMIZE', 'business-card-resume') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {

        // ------- Create Main Menu --------
        $business_card_resume_menuname = 'Primary Menu';
        $business_card_resume_bpmenulocation = 'primary';
        $business_card_resume_menu_exists = wp_get_nav_menu_object( $business_card_resume_menuname );
    
        if ( !$business_card_resume_menu_exists ) {
            $business_card_resume_menu_id = wp_create_nav_menu( $business_card_resume_menuname );

            // Create Home Page
            $business_card_resume_home_title = 'Home';
            $business_card_resume_home = array(
                'post_type'    => 'page',
                'post_title'   => $business_card_resume_home_title,
                'post_content' => '',
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'home'
            );
            $business_card_resume_home_id = wp_insert_post($business_card_resume_home);
            // Assign Home Page Template
            add_post_meta($business_card_resume_home_id, '_wp_page_template', 'page-template/custom-front-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $business_card_resume_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($business_card_resume_menu_id, 0, array(
                'menu-item-title' => __('Home', 'business-card-resume'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $business_card_resume_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create a new Page 
            $business_card_resume_pages_title = 'Pages';
            $business_card_resume_pages_content = '<p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $business_card_resume_pages = array(
                'post_type'    => 'page',
                'post_title'   => $business_card_resume_pages_title,
                'post_content' => $business_card_resume_pages_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'pages'
            );
            $business_card_resume_pages_id = wp_insert_post($business_card_resume_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($business_card_resume_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'business-card-resume'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $business_card_resume_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create About Us Page with Dummy Content
            $business_card_resume_about_title = 'About Us';
            $business_card_resume_about_content = '<p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $business_card_resume_about = array(
                'post_type'    => 'page',
                'post_title'   => $business_card_resume_about_title,
                'post_content' => $business_card_resume_about_content,
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_slug'    => 'about-us'
            );
            $business_card_resume_about_id = wp_insert_post($business_card_resume_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($business_card_resume_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'business-card-resume'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $business_card_resume_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));
            // Create Blog Page only if it doesn't exist already
            $business_card_resume_existing_blog_page = get_page_by_path('blog');
            if (!$business_card_resume_existing_blog_page) {
                $business_card_resume_blog_id = wp_insert_post(array(
                'post_type'    => 'page',
                'post_title'   => __('Blog', 'business-card-resume'),
                'post_content' => '',
                'post_status'  => 'publish',
                'post_author'  => 1,
                'post_name'    => 'blog'
                ));
            } else {
                $business_card_resume_blog_id = $business_card_resume_existing_blog_page->ID;
            }
            //  Assign as Posts Page
            update_option('page_for_posts', $business_card_resume_blog_id);
            update_option('show_on_front', 'page');

            // Add to Menu (only if not already added)
            $business_card_resume_menu_items = wp_get_nav_menu_items($business_card_resume_menu_id);
            $business_card_resume_blog_in_menu = false;
            if ($business_card_resume_menu_items) {
            foreach ($business_card_resume_menu_items as $business_card_resume_item) {
                if ((int) $business_card_resume_item->object_id === (int) $business_card_resume_blog_id) {
                    $business_card_resume_blog_in_menu = true;
                    break;
                }
            }
            }
            if (!$business_card_resume_blog_in_menu) {
            wp_update_nav_menu_item($business_card_resume_menu_id, 0, array(
                'menu-item-title'       => __('Blog', 'business-card-resume'),
                'menu-item-url'         => home_url('/blog/'),
                'menu-item-status'      => 'publish',
                'menu-item-object-id'   => $business_card_resume_blog_id,
                'menu-item-object'      => 'page',
                'menu-item-object'      => 'page',
                'menu-item-type'        => 'post_type',
                'menu-item-classes'     => 'business-card-resume-blog-link'
                ));
            }
            // Assign the menu to the primary location if not already set
            if ( ! has_nav_menu( $business_card_resume_bpmenulocation ) ) {
                $business_card_resume_locations = get_theme_mod( 'nav_menu_locations' );
                if ( empty( $business_card_resume_locations ) ) {
                    $business_card_resume_locations = array();
                }
                $business_card_resume_locations[ $business_card_resume_bpmenulocation ] = $business_card_resume_menu_id;
                set_theme_mod( 'nav_menu_locations', $business_card_resume_locations );
            }
        }
        // Set the demo import completion flag
        update_option('business_card_resume_demo_import_completed', true);
        // Display success message and "View Site" button
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'business-card-resume') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="import-btn site-btn" target="_blank">' . esc_html__('VIEW SITE', 'business-card-resume') . '</a></span>';
        echo '<span><a href="' . esc_url( admin_url('customize.php')) . '" class="import-btn site-btn" target="_blank">' . esc_html__('CUSTOMIZE', 'business-card-resume') . '</a></span>';
        //end 

        //Header
        set_theme_mod( 'business_card_resume_call', '123 456 789' );
        set_theme_mod( 'business_card_resume_mail_address', '#' );
        
       //Banner
       set_theme_mod( 'business_card_resume_show_banner', true );
       set_theme_mod( 'business_card_resume_banner_image', esc_url( get_template_directory_uri().'/images/portfolio4.png'));
       set_theme_mod( 'business_card_resume_title', 'Hello, My Name is' );
       set_theme_mod( 'business_card_resume_tagline_title', 'Max Miedinger' );
       set_theme_mod( 'business_card_resume_designation_text', 'FREELANCE GRAPHIC DESIGNER $ UX/UI DESIGNER!' );
       set_theme_mod( 'business_card_resume_facebook_url', '#' );
       set_theme_mod( 'business_card_resume_twitter_url', '#' );
       set_theme_mod( 'business_card_resume_instagram_url', '#' );
       set_theme_mod( 'business_card_resume_linkedin_url', '#' );
       set_theme_mod( 'business_card_resume_banner_button_label', 'HIRE ME' );
       set_theme_mod( 'business_card_resume_top_button_url', '#' );
       set_theme_mod( 'business_card_resume_banner_button_text', 'CHECK MY PORTFOLIO' );
       set_theme_mod( 'business_card_resume_banner_button_url', '#' );

       //Service Section
       set_theme_mod( 'business_card_resume_section_text', 'Portfolio' );
       set_theme_mod( 'business_card_resume_section_title', 'My Latest Works' );
       set_theme_mod( 'business_card_resume_services_number', '4' );
       set_theme_mod( 'business_card_resume_service_button_text', 'VIEW ALL PORTFOLIO' );
       set_theme_mod( 'business_card_resume_service_button_url', '#' );

       $business_card_resume_tab_text_array = array("All", "Graphic Design", "Logo Design", "App Design");
       $business_card_resume_category_names = array("postcategory1", "postcategory2", "postcategory3", "postcategory4");
       $business_card_resume_title_array = array(
           array("MY PROJECT TITLE 01","MY PROJECT TITLE 02","MY PROJECT TITLE 03","MY PROJECT TITLE 04"),
           array("MY PROJECT TITLE 01","MY PROJECT TITLE 02","MY PROJECT TITLE 03","MY PROJECT TITLE 04"),
           array("MY PROJECT TITLE 01","MY PROJECT TITLE 02","MY PROJECT TITLE 03","MY PROJECT TITLE 04"),
           array("MY PROJECT TITLE 01","MY PROJECT TITLE 02","MY PROJECT TITLE 03","MY PROJECT TITLE 04"),
       );

       for ($business_card_resume_tab_index = 1; $business_card_resume_tab_index <= 4; $business_card_resume_tab_index++) {
        $theme_mod_key = 'business_card_resume_services_text' . $business_card_resume_tab_index;
        $theme_mod_value = $business_card_resume_tab_text_array[$business_card_resume_tab_index - 1];
        set_theme_mod($theme_mod_key, $theme_mod_value);
    
        $current_category = $business_card_resume_category_names[$business_card_resume_tab_index - 1];
        set_theme_mod('business_card_resume_services_category' . $business_card_resume_tab_index, $current_category);
    
        $business_card_resume_term = term_exists($current_category, 'category');
        if ($business_card_resume_term === 0 || $business_card_resume_term === null) {
            $business_card_resume_term = wp_insert_term($current_category, 'category');
        }
        if (is_wp_error($business_card_resume_term)) {
            error_log('Error creating category: ' . $business_card_resume_term->get_error_message());
            continue;
        }
    
        for ($business_card_resume_i = 0; $business_card_resume_i < count($business_card_resume_title_array[$business_card_resume_tab_index - 1]); $business_card_resume_i++) {
            $business_card_resume_title = $business_card_resume_title_array[$business_card_resume_tab_index - 1][$business_card_resume_i];
    
            $business_card_resume_my_post = array(
                'post_title' => wp_strip_all_tags($business_card_resume_title),
                'post_status' => 'publish',
                'post_type' => 'post',
            );
    
            $business_card_resume_post_id = wp_insert_post($business_card_resume_my_post);
            if (is_wp_error($business_card_resume_post_id)) {
                error_log('Error creating post: ' . $business_card_resume_post_id->get_error_message());
                continue;
            }
    
            wp_set_post_categories($business_card_resume_post_id, array((int)$business_card_resume_term['term_id']));
    
            $business_card_resume_image_url = get_template_directory_uri() . '/images/portfolio' . ($business_card_resume_i + 1) . '.png';
            $business_card_resume_image_id = media_sideload_image($business_card_resume_image_url, $business_card_resume_post_id, null, 'id');
    
            if (is_wp_error($business_card_resume_image_id)) {
                error_log('Error downloading image: ' . $business_card_resume_image_id->get_error_message());
                continue;
            }
    
            set_post_thumbnail($business_card_resume_post_id, $business_card_resume_image_id);
        }
    }
        //Copyright Text
        set_theme_mod( 'business_card_resume_footer_text', 'By Themesglance' );

        }
    ?>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=business_card_resume_guide" method="POST" onsubmit="return validate(this);">
    <?php if (!get_option('business_card_resume_demo_import_completed')) : ?>
        <div class="demo-btn">
            <p><?php echo  esc_html_e( 'You are about to use the most easy to use and flexible WordPress theme.', 'business-card-resume' ); ?></p>
            <button id="import-button" type="submit" name="submit" class="import-btn run-import button-large">
                <?php esc_html_e('Demo Importer', 'business-card-resume'); ?>
                    <span id="spinner" style="display: none;">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/spinner.gif" alt="Loading..." style="width:34px; height:34px; margin-left:10px; vertical-align: middle;" />
                    </span>
            </button>
        </div>
    <?php endif; ?>
    </form>
	<script type="text/javascript">
		function validate(valid) {
			 if(confirm("Do you really want to import the Demo Theme Content?")){
			    document.getElementById('spinner').style.display = 'inline-block';
			}
		    else {
			    return false;
		    }
		}
	</script>
</div>
