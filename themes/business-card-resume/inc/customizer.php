<?php
/**
 * Business Card Resume Theme Customizer
 * @package Business Card Resume
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function business_card_resume_customize_register( $wp_customize ) {	

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-selector.php' );

	class Business_Card_Resume_WP_Customize_Range_Control extends WP_Customize_Control{
	    public $type = 'custom_range';
	    public function enqueue(){
	        wp_enqueue_script(
	            'cs-range-control',
	            false,
	            true
	        );
	    }
	    public function render_content(){?>
	        <label>
	            <?php if ( ! empty( $this->label )) : ?>
	                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
	            <?php endif; ?>
	            <div class="cs-range-value"><?php echo esc_html($this->value()); ?></div>
	            <input data-input-type="range" type="range" <?php $this->input_attrs(); ?> value="<?php echo esc_attr($this->value()); ?>" <?php $this->link(); ?> />
	            <?php if ( ! empty( $this->description )) : ?>
	                <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
	            <?php endif; ?>
	        </label>
        <?php }
	}

	//add home page setting pannel
	$wp_customize->add_panel( 'business_card_resume_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'business-card-resume' ),
		'description' => __( 'Description of what this panel does.', 'business-card-resume' ),
	) );

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'business_card_resume_theme_color_option', array( 
		'panel' => 'business_card_resume_panel_id', 
		'title' => esc_html__( 'Global Color Settings', 'business-card-resume' ) 
	) );

  	$wp_customize->add_setting( 'business_card_resume_first_theme_color', array(
	    'default' => '#ffcc73',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_first_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme global color settings on just one click.', 'business-card-resume'),
	    'section' => 'business_card_resume_theme_color_option',
	    'settings' => 'business_card_resume_first_theme_color',
  	)));

	// font array
	$business_card_resume_font_array = array(
		'' => 'No Fonts',
		'Abril Fatface' => 'Abril Fatface',
		'Acme' => 'Acme',
		'Anton' => 'Anton',
		'Architects Daughter' => 'Architects Daughter',
		'Arimo' => 'Arimo',
		'Arsenal' => 'Arsenal', 
		'Arvo' => 'Arvo',
		'Alegreya' => 'Alegreya',
		'Alfa Slab One' => 'Alfa Slab One',
		'Averia Serif Libre' => 'Averia Serif Libre',
		'Bangers' => 'Bangers', 
		'Boogaloo' => 'Boogaloo',
		'Bad Script' => 'Bad Script',
		'Bitter' => 'Bitter',
		'Bree Serif' => 'Bree Serif',
		'BenchNine' => 'BenchNine', 
		'Cabin' => 'Cabin', 
		'Cardo' => 'Cardo',
		'Courgette' => 'Courgette',
		'Cherry Swash' => 'Cherry Swash',
		'Cormorant Garamond' => 'Cormorant Garamond',
		'Crimson Text' => 'Crimson Text',
		'Cuprum' => 'Cuprum', 
		'Cookie' => 'Cookie', 
		'Chewy' => 'Chewy', 
		'Days One' => 'Days One', 
		'Dosis' => 'Dosis',
		'Droid Sans' => 'Droid Sans',
		'Economica' => 'Economica',
		'Fredoka One' => 'Fredoka One',
		'Fjalla One' => 'Fjalla One',
		'Francois One' => 'Francois One',
		'Frank Ruhl Libre' => 'Frank Ruhl Libre',
		'Gloria Hallelujah' => 'Gloria Hallelujah',
		'Great Vibes' => 'Great Vibes',
		'Handlee' => 'Handlee', 
		'Hammersmith One' => 'Hammersmith One',
		'Inconsolata' => 'Inconsolata', 
		'Indie Flower' => 'Indie Flower', 
		'IM Fell English SC' => 'IM Fell English SC', 
		'Julius Sans One' => 'Julius Sans One',
		'Josefin Slab' => 'Josefin Slab', 
		'Josefin Sans' => 'Josefin Sans', 
		'Kanit' => 'Kanit', 
		'Lobster' => 'Lobster', 
		'Lato' => 'Lato',
		'Lora' => 'Lora', 
		'Libre Baskerville' =>'Libre Baskerville',
		'Lobster Two' => 'Lobster Two',
		'Merriweather' =>'Merriweather', 
		'Monda' => 'Monda',
		'Montserrat' => 'Montserrat',
		'Muli' => 'Muli', 
		'Marck Script' => 'Marck Script',
		'Noto Serif' => 'Noto Serif',
		'Open Sans' => 'Open Sans', 
		'Overpass' => 'Overpass',
		'Overpass Mono' => 'Overpass Mono',
		'Oxygen' => 'Oxygen', 
		'Orbitron' => 'Orbitron', 
		'Patua One' => 'Patua One', 
		'Pacifico' => 'Pacifico',
		'Padauk' => 'Padauk', 
		'Playball' => 'Playball',
		'Playfair Display' => 'Playfair Display', 
		'PT Sans' => 'PT Sans',
		'Philosopher' => 'Philosopher',
		'Permanent Marker' => 'Permanent Marker',
		'Poiret One' => 'Poiret One', 
		'Quicksand' => 'Quicksand', 
		'Quattrocento Sans' => 'Quattrocento Sans', 
		'Raleway' => 'Raleway', 
		'Rubik' => 'Rubik', 
		'Rokkitt' => 'Rokkitt', 
		'Russo One' => 'Russo One', 
		'Righteous' => 'Righteous', 
		'Slabo' => 'Slabo', 
		'Source Sans Pro' => 'Source Sans Pro', 
		'Shadows Into Light Two' =>'Shadows Into Light Two', 
		'Shadows Into Light' => 'Shadows Into Light', 
		'Sacramento' => 'Sacramento', 
		'Shrikhand' => 'Shrikhand', 
		'Tangerine' => 'Tangerine',
		'Ubuntu' => 'Ubuntu', 
		'VT323' => 'VT323', 
		'Varela Round' => 'Varela Round', 
		'Vampiro One' => 'Vampiro One',
		'Vollkorn' => 'Vollkorn',
		'Volkhov' => 'Volkhov', 
		'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
   );

	//Typography
	$wp_customize->add_section( 'business_card_resume_typography', array(
    	'title' => __( 'Typography', 'business-card-resume' ),
		'priority'   => 30,
		'panel' => 'business_card_resume_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'business_card_resume_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_paragraph_color', array(
		'label' => __('Paragraph Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_paragraph_font_family',array(
	  	'default' => '',
	  	'capability' => 'edit_theme_options',
	  	'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_paragraph_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( 'Paragraph Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	$wp_customize->add_setting('business_card_resume_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_typography',
		'setting'	=> 'business_card_resume_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'business_card_resume_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_atag_color', array(
		'label' => __('"a" Tag Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_atag_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( '"a" Tag Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'business_card_resume_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_li_color', array(
		'label' => __('"li" Tag Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_li_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( '"li" Tag Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'business_card_resume_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_h1_color', array(
		'label' => __('H1 Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_h1_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( 'H1 Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('business_card_resume_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_h1_font_size',array(
		'label'	=> __('H1 Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_typography',
		'setting'	=> 'business_card_resume_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'business_card_resume_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_h2_color', array(
		'label' => __('h2 Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_h2_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( 'h2 Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('business_card_resume_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_h2_font_size',array(
		'label'	=> __('h2 Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_typography',
		'setting'	=> 'business_card_resume_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'business_card_resume_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_h3_color', array(
		'label' => __('h3 Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_h3_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( 'h3 Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('business_card_resume_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_h3_font_size',array(
		'label'	=> __('h3 Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_typography',
		'setting'	=> 'business_card_resume_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'business_card_resume_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_h4_color', array(
		'label' => __('h4 Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_h4_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( 'h4 Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('business_card_resume_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_h4_font_size',array(
		'label'	=> __('h4 Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_typography',
		'setting'	=> 'business_card_resume_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'business_card_resume_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_h5_color', array(
		'label' => __('h5 Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_h5_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( 'h5 Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('business_card_resume_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_h5_font_size',array(
		'label'	=> __('h5 Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_typography',
		'setting'	=> 'business_card_resume_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'business_card_resume_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_h6_color', array(
		'label' => __('h6 Color', 'business-card-resume'),
		'section' => 'business_card_resume_typography',
		'settings' => 'business_card_resume_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('business_card_resume_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control(
	   'business_card_resume_h6_font_family', array(
	   'section'  => 'business_card_resume_typography',
	   'label'    => __( 'h6 Fonts','business-card-resume'),
	   'type'     => 'select',
	   'choices'  => $business_card_resume_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('business_card_resume_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_h6_font_size',array(
		'label'	=> __('h6 Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_typography',
		'setting'	=> 'business_card_resume_h6_font_size',
		'type'	=> 'text'
	));

	// Header
	$wp_customize->add_section('business_card_resume_header',array(
		'title'	=> __('Header','business-card-resume'),
		'priority' => null,
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting( 'business_card_resume_menu_font_size', array(
		'default'=> '13',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_menu_font_size', array(
		'label'  => __('Menu Font Size','business-card-resume'),
		'section'  => 'business_card_resume_header',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
    )));

 	$wp_customize->add_setting('business_card_resume_menu_font_weight',array(
		'default' => '',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_menu_font_weight',array(
		'type' => 'select',
		'label' => __('Menu Font Weight','business-card-resume'),
		'section' => 'business_card_resume_header',
		'choices' => array(
		   '100' => __('100','business-card-resume'),
		   '200' => __('200','business-card-resume'),
		   '300' => __('300','business-card-resume'),
		   '400' => __('400','business-card-resume'),
		   '500' => __('500','business-card-resume'),
		   '600' => __('600','business-card-resume'),
		   '700' => __('700','business-card-resume'),
		   '800' => __('800','business-card-resume'),
		   '900' => __('900','business-card-resume'),
		),
	) );

	$wp_customize->add_setting('business_card_resume_menu_padding',array(
		'default'=> 20,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize,'business_card_resume_menu_padding',array(
		'label'	=> __('Menu Font Padding','business-card-resume'),
		'section'=> 'business_card_resume_header',
		'input_attrs' => array(
         'step'  => 1,
			'min'   => 0,
			'max'   => 50,
        ),
	)));

	$wp_customize->add_setting('business_card_resume_menu_case',array(
        'default' => 'Capitalize',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_menu_case',array(
        'type' => 'select',
        'label' => __('Menu Case','business-card-resume'),
        'section' => 'business_card_resume_header',
        'choices' => array(
            'uppercase' => __('Uppercase','business-card-resume'),
            'capitalize' => __('Capitalize','business-card-resume'),
            'lowercase' => __('lowercase','business-card-resume'),
        ),
	) );

	$wp_customize->add_setting('business_card_resume_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_menus_item_style',array(
        'type' => 'select',
		'label' => __('Menu Item Hover Style','business-card-resume'),
		'section' => 'business_card_resume_header',
		'choices' => array(
            'None' => __('None','business-card-resume'),
            'Zoom In' => __('Zoom In','business-card-resume'),
			'Underline Expand' => __('Underline Expand', 'business-card-resume'), 
        ),
	) );

	$wp_customize->add_setting('business_card_resume_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_menu_color', array(
		'label'    => __('Menu Color', 'business-card-resume'),
		'section'  => 'business_card_resume_header',
		'settings' => 'business_card_resume_menu_color',
	)));

	$wp_customize->add_setting('business_card_resume_menu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_menu_hover_color', array(
		'label'    => __('Menu Hover Color', 'business-card-resume'),
		'section'  => 'business_card_resume_header',
		'settings' => 'business_card_resume_menu_hover_color',
	)));

	$wp_customize->add_setting('business_card_resume_submenu_menu_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_submenu_menu_color', array(
		'label'    => __('Submenu Color', 'business-card-resume'),
		'section'  => 'business_card_resume_header',
		'settings' => 'business_card_resume_submenu_menu_color',
	)));

	$wp_customize->add_setting('business_card_resume_submenu_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_submenu_hover_color', array(
		'label'    => __('Submenu Hover Color', 'business-card-resume'),
		'section'  => 'business_card_resume_header',
		'settings' => 'business_card_resume_submenu_hover_color',
	)));

	$wp_customize->add_setting('business_card_resume_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_call',array(
		'label'	=> __('Add Phone No.','business-card-resume'),
		'section' => 'business_card_resume_header',
		'setting' => 'business_card_resume_call',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_call_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_call_icon',array(
		'label'	=>__('Add Phone Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_header',
		'setting'	=> 'business_card_resume_call_icon',
		'type'		=> 'icon',
	)));

	$wp_customize->add_setting('business_card_resume_mail_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_mail_address',array(
		'label'	=> __('Add Email Link','business-card-resume'),
		'section' => 'business_card_resume_header',
		'setting' => 'business_card_resume_mail_address',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_mail_icon',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_mail_icon',array(
		'label'	=>__('Add Email Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_header',
		'setting'	=> 'business_card_resume_mail_icon',
		'type'		=> 'icon',
	)));

	$wp_customize->add_setting( 'business_card_resume_header_icons_font_size', array(
		'default'=> '16',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new business_card_resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_header_icons_font_size', array(
        'label'  => __('Icons Font Size','business-card-resume'),
        'section'  => 'business_card_resume_header',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 20,
        )
    )));

	$wp_customize->add_setting('business_card_resume_header_icon_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_header_icon_color', array(
		'label'    => __('Icon Color', 'business-card-resume'),
		'section'  => 'business_card_resume_header',
	)));

	$wp_customize->add_setting( 'business_card_resume_menu_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('business_card_resume_menu_settings_premium_features', array(
        'type'=> 'hidden',
        'description' => "<h3>". esc_html('Premium Theme Features!','business-card-resume') ."</h3>
            <ul>
                <li>". esc_html('Menu DropDown Background Colors','business-card-resume') ."</li>
                <li>". esc_html('Menu Item Fonts','business-card-resume') ."</li>
                <li>". esc_html('Active Menu Colors','business-card-resume') ."</li>
                <li>". esc_html('Header Search Icons Colors','business-card-resume') ."</li>
                <li>". esc_html('... and Other Premium Features','business-card-resume') ."</li>
            </ul>
            <a target='_blank' href='". esc_url('https://www.themesglance.com/products/business-card-wordpress-theme') ." '>". esc_html('Upgrade Now','business-card-resume') ."</a>",
        'section' => 'business_card_resume_header'
        )
    );

	//Banner section
  	$wp_customize->add_section('business_card_resume_banner',array(
		'title' => __('Banner Section','business-card-resume'),
		'description' => '',
		'priority'  => null,
		'panel' => 'business_card_resume_panel_id',
	)); 

	$wp_customize->add_setting('business_card_resume_show_banner',array(
		'default' => false,
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_show_banner',array(
     	'type' => 'checkbox',
	   	'label' => __('Show / Hide Banner','business-card-resume'),
	   	'section' => 'business_card_resume_banner'
	));

	$wp_customize->add_setting('business_card_resume_banner_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'business_card_resume_banner_image',array(
        'label' => __('Banner Background Image','business-card-resume'),
        'description' => __('Image size (1400px x 750px)','business-card-resume'),
        'section' => 'business_card_resume_banner'
	)));

	$wp_customize->add_setting('business_card_resume_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_title',array(
		'label'	=> __('Tagline Name Title','business-card-resume'),
		'section'	=> 'business_card_resume_banner',
		'type'		=> 'text'
	));

   $wp_customize->add_setting('business_card_resume_tagline_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_tagline_title',array(
		'label'	=> __('Tagline Name Title','business-card-resume'),
		'section'	=> 'business_card_resume_banner',
		'type'		=> 'text'
	));

	 $wp_customize->add_setting('business_card_resume_designation_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_designation_text',array(
		'label'	=> __('Designation Text','business-card-resume'),
		'section'	=> 'business_card_resume_banner',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('business_card_resume_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_facebook_url',array(
		'label'	=> __('Add Facebook URL','business-card-resume'),
		'section' => 'business_card_resume_banner',
		'setting' => 'business_card_resume_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_facebook_icon',array(
        'default'   => 'fab fa-facebook-f',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_facebook_icon',array(
        'label' => __('Facebook Icon','business-card-resume'),
        'section' => 'business_card_resume_banner',
        'type'    => 'icon',
    )));

	$wp_customize->add_setting('business_card_resume_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_twitter_url',array(
		'label'	=> __('Add Twitter URL','business-card-resume'),
		'section' => 'business_card_resume_banner',
		'setting' => 'business_card_resume_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_twitter_icon',array(
        'default'   => 'fab fa-twitter',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_twitter_icon',array(
        'label' => __('Twitter Icon','business-card-resume'),
        'section' => 'business_card_resume_banner',
        'type'    => 'icon',
    )));

	$wp_customize->add_setting('business_card_resume_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_instagram_url',array(
		'label'	=> __('Add Instagram URL','business-card-resume'),
		'section' => 'business_card_resume_banner',
		'setting' => 'business_card_resume_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_insta_icon',array(
        'default'   => 'fab fa-instagram',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_insta_icon',array(
        'label' => __('Instagram Icon','business-card-resume'),
        'section' => 'business_card_resume_banner',
        'type'    => 'icon',
    )));

	$wp_customize->add_setting('business_card_resume_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_linkedin_url',array(
		'label'	=> __('Add Linkedin URL','business-card-resume'),
		'section' => 'business_card_resume_banner',
		'setting' => 'business_card_resume_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_linkdin_icon',array(
        'default'   => 'fab fa-linkedin-in',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_linkdin_icon',array(
        'label' => __('Linkedin Icon','business-card-resume'),
        'section' => 'business_card_resume_banner',
        'type'    => 'icon',
    )));

	
    $wp_customize->add_setting( 'business_card_resume_banner_social_icons_font_size', array(
		'default'=> '16',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_banner_social_icons_font_size', array(
        'label'  => __('Social Icons Font Size','business-card-resume'),
        'section'  => 'business_card_resume_banner',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 10,
            'max' => 20,
        )
    )));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst2[]='Select';  
	foreach($post_list as $post){
		$pst2[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting( 'business_card_resume_banner_button_label', array(
		'default' => __('Hire Me','business-card-resume'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_banner_button_label', array(
		'label' => esc_html__( 'Hire Button Text','business-card-resume' ),
		'section' => 'business_card_resume_banner',
		'type'    => 'text',
		'settings'    => 'business_card_resume_banner_button_label'
	) );

	$wp_customize->add_setting('business_card_resume_top_button_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_top_button_url',array(
		'label'	=> __('Add Button URL','business-card-resume'),
		'section'=> 'business_card_resume_banner',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'business_card_resume_banner_button_text', array(
		'default' => __('Check My Portfolio','business-card-resume'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_banner_button_text', array(
		'label' => esc_html__( 'Portfolio Button Text','business-card-resume' ),
		'section' => 'business_card_resume_banner',
		'type'    => 'text',
		'settings'    => 'business_card_resume_banner_button_text'
	) );

	$wp_customize->add_setting('business_card_resume_banner_button_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_banner_button_url',array(
		'label'	=> __('Add Button URL','business-card-resume'),
		'section'=> 'business_card_resume_banner',
		'type'=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_slider_btn_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_slider_btn_color', array(
		'label'    => __('Banner Button Lable Color', 'business-card-resume'),
		'section'  => 'business_card_resume_banner',
		'settings' => 'business_card_resume_slider_btn_color',
	)));

	$wp_customize->add_setting('business_card_resume_slider_btn_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_slider_btn_bg_color', array(
		'label'    => __('Banner Button Bg Color', 'business-card-resume'),
		'section'  => 'business_card_resume_banner',
		'settings' => 'business_card_resume_slider_btn_bg_color',
	)));

    $wp_customize->add_setting('business_card_resume_slider_btn_lable_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_slider_btn_lable_hover_color', array(
		'label'    => __('Banner Button Lable hover Color', 'business-card-resume'),
		'section'  => 'business_card_resume_banner',
		'settings' => 'business_card_resume_slider_btn_lable_hover_color',
	)));

	$wp_customize->add_setting('business_card_resume_slider_btn_bg_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_slider_btn_bg_hover_color', array(
		'label'    => __('Banner Button Bg hover Color', 'business-card-resume'),
		'section'  => 'business_card_resume_banner',
		'settings' => 'business_card_resume_slider_btn_bg_hover_color',
	)));

	//Services Section
	$wp_customize->add_section('business_card_resume_service_section',array(
		'title'	=> __('Service Section','business-card-resume'),
		'description'	=> __('Add service section below.','business-card-resume'),
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting('business_card_resume_section_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_section_text',array(
		'label'	=> __('Section Text','business-card-resume'),
		'section'	=> 'business_card_resume_service_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('business_card_resume_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_section_title',array(
		'label'	=> __('Section Title','business-card-resume'),
		'section'	=> 'business_card_resume_service_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('business_card_resume_services_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_services_number',array(
		'description'	=> __('Refresh after publish No of Tabs to show','business-card-resume'),
		'label'	=> esc_html__('No of Tabs to show','business-card-resume'),
		'section'=> 'business_card_resume_service_section',
		'type'=> 'number',

	));	

	$category_post = get_theme_mod('business_card_resume_services_number','');
    for ( $j = 1; $j <= $category_post; $j++ ) {
		$wp_customize->add_setting('business_card_resume_services_text'.$j,array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));	
		$wp_customize->add_control('business_card_resume_services_text'.$j,array(
			'label'	=> esc_html__('Tab Title','business-card-resume').$j,
			'section'=> 'business_card_resume_service_section',
			'type'=> 'text'
		));

	$categories = get_categories();
		$cat_posts = array();
		$i = 0;
		$cat_posts[]='Select';	
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('business_card_resume_services_category'.$j,array(
		'default'	=> 'select',
		'sanitize_callback' => 'business_card_resume_sanitize_choices',
	));
	$wp_customize->add_control('business_card_resume_services_category'.$j,array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display service posts','business-card-resume'),
		'section' => 'business_card_resume_service_section',
	));

	}

	$wp_customize->add_setting( 'business_card_resume_service_button_text', array(
		'default' => __('Check My Portfolio','business-card-resume'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_service_button_text', array(
		'label' => esc_html__( 'Service Section Button Text','business-card-resume' ),
		'section' => 'business_card_resume_service_section',
		'type'    => 'text',
		'settings'    => 'business_card_resume_service_button_text'
	) );

	$wp_customize->add_setting('business_card_resume_service_button_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_service_button_url',array(
		'label'	=> __('Add Button URL','business-card-resume'),
		'section'=> 'business_card_resume_service_section',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'business_card_resume_services_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('business_card_resume_services_settings_premium_features', array(
        'type'=> 'hidden',
        'description' => "<h3>". esc_html('Premium Theme Features!','business-card-resume') ."</h3>
            <ul>
                <li>". esc_html('Section Font Settings','business-card-resume') ."</li>
                <li>". esc_html('Background Image Settings','business-card-resume') ."</li>
                <li>". esc_html('... and Other Premium Features','business-card-resume') ."</li>
            </ul>
            <a target='_blank' href='". esc_url('https://www.themesglance.com/products/business-card-wordpress-theme') ." '>". esc_html('Upgrade Now','business-card-resume') ."</a>",
        'section' => 'business_card_resume_service_section'
        )
    );

	//layout setting
	$wp_customize->add_section( 'business_card_resume_theme_layout', array(
    	'title' => __( 'Blog Settings', 'business-card-resume' ),   
		'priority' => null,
		'panel' => 'business_card_resume_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('business_card_resume_layout',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	) );
	$wp_customize->add_control(new Business_Card_Resume_Image_Radio_Control($wp_customize, 'business_card_resume_layout', array(
		'type' => 'radio',
		'label' => esc_html__('Select Sidebar layout', 'business-card-resume'),
		'section' => 'business_card_resume_theme_layout',
		'settings' => 'business_card_resume_layout',
		'choices' => array(
		   'Right Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout3.png',
		   'Left Sidebar' => esc_url(get_template_directory_uri()) . '/images/layout2.png',
		   'One Column' => esc_url(get_template_directory_uri()) . '/images/layout1.png',
		   'Three Columns' => esc_url(get_template_directory_uri()) . '/images/layout4.png',
		   'Four Columns' => esc_url(get_template_directory_uri()) . '/images/layout5.png',
		   'Grid Layout' => esc_url(get_template_directory_uri()) . '/images/layout6.png'
	))));

	$wp_customize->add_setting('business_card_resume_blog_post_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
    ));
	$wp_customize->add_control('business_card_resume_blog_post_alignment', array(
        'type' => 'select',
        'label' => __( 'Blog Post Alignment', 'business-card-resume' ),
        'section' => 'business_card_resume_theme_layout',
        'choices' => array(
            'left' => __('Left Align','business-card-resume'),
            'right' => __('Right Align','business-card-resume'),
            'center' => __('Center Align','business-card-resume'),
			'image_content' => __('Image and Content', 'business-card-resume')
        ),
    ));

	$wp_customize->add_setting('business_card_resume_blog_post_display_type',array(
		'default' => 'blocks',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_blog_post_display_type', array(
		'type' => 'select',
		'label' => __( 'Blog Page Display Type', 'business-card-resume' ),
		'section' => 'business_card_resume_theme_layout',
		'choices' => array(
		   'blocks' => __('Blocks','business-card-resume'),
		   'without blocks' => __('Without Blocks','business-card-resume'),
		),
    ));

    $wp_customize->add_setting('business_card_resume_featured_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Featured Image','business-card-resume'),
       'section' => 'business_card_resume_theme_layout'
    ));

	$wp_customize->add_setting('business_card_resume_metafields_date',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_metafields_date',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Date ','business-card-resume'),
		'section' => 'business_card_resume_theme_layout'
	));

	$wp_customize->add_setting('business_card_resume_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_theme_layout',
		'setting'	=> 'business_card_resume_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_metafields_author',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_metafields_author',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Author','business-card-resume'),
		'section' => 'business_card_resume_theme_layout'
	));

	$wp_customize->add_setting('business_card_resume_postauthor_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_postauthor_icon',array(
		'label'	=> __('Add Post Author Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_theme_layout',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('business_card_resume_tag',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_tag',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Tag','business-card-resume'),
		'section' => 'business_card_resume_theme_layout'
	));

	$wp_customize->add_setting('business_card_resume_tag_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_tag_icon',array(
		'label'	=> __('Add Post Tag Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_theme_layout',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_post_navigation',array(
		'default' => 'true',
		'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_post_navigation',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Post Navigation','business-card-resume'),
		'section' => 'business_card_resume_theme_layout'
	));

	$wp_customize->add_setting('business_card_resume_initial_caps_enable',
	array(
		'default' => false,
		'sanitize_callback' => 'business_card_resume_sanitize_checkbox',
	)); 
	$wp_customize->add_control( 'business_card_resume_initial_caps_enable', 
	array(
		'label' => esc_html__('Initial Letter Capital', 'business-card-resume'),
		'type' => 'checkbox',
		'section' => 'business_card_resume_theme_layout',
	));

	$wp_customize->add_setting('business_card_resume_metabox_seperator',array(
       'default' => '|',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('business_card_resume_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','business-card-resume'),
       'description' => __('Ex: "/", "|", "-", ...','business-card-resume'),
       'section' => 'business_card_resume_theme_layout'
    ));

 	$wp_customize->add_setting('business_card_resume_blog_post_content',array(
    	'default' => 'Excerpt Content',
     	'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_blog_post_content',array(
		'type' => 'radio',
		'label' => __('Blog Post Content Type','business-card-resume'),
		'section' => 'business_card_resume_theme_layout',
		'choices' => array(
		   'No Content' => __('No Content','business-card-resume'),
		   'Full Content' => __('Full Content','business-card-resume'),
		   'Excerpt Content' => __('Excerpt Content','business-card-resume'),
		),
	) );

 	$wp_customize->add_setting( 'business_card_resume_post_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( 'business_card_resume_post_excerpt_number', array(
		'label' => esc_html__( 'Blog Post Excerpt Number (Max 50)','business-card-resume' ),
		'section' => 'business_card_resume_theme_layout',
		'type'    => 'number',
		'settings' => 'business_card_resume_post_excerpt_number',
		'input_attrs' => array(
			'step'  => 1,
			'min'   => 0,
			'max'   => 50,
		),
		'active_callback' => 'business_card_resume_excerpt_enabled'
	) );

	$wp_customize->add_setting( 'business_card_resume_button_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_button_excerpt_suffix', array(
		'label'       => esc_html__( 'Post Excerpt Suffix','business-card-resume' ),
		'section'     => 'business_card_resume_theme_layout',
		'type'        => 'text',
		'settings'    => 'business_card_resume_button_excerpt_suffix',
		'active_callback' => 'business_card_resume_excerpt_enabled'
	) );

	//Featured Image
	$wp_customize->add_setting('business_card_resume_blog_image_dimension',array(
       'default' => 'default',
       'sanitize_callback'	=> 'business_card_resume_sanitize_choices'
    ));
    $wp_customize->add_control('business_card_resume_blog_image_dimension',array(
       'type' => 'radio',
       'label'	=> __('Blog Post Featured Image Dimension','business-card-resume'),
       'choices' => array(
            'default' => __('Default','business-card-resume'),
            'custom' => __('Custom Image Size','business-card-resume'),
        ),
      	'section'	=> 'business_card_resume_theme_layout',
    ));

    $wp_customize->add_setting( 'business_card_resume_feature_image_custom_width', array(
		'default'=> '250',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_feature_image_custom_width', array(
        'label'  => __('Featured Image Custom Width','business-card-resume'),
        'section'  => 'business_card_resume_theme_layout',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 800,
        ),
		'active_callback' => 'business_card_resume_blog_image_dimension'
    )));

    $wp_customize->add_setting( 'business_card_resume_feature_image_custom_height', array(
		'default'=> '250',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_feature_image_custom_height', array(
        'label'  => __('Featured Image Custom Height','business-card-resume'),
        'section'  => 'business_card_resume_theme_layout',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 400,
        ),
		'active_callback' => 'business_card_resume_blog_image_dimension'
    )));

	$wp_customize->add_setting( 'business_card_resume_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_feature_image_border_radius', array(
        'label'  => __('Featured Image Border Radius','business-card-resume'),
        'section'  => 'business_card_resume_theme_layout',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

	$wp_customize->add_setting( 'business_card_resume_feature_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_feature_image_border_radius', array(
     	'label'  => __('Featured Image Border Radius','business-card-resume'),
     	'section'  => 'business_card_resume_theme_layout',
     	'description' => __('Measurement is in pixel.','business-card-resume'),
     	'input_attrs' => array(
         'min' => 0,
         'max' => 50,
     	),
 	)));

 	$wp_customize->add_setting( 'business_card_resume_feature_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_feature_image_shadow', array(
		'label'  => __('Featured Image Shadow','business-card-resume'),
		'section'  => 'business_card_resume_theme_layout',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		),
    )));
	
	$wp_customize->add_setting('business_card_resume_post_pagination_option',array(
		'default' => 'Right',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_post_pagination_option',array(
		'type' => 'select',
		'label' => __('Post Pagination Alignment','business-card-resume'),
		'section' => 'business_card_resume_theme_layout',
		'choices' => array(
			'Center' => __('Center','business-card-resume'),
			'Left' => __('Left','business-card-resume'),
			'Right' => __('Right','business-card-resume'),
		),
	) );

	$wp_customize->add_setting( 'business_card_resume_pagination_type', array(
		'default'			=> 'page-numbers',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'business_card_resume_pagination_type', array(
		'section' => 'business_card_resume_theme_layout',
		'type' => 'select',
		'label' => __( 'Blog Pagination Style', 'business-card-resume' ),
		'choices' => array(
		   	'page-numbers' => __('Number', 'business-card-resume' ),
	   		'next-prev' => __('Next/Prev', 'business-card-resume' ),
	)));

	$wp_customize->add_setting( 'business_card_resume_blog_post_prev_nav_text', array(
		'default' => __('Previous','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_blog_post_prev_nav_text', array(
		'label' => esc_html__( 'Blog Post Previous Nav text','business-card-resume' ),
		'section'     => 'business_card_resume_theme_layout',
		'type'        => 'text',
		'settings'    => 'business_card_resume_blog_post_prev_nav_text',
		'active_callback' => 'business_card_resume_pagination_callback',
	) );

	$wp_customize->add_setting( 'business_card_resume_blog_post_next_nav_text', array(
		'default' => __('Next','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_blog_post_next_nav_text', array(
		'label' => esc_html__( 'Blog Post Next Nav text','business-card-resume' ),
		'section'     => 'business_card_resume_theme_layout',
		'type'        => 'text',
		'settings'    => 'business_card_resume_blog_post_next_nav_text',
		'active_callback' => 'business_card_resume_pagination_callback',
	) );

	$wp_customize->add_setting('business_card_resume_blog_nav_position',array(
		'default' => 'bottom',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_blog_nav_position', array(
		'type' => 'select',
		'label' => __( 'Blog Post Navigation Position', 'business-card-resume' ),
		'section' => 'business_card_resume_theme_layout',
		'choices' => array(
		   'top' => __('Top','business-card-resume'),
		   'bottom' => __('Bottom','business-card-resume'),
		   'both' => __('Both','business-card-resume')
		),
 	));

 	$wp_customize->add_setting( 'business_card_resume_post_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('business_card_resume_post_settings_premium_features', array(
        'type'=> 'hidden',
        'description' => "<h3>". esc_html('Premium Theme Features!','business-card-resume') ."</h3>
            <ul>
                <li>". esc_html('Section Heading Option','business-card-resume') ."</li>
                <li>". esc_html('Animated Elements Colors','business-card-resume') ."</li>
                <li>". esc_html('... and Other Premium Features','business-card-resume') ."</li>
            </ul>
            <a target='_blank' href='". esc_url('https://www.themesglance.com/products/business-card-wordpress-theme') ." '>". esc_html('Upgrade Now','business-card-resume') ."</a>",
        'section' => 'business_card_resume_theme_layout'
        )
    );

	$wp_customize->add_section( 'business_card_resume_single_post_settings', array(
		'title' => __( 'Single Post Options', 'business-card-resume' ),
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting('business_card_resume_single_post_breadcrumb',array(
		'default' => 'true',
		'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_post_breadcrumb',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Breadcrumb','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_single_post_date',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_post_date',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Date','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_singlepost_date_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_singlepost_date_icon',array(
		'label'	=> __('Single Post Date Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_single_post_settings',
		'setting'	=> 'business_card_resume_singlepost_date_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_single_post_author',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_post_author',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Author','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_singlepost_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_singlepost_author_icon',array(
		'label'	=> __('Single Post Author Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_single_post_comment_no',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_post_comment_no',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Comments','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_single_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_single_post_comment_icon',array(
		'label'	=> __('Single Post Comments Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_single_post_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_single_post_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Time','business-card-resume'),
       'section' => 'business_card_resume_single_post_settings'
    ));

    $wp_customize->add_setting('business_card_resume_single_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_single_post_time_icon',array(
		'label'	=> __('Single Post Time Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_single_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_single_post_metabox_seperator',array(
       'default' => '|',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('business_card_resume_single_post_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','business-card-resume'),
       'description' => __('Ex: "/", "|", "-", ...','business-card-resume'),
       'section' => 'business_card_resume_single_post_settings'
    ));

    $wp_customize->add_setting('business_card_resume_single_post_image',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_post_image',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Featured Image','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

    $wp_customize->add_setting('business_card_resume_single_post_category',array(
       'default' => 'true',
       'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_single_post_category',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Single Post Category','business-card-resume'),
       'section' => 'business_card_resume_single_post_settings'
    ));

	$wp_customize->add_setting('business_card_resume_metafields_tags',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_metafields_tags',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Tags','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	// Single Posts Category

	$wp_customize->add_setting('business_card_resume_single_post_styling',array(
    'default' => 'Button',
    'transport' => 'refresh',
    'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_single_post_styling',array(
	'description' => __('Change the styling of Category .','business-card-resume'),
	'type' => 'select',
    'section' => 'business_card_resume_single_post_settings',
    'choices' => array(
        'Button' => __('Button','business-card-resume'),
		'Underline' => __('Underline','business-card-resume'),
		'Default' => __('Default','business-card-resume'),
      ),
	));

	$wp_customize->add_setting( 'business_card_resume_post_featured_image', array(
		'default' => 'in-content',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'business_card_resume_post_featured_image', array(
		'section' => 'business_card_resume_single_post_settings',
		'type' => 'radio',
		'label' => __( 'Featured Image Display Type', 'business-card-resume' ),
		'choices'		=> array(
		   'banner'  => __('as Banner Image', 'business-card-resume'),
		   'in-content' => __( 'as Featured Image', 'business-card-resume' ),
	)));

	//Featured Image
	
	$wp_customize->add_setting('business_card_resume_single_post_image_dimension',array(
		'default' => 'default',
		'sanitize_callback'	=> 'business_card_resume_sanitize_choices'
	 ));
	$wp_customize->add_control('business_card_resume_single_post_image_dimension',array(
		'type' => 'radio',
		'label'	=> __('Single Post Featured Image Dimension','business-card-resume'),
		'choices' => array(
			 'default' => __('Default','business-card-resume'),
			 'custom' => __('Custom Image Size','business-card-resume'),
		 ),
		   'section'	=> 'business_card_resume_single_post_settings',
	 ));

	$wp_customize->add_setting( 'business_card_resume_single_post_image_custom_width', array(
		'default'=> '400',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_single_post_image_custom_width', array(
        'label'  => __('Featured Image Custom Width','business-card-resume'),
        'section'  => 'business_card_resume_single_post_settings',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 1000,
        ),
		'active_callback' => 'business_card_resume_single_post_image_dimension'
    )));

	$wp_customize->add_setting( 'business_card_resume_single_post_image_custom_height', array(
		'default'=> '400',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_single_post_image_custom_height', array(
        'label'  => __('Featured Image Custom Height','business-card-resume'),
        'section'  => 'business_card_resume_single_post_settings',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 1000,
        ),
		'active_callback' => 'business_card_resume_single_post_image_dimension'
    )));

	$wp_customize->add_setting( 'business_card_resume_single_post_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'business_card_resume_sanitize_float',
	) );
	$wp_customize->add_control( 'business_card_resume_single_post_img_border_radius', array(
		'label'       => esc_html__( 'Single Post Image Border Radius','business-card-resume' ),
		'section'     => 'business_card_resume_single_post_settings',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'business_card_resume_single_post_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'business_card_resume_sanitize_float',
	));
	$wp_customize->add_control('business_card_resume_single_post_img_box_shadow',array(
		'label' => esc_html__( 'Single Post Image Shadow','business-card-resume' ),
		'section' => 'business_card_resume_single_post_settings',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

	$wp_customize->add_setting('business_card_resume_single_post_nav',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_post_nav',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post Navigation','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

 	$wp_customize->add_setting( 'business_card_resume_single_post_prev_nav_text', array(
		'default' => __('Previous','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_single_post_prev_nav_text', array(
		'label' => esc_html__( 'Single Post Previous Nav text','business-card-resume' ),
		'section'     => 'business_card_resume_single_post_settings',
		'type'        => 'text',
		'settings'    => 'business_card_resume_single_post_prev_nav_text'
	) );

	$wp_customize->add_setting( 'business_card_resume_single_post_next_nav_text', array(
		'default' => __('Next','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_single_post_next_nav_text', array(
		'label' => esc_html__( 'Single Post Next Nav text','business-card-resume' ),
		'section'     => 'business_card_resume_single_post_settings',
		'type'        => 'text',
		'settings'    => 'business_card_resume_single_post_next_nav_text'
	) );

	$wp_customize->add_setting('business_card_resume_single_post_comment',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Single Post comment','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	$wp_customize->add_setting( 'business_card_resume_comment_width', array(
		'default'=> '100',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_comment_width', array(
		'label'  => __('Comment textarea width','business-card-resume'),
		'section'  => 'business_card_resume_single_post_settings',
		'description' => __('Measurement is in %.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 100,
		),
    )));

	$wp_customize->add_setting('business_card_resume_comment_title',array(
		'default' => __('Leave a Reply','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_comment_title',array(
		'type' => 'text',
		'label' => __('Comment form Title','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_comment_submit_text',array(
		'default' => __('Post Comment','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_comment_submit_text',array(
		'type' => 'text',
		'label' => __('Comment Submit Button Label','business-card-resume'),
		'section' => 'business_card_resume_single_post_settings'
	));

	// related post section 

	$wp_customize->add_section( 'business_card_resume_related_post_settings', array(
		'title' => __( 'Related Post Options', 'business-card-resume' ),
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting('business_card_resume_related_posts',array(
		'default' => true,
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_related_posts',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Related Posts','business-card-resume'),
		'section' => 'business_card_resume_related_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_related_post_date',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_related_post_date',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Related Post Date','business-card-resume'),
		'section' => 'business_card_resume_related_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_related_post_date_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_related_post_date_icon',array(
		'label'	=> __('Related Post Date Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_related_post_settings',
		'setting'	=> 'business_card_resume_related_post_date_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_related_post_author',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_related_post_author',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Related Post Author','business-card-resume'),
		'section' => 'business_card_resume_related_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_related_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_related_post_author_icon',array(
		'label'	=> __('Related Post Author Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_related_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_related_post_comment_no',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_related_post_comment_no',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Related Post Comments','business-card-resume'),
		'section' => 'business_card_resume_related_post_settings'
	));

	$wp_customize->add_setting('business_card_resume_related_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_related_post_comment_icon',array(
		'label'	=> __('Related Post Comments Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_related_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_related_post_time',array(
       'default' => 'true',
       'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_related_post_time',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Post Time','business-card-resume'),
       'section' => 'business_card_resume_related_post_settings'
    ));

    $wp_customize->add_setting('business_card_resume_related_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_related_post_time_icon',array(
		'label'	=> __('Related Post Time Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_related_post_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_related_post_metabox_seperator',array(
		'default' => '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_related_post_metabox_seperator',array(
		'type' => 'text',
		'label' => __('Metabox Seperator','business-card-resume'),
		'description' => __('Ex: "/", "|", "-", ...','business-card-resume'),
		'section' => 'business_card_resume_related_post_settings'
	));
 
	$wp_customize->add_setting('business_card_resume_show_related_posts_image',array(
		'default' => true,
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_show_related_posts_image',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Related Posts image','business-card-resume'),
		'section' => 'business_card_resume_related_post_settings'
	));

    $wp_customize->add_setting( 'business_card_resume_related_posts_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_related_posts_image_shadow', array(
		'label'  => __('Related Posts Image Shadow','business-card-resume'),
		'section'  => 'business_card_resume_related_post_settings',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		),
    )));

	$wp_customize->add_setting( 'business_card_resume_related_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_related_image_border_radius', array(
        'label'  => __('Related Image Border Radius','business-card-resume'),
        'section'  => 'business_card_resume_related_post_settings',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

	$wp_customize->add_setting('business_card_resume_related_posts_title',array(
		'default' => __('You May Also Like','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_related_posts_title',array(
		'type' => 'text',
		'label' => __('Related Posts Title','business-card-resume'),
		'section' => 'business_card_resume_related_post_settings'
	));

 	$wp_customize->add_setting( 'business_card_resume_related_post_count', array(
		'default' => 3,
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	) );
	$wp_customize->add_control( 'business_card_resume_related_post_count', array(
		'label' => esc_html__( 'Related Posts Count','business-card-resume' ),
		'section' => 'business_card_resume_related_post_settings',
		'type' => 'number',
		'settings' => 'business_card_resume_related_post_count',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 6,
		),
	) );

	$wp_customize->add_setting( 'business_card_resume_post_shown_by', array(
		'default' => 'categories',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control( 'business_card_resume_post_shown_by', array(
		'section' => 'business_card_resume_related_post_settings',
		'type' => 'radio',
		'label' => __( 'Related Posts must be shown:', 'business-card-resume' ),
		'choices'		=> array(
		   'categories'  => __('By Categories', 'business-card-resume'),
		   'tags' => __( 'By Tags', 'business-card-resume' ),
	)));

	$wp_customize->add_setting( 'business_card_resume_related_post_excerpt_number',array(
		'default' => 20,
		'sanitize_callback' => 'absint'
	));

	$wp_customize->add_control('business_card_resume_related_post_excerpt_number',	array(
		'label' => esc_html__( 'Related Posts Content Limit','business-card-resume' ),
		'section' => 'business_card_resume_related_post_settings',
		'type'    => 'number',
	 	'settings' => 'business_card_resume_related_post_excerpt_number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'business_card_resume_related_post_excerpt_suffix', array(
		'default'   => '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_related_post_excerpt_suffix', array(
		'label'       => esc_html__('Related Post Excerpt Suffix','business-card-resume' ),
		'section'     => 'business_card_resume_related_post_settings',
		'type'        => 'text',
		'settings'    => 'business_card_resume_related_post_excerpt_suffix',
		'active_callback' => 'business_card_resume_excerpt_enabled'
	) );

	$wp_customize->add_setting('business_card_resume_related_post_display_type',array(
		'default' => 'blocks',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_related_post_display_type', array(
		'type' => 'select',
		'label' => __('Related Post Display Type', 'business-card-resume' ),
		'section' => 'business_card_resume_related_post_settings',
		'choices' => array(
		   'blocks' => __('Blocks','business-card-resume'),
		   'without blocks' => __('Without Blocks','business-card-resume'),
		),
    ));

	$wp_customize->add_setting('business_card_resume_related_button_text',array(
		'default'=> esc_html__('Read Full','business-card-resume'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_related_button_text',array(
		'label'	=> esc_html__('Add Button Text','business-card-resume'),
		'input_attrs' => array(
        'placeholder' => esc_html__( 'Read Full', 'business-card-resume' ),
        ),
		'section'=> 'business_card_resume_related_post_settings',
		'type'=> 'text'
	));

	// Grid layout setting
	$wp_customize->add_section( 'business_card_resume_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'business-card-resume' ),
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting('business_card_resume_grid_post_sidebar_layout',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
 	));
	$wp_customize->add_control('business_card_resume_grid_post_sidebar_layout', array(
		'type' => 'select',
		'label' => __( 'Grid Sidebar Layout', 'business-card-resume' ),
		'section' => 'business_card_resume_grid_layout_settings',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','business-card-resume'),
		   'Right Sidebar' => __('Right Sidebar','business-card-resume'),
		   'One Column' => __('One Column','business-card-resume')
		),
 	));

	$wp_customize->add_setting('business_card_resume_grid_columns', array(
		'default'           => '3',
		'sanitize_callback' => 'business_card_resume_sanitize_choices',
		'transport'         => 'refresh',
	));
	$wp_customize->add_control('business_card_resume_grid_columns', array(
		'label'    => __('Grid Columns', 'business-card-resume'),
		'section'  => 'business_card_resume_grid_layout_settings', 
		'type'     => 'select',
		'choices'  => array(
			'2' => __('2 Columns', 'business-card-resume'),
			'3' => __('3 Columns', 'business-card-resume'),
			'4' => __('4 Columns', 'business-card-resume'),
		),
	));

	$wp_customize->add_setting('business_card_resume_grid_button_text',array(
		'default'=> esc_html__('Read Full','business-card-resume'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','business-card-resume'),
		'input_attrs' => array(
        'placeholder' => esc_html__( 'Read Full', 'business-card-resume' ),
      ),
		'section'=> 'business_card_resume_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('business_card_resume_grid_post_content',array(
    	'default' => 'Excerpt Content',
     	'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_grid_post_content',array(
		'type' => 'radio',
		'label' => __('Grid Post Content Type','business-card-resume'),
		'section' => 'business_card_resume_grid_layout_settings',
		'choices' => array(
		   'No Content' => __('No Content','business-card-resume'),
		   'Full Content' => __('Full Content','business-card-resume'),
		   'Excerpt Content' => __('Excerpt Content','business-card-resume'),
		),
	) );

 	$wp_customize->add_setting( 'business_card_resume_grid_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'absint'
	) );
	$wp_customize->add_control( 'business_card_resume_grid_excerpt_number', array(
		'label' => esc_html__( 'Grid Post Excerpt Number (Max 50)','business-card-resume' ),
		'section' => 'business_card_resume_grid_layout_settings',
		'type'    => 'number',
		'settings' => 'business_card_resume_grid_excerpt_number',
		'input_attrs' => array(
			'step'  => 1,
			'min'   => 0,
			'max'   => 50,
		),
		'active_callback' => 'business_card_resume_grid_excerpt_enabled'
	) );

	$wp_customize->add_setting('business_card_resume_grid_excerpt_suffix',array(
		'default'=> '...',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','business-card-resume'),
		'section'=> 'business_card_resume_grid_layout_settings',
		'type'=> 'text',
		'settings'    => 'business_card_resume_grid_excerpt_suffix',
		'active_callback' => 'business_card_resume_grid_excerpt_enabled'
	));

	$wp_customize->add_setting('business_card_resume_grid_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
    ));
	$wp_customize->add_control('business_card_resume_grid_alignment', array(
        'type' => 'select',
        'label' => __( 'Grid Post Alignment', 'business-card-resume' ),
        'section' => 'business_card_resume_grid_layout_settings',
        'choices' => array(
            'left' => __('Left Align','business-card-resume'),
            'right' => __('Right Align','business-card-resume'),
            'center' => __('Center Align','business-card-resume')
        ),
    ));
	
	$wp_customize->add_setting('business_card_resume_grid_post_metabox_seperator',array(
       'default' => '|',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('business_card_resume_grid_post_metabox_seperator',array(
       'type' => 'text',
       'label' => __('Metabox Seperator','business-card-resume'),
       'description' => __('Ex: "/", "|", "-", ...','business-card-resume'),
       'section' => 'business_card_resume_grid_layout_settings'
    ));

    $wp_customize->add_setting('business_card_resume_grid_post_date',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_grid_post_date',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Date ','business-card-resume'),
		'section' => 'business_card_resume_grid_layout_settings'
	));

	$wp_customize->add_setting('business_card_resume_grid_post_date_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_grid_post_date_icon',array(
		'label'	=> __('Grid Post Date Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_grid_layout_settings',
		'setting'	=> 'business_card_resume_grid_post_date_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_grid_post_author',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_grid_post_author',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Author','business-card-resume'),
		'section' => 'business_card_resume_grid_layout_settings'
	));

	$wp_customize->add_setting('business_card_resume_grid_post_author_icon',array(
		'default'	=> 'fa fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_grid_post_author_icon',array(
		'label'	=> __('Grid Post Author Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_grid_layout_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_grid_post_comment',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_grid_post_comment',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Comments','business-card-resume'),
		'section' => 'business_card_resume_grid_layout_settings'
	));

	$wp_customize->add_setting('business_card_resume_grid_post_comment_icon',array(
		'default'	=> 'fas fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_grid_post_comment_icon',array(
		'label'	=> __('Grid Post Comments Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_grid_layout_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_grid_post_time',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_grid_post_time',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Time','business-card-resume'),
		'section' => 'business_card_resume_grid_layout_settings'
	));

	$wp_customize->add_setting('business_card_resume_grid_post_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_grid_post_time_icon',array(
		'label'	=> __('Grid Post Time Icon','business-card-resume'),
		'transport' => 'refresh',
		'section'	=> 'business_card_resume_grid_layout_settings',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('business_card_resume_grid_post_featured_image',array(
       'default' => 'true',
       'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_grid_post_featured_image',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Featured Image','business-card-resume'),
       'section' => 'business_card_resume_grid_layout_settings'
    ));

	$wp_customize->add_setting( 'business_card_resume_grid_posts_image_shadow', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_grid_posts_image_shadow', array(
		'label'  => __('Grid Post Image Shadow','business-card-resume'),
		'section'  => 'business_card_resume_grid_layout_settings',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		),
    )));

	$wp_customize->add_setting( 'business_card_resume_grid_post_image_border_radius', array(
		'default'=> '0',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_grid_post_image_border_radius', array(
        'label'  => __('Grid Post Image Border Radius','business-card-resume'),
        'section'  => 'business_card_resume_grid_layout_settings',
        'description' => __('Measurement is in pixel.','business-card-resume'),
        'input_attrs' => array(
            'min' => 0,
            'max' => 50,
        ),
    )));

	$wp_customize->add_setting('business_card_resume_grid_post_display_type',array(
		'default' => 'blocks',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_grid_post_display_type', array(
		'type' => 'select',
		'label' => __( 'Grid Post Display Type', 'business-card-resume' ),
		'section' => 'business_card_resume_grid_layout_settings',
		'choices' => array(
		   'blocks' => __('Blocks','business-card-resume'),
		   'without blocks' => __('Without Blocks','business-card-resume'),
		),
    ));

	// Button option
	$wp_customize->add_section( 'business_card_resume_button_options', array(
		'title' =>  __( 'Button Options', 'business-card-resume' ),
		'panel' => 'business_card_resume_panel_id',
	));

 	$wp_customize->add_setting( 'business_card_resume_blog_button_text', array(
		'default'   => __('Read Full','business-card-resume' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'business_card_resume_blog_button_text', array(
		'label'       => esc_html__( 'Blog Post Button Label','business-card-resume' ),
		'section'     => 'business_card_resume_button_options',
		'type'        => 'text',
		'settings'    => 'business_card_resume_blog_button_text'
	) );

	$wp_customize->add_setting('business_card_resume_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('business_card_resume_button_padding',array(
		'label'	=> esc_html__('Button Padding','business-card-resume'),
		'section'=> 'business_card_resume_button_options',
		'active_callback' => 'business_card_resume_button_enabled'
	));

	$wp_customize->add_setting('business_card_resume_top_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_top_button_padding',array(
		'label'	=> __('Top','business-card-resume'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'business_card_resume_button_options',
		'type'=> 'number',
		'active_callback' => 'business_card_resume_button_enabled'
	));

	$wp_customize->add_setting('business_card_resume_bottom_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_bottom_button_padding',array(
		'label'	=> __('Bottom','business-card-resume'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'business_card_resume_button_options',
		'type'=> 'number',
		'active_callback' => 'business_card_resume_button_enabled'
	));

	$wp_customize->add_setting('business_card_resume_left_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_left_button_padding',array(
		'label'	=> __('Left','business-card-resume'),
		'input_attrs' => array(
      	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'business_card_resume_button_options',
		'type'=> 'number',
		'active_callback' => 'business_card_resume_button_enabled'
	));

	$wp_customize->add_setting('business_card_resume_right_button_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_right_button_padding',array(
		'label'	=> __('Right','business-card-resume'),
		'input_attrs' => array(
         'step'             => 1,
			'min'              => 0,
			'max'              => 50,
 	 	),
		'section'=> 'business_card_resume_button_options',
		'type'=> 'number',
		'active_callback' => 'business_card_resume_button_enabled'
	));

	$wp_customize->add_setting( 'business_card_resume_button_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_button_border_radius', array(
      'label'  => __('Border Radius','business-card-resume'),
      'section'  => 'business_card_resume_button_options',
      'description' => __('Measurement is in pixel.','business-card-resume'),
      'input_attrs' => array(
          'min' => 0,
          'max' => 50,
      ),
		'active_callback' => 'business_card_resume_button_enabled'
 	)));

	// letter spacing button
	$wp_customize->add_setting( 'business_card_resume_button_letter_spacing',array(
		'default' => '0.3',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_button_letter_spacing', array(
		'label'  => __('Button Letter Spacing','business-card-resume'),
		'section'  => 'business_card_resume_button_options',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));

 	// font size button
 	$wp_customize->add_setting( 'business_card_resume_button_font_size',array(
		'default' => '12',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_button_font_size', array(
		'label'  => __('Button Font Size','business-card-resume'),
		'section'  => 'business_card_resume_button_options',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));

 	$wp_customize->add_setting('business_card_resume_button_font_weight',array(
    'default' => '700',
    'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_button_font_weight',array(
	    'type' => 'select',
	    'label' => __('Button Font Weight','business-card-resume'),
	    'section' => 'business_card_resume_button_options',
	    'choices' => array(
	       '100' => __('100','business-card-resume'),
	       '200' => __('200','business-card-resume'),
	       '300' => __('300','business-card-resume'),
	       '400' => __('400','business-card-resume'),
	       '500' => __('500','business-card-resume'),
	       '600' => __('600','business-card-resume'),
	       '700' => __('700','business-card-resume'),
	       '800' => __('800','business-card-resume'),
	       '900' => __('900','business-card-resume'),
	    ),
	) );

	$wp_customize->add_setting('business_card_resume_button_text_transform',array(
        'default' => 'Uppercase',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
  	));
  	$wp_customize->add_control('business_card_resume_button_text_transform',array(
        'type' => 'select',
        'label' => __('Button Text transform','business-card-resume'),
        'section' => 'business_card_resume_button_options',
        'choices' => array(
            'uppercase' => __('Uppercase','business-card-resume'),
            'capitalize' => __('Capitalize','business-card-resume'),
            'lowercase' => __('lowercase','business-card-resume'),
        ),
  	) );

	$wp_customize->add_setting('business_card_resume_button_hover_effect',array(
        'default' => '',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
    ));
	$wp_customize->add_control('business_card_resume_button_hover_effect', array(
        'type' => 'select',
        'label' => __( 'Button Hover Effect', 'business-card-resume' ),
        'section' => 'business_card_resume_button_options',
        'choices' => array(
			'pulse'     => __( 'Pulse', 'business-card-resume' ),
			'rubberBand'=> __( 'RubberBand', 'business-card-resume' ),
			'swing'     => __( 'Swing', 'business-card-resume' ),
			'tada'      => __( 'Tada', 'business-card-resume' ),
			'jello'     => __( 'Jello', 'business-card-resume' ),
			'disable'   => __( 'Disabled', 'business-card-resume' )
        ),
    ));

    //Sidebar setting
	$wp_customize->add_section( 'business_card_resume_sidebar_options', array(
    	'title'   => __( 'Sidebar options', 'business-card-resume'),
		'priority'   => null,
		'panel' => 'business_card_resume_panel_id'
	) );

	$wp_customize->add_setting('business_card_resume_single_page_layout',array(
		'default' => 'One Column',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
 	));
	$wp_customize->add_control('business_card_resume_single_page_layout', array(
		'type' => 'select',
		'label' => __( 'Single Page Layout', 'business-card-resume' ),
		'section' => 'business_card_resume_sidebar_options',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','business-card-resume'),
		   'Right Sidebar' => __('Right Sidebar','business-card-resume'),
		   'One Column' => __('One Column','business-card-resume')
		),
 	));

 	$wp_customize->add_setting('business_card_resume_single_post_layout',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
 	));
	$wp_customize->add_control('business_card_resume_single_post_layout', array(
		'type' => 'select',
		'label' => __( 'Single Post Layout', 'business-card-resume' ),
		'section' => 'business_card_resume_sidebar_options',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','business-card-resume'),
		   'Right Sidebar' => __('Right Sidebar','business-card-resume'),
		   'One Column' => __('One Column','business-card-resume')
		),
 	));

	$wp_customize->add_setting( 'business_card_resume_sticky_sidebar', array(
		'default'           => false,
		'sanitize_callback' => 'business_card_resume_sanitize_checkbox',
	) );
	
	$wp_customize->add_control( 'business_card_resume_sticky_sidebar', array(
		'type'     => 'checkbox',
		'label'    => __( 'Enable Sticky Sidebar', 'business-card-resume' ),
		'section'  => 'business_card_resume_sidebar_options',
	) );

    //Advance Options
	$wp_customize->add_section( 'business_card_resume_advance_options', array(
    	'title' => __( 'Advance Options', 'business-card-resume' ),
		'priority'   => null,
		'panel' => 'business_card_resume_panel_id'
	));
    
    // animation
	$wp_customize->add_setting( 'business_card_resume_sidebar_animation',array(
	    'default' => true,
    	'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
  	) );
	$wp_customize->add_control('business_card_resume_sidebar_animation',array(
		'type' => 'checkbox',
		'label' => __( 'Show / Hide Animations','business-card-resume' ),
		'section' => 'business_card_resume_advance_options'
	));

	$wp_customize->add_setting('business_card_resume_preloader',array(
		'default' => false,
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_preloader',array(
		'type' => 'checkbox',
		'label' => __('Enable / Disable Preloader','business-card-resume'),
		'section' => 'business_card_resume_advance_options'
	));

 	$wp_customize->add_setting( 'business_card_resume_preloader_color', array(
		'default' => '#333333',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_preloader_color', array(
  		'label' => __('Preloader Color', 'business-card-resume'),
		'section' => 'business_card_resume_advance_options',
		'settings' => 'business_card_resume_preloader_color',
  	)));

  	$wp_customize->add_setting( 'business_card_resume_preloader_bg_color', array(
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_preloader_bg_color', array(
  		'label' => __('Preloader Background Color', 'business-card-resume'),
		'section' => 'business_card_resume_advance_options',
		'settings' => 'business_card_resume_preloader_bg_color',
  	)));

  	$wp_customize->add_setting('business_card_resume_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'business_card_resume_preloader_bg_img',array(
        'label' => __('Preloader Background Image','business-card-resume'),
        'section' => 'business_card_resume_advance_options'
	)));

  	$wp_customize->add_setting('business_card_resume_preloader_type',array(
		'default' => 'Square',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_preloader_type',array(
		'type' => 'radio',
		'label' => __('Preloader Type','business-card-resume'),
		'section' => 'business_card_resume_advance_options',
		'choices' => array(
		   'Square' => __('Square','business-card-resume'),
		   'Circle' => __('Circle','business-card-resume'),
		)
	) );

	$wp_customize->add_setting('business_card_resume_theme_layout_options',array(
		'default' => 'Default Theme',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_theme_layout_options',array(
		'type' => 'radio',
		'label' => __('Theme Layout','business-card-resume'),
		'section' => 'business_card_resume_advance_options',
		'choices' => array(
		   'Default Theme' => __('Default Theme','business-card-resume'),
		   'Container Theme' => __('Container Theme','business-card-resume'),
		   'Box Container Theme' => __('Box Container Theme','business-card-resume'),
		),
	) );

	$wp_customize->add_setting( 'business_card_resume_single_page_breadcrumb',array(
		'default' => true,
      	'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
    ) );
    $wp_customize->add_control('business_card_resume_single_page_breadcrumb',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Single Page Breadcrumb','business-card-resume' ),
        'section' => 'business_card_resume_advance_options'
    ));

	$wp_customize->add_setting('business_card_resume_single_page_breadcrumb_alignment',array(
    	'default' => 'Left',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_single_page_breadcrumb_alignment',array(
        'type' => 'radio',
        'label' => __('Breadcrumb Alignment','business-card-resume'),
        'section' => 'business_card_resume_advance_options',
        'choices' => array(
            'Center' => __('Center','business-card-resume'),
            'Left' => __('Left','business-card-resume'),
            'Right' => __('Right','business-card-resume'),
        ),
	) );

    $wp_customize->add_setting('business_card_resume_breadcrumb_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_breadcrumb_color', array(
		'label'    => __('Breadcrumb Color', 'business-card-resume'),
		'section'  => 'business_card_resume_advance_options',
	)));

	$wp_customize->add_setting('business_card_resume_breadcrumb_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_breadcrumb_background_color', array(
		'label'    => __('Breadcrumb Background Color', 'business-card-resume'),
		'section'  => 'business_card_resume_advance_options',
	)));

	$wp_customize->add_setting('business_card_resume_breadcrumb_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_breadcrumb_hover_color', array(
		'label'    => __('Breadcrumb Hover Color', 'business-card-resume'),
		'section'  => 'business_card_resume_advance_options',
	)));

	$wp_customize->add_setting('business_card_resume_breadcrumb_hover_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_breadcrumb_hover_bg_color', array(
		'label'    => __('Breadcrumb Hover Background Color', 'business-card-resume'),
		'section'  => 'business_card_resume_advance_options',
	)));

	$wp_customize->add_setting('business_card_resume_breadcrumb_border_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_breadcrumb_border_color', array(
		'label'    => __('Breadcrumb border Color', 'business-card-resume'),
		'section'  => 'business_card_resume_advance_options',
	)));

	//404 Page Option
	$wp_customize->add_section('business_card_resume_404_settings',array(
		'title'	=> __('404 Page & Search Result Settings','business-card-resume'),
		'priority'	=> null,
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting('business_card_resume_404_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_404_title',array(
		'label'	=> __('404 Title','business-card-resume'),
		'section'	=> 'business_card_resume_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('business_card_resume_404_button_label',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_404_button_label',array(
		'label'	=> __('404 button Label','business-card-resume'),
		'section'	=> 'business_card_resume_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('business_card_resume_search_result_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_search_result_title',array(
		'label'	=> __('No Search Result Title','business-card-resume'),
		'section'	=> 'business_card_resume_404_settings',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('business_card_resume_search_result_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_search_result_text',array(
		'label'	=> __('No Search Result Text','business-card-resume'),
		'section'	=> 'business_card_resume_404_settings',
		'type'		=> 'text'
	));	

	//Responsive Settings
	$wp_customize->add_section('business_card_resume_responsive_options',array(
		'title'	=> __('Responsive Options','business-card-resume'),
		'panel' => 'business_card_resume_panel_id'
	));

	$wp_customize->add_setting('business_card_resume_menu_open_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
     	$wp_customize,'business_card_resume_menu_open_icon',array(
		'label'	=> __('Menu Open Icon','business-card-resume'),
		'section' => 'business_card_resume_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('business_card_resume_mobile_menu_label',array(
		'default' => __('Menu','business-card-resume'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_mobile_menu_label',array(
		'type' => 'text',
		'label' => __('Mobile Menu Label','business-card-resume'),
		'section' => 'business_card_resume_responsive_options'
	));

	$wp_customize->add_setting('business_card_resume_menu_close_icon',array(
		'default'	=> 'fas fa-times-circle',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
     	$wp_customize,'business_card_resume_menu_close_icon',array(
		'label'	=> __('Menu Close Icon','business-card-resume'),
		'section' => 'business_card_resume_responsive_options',
		'type'	  => 'icon',
	)));

	$wp_customize->add_setting('business_card_resume_close_menu_label',array(
		'default' => __('Close Menu','business-card-resume'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_close_menu_label',array(
		'type' => 'text',
		'label' => __('Close Menu Label','business-card-resume'),
		'section' => 'business_card_resume_responsive_options'
	));

	//toggle button bg-color
    $wp_customize->add_setting( 'business_card_resume_toggle_button_bg_color_settings', array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'business_card_resume_toggle_button_bg_color_settings', array(
  		'label' => __('Toggle Button Bg Color', 'business-card-resume'),
	    'section' => 'business_card_resume_responsive_options',
	    'settings' => 'business_card_resume_toggle_button_bg_color_settings',
  	)));

	$wp_customize->add_setting('business_card_resume_sticky_header_responsive',array(
        'default' => false,
        'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_sticky_header_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Sticky Header','business-card-resume'),
      	'section' => 'business_card_resume_responsive_options',
	));

	$wp_customize->add_setting('business_card_resume_preloader_responsive',array(
        'default' => false,
        'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_preloader_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Preloader','business-card-resume'),
      	'section' => 'business_card_resume_responsive_options',
	));

	$wp_customize->add_setting('business_card_resume_banner_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_banner_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Slider','business-card-resume'),
      	'section' => 'business_card_resume_responsive_options',
	));

	$wp_customize->add_setting('business_card_resume_backtotop_responsive',array(
        'default' => true,
        'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_backtotop_responsive',array(
     	'type' => 'checkbox',
      	'label' => __('Enable Back to Top','business-card-resume'),
      	'section' => 'business_card_resume_responsive_options',
	));

	$wp_customize->add_setting( 'business_card_resume_sidebar_hide_show',array(
      'default' => true,
      'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_sidebar_hide_show',array(
      'type' => 'checkbox',
      'label' => esc_html__( 'Enable Sidebar','business-card-resume' ),
      'section' => 'business_card_resume_responsive_options'
    ));

    //Woocommerce Options
	$wp_customize->add_section('business_card_resume_woocommerce',array(
		'title'	=> __('WooCommerce Options','business-card-resume'),
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting('business_card_resume_shop_page_sidebar',array(
		'default' => false,
		'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_shop_page_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable Shop Page Sidebar','business-card-resume'),
		'section' => 'business_card_resume_woocommerce'
	));

	// shop page sidebar alignment
    $wp_customize->add_setting('business_card_resume_shop_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'business_card_resume_sanitize_choices',
	));
	$wp_customize->add_control('business_card_resume_shop_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Shop Page Layout', 'business-card-resume'),
		'section'        => 'business_card_resume_woocommerce',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'business-card-resume'),
			'Right Sidebar' => __('Right Sidebar', 'business-card-resume'),
		),
	));

	$wp_customize->add_setting('business_card_resume_shop_page_navigation',array(
		'default' => true,
		'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_shop_page_navigation',array(
		'type' => 'checkbox',
		'label' => __('Enable Shop Page Pagination','business-card-resume'),
		'section' => 'business_card_resume_woocommerce'
	));

	$wp_customize->add_setting('business_card_resume_single_product_sidebar',array(
		'default' => false,
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_product_sidebar',array(
		'type' => 'checkbox',
		'label' => __('Enable Single Product Page Sidebar','business-card-resume'),
		'section' => 'business_card_resume_woocommerce'
	));

	// Single product Page sidebar alignment
    $wp_customize->add_setting('business_card_resume_single_product_page_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'business_card_resume_sanitize_choices',
	));
	$wp_customize->add_control('business_card_resume_single_product_page_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Product Page Layout', 'business-card-resume'),
		'section'        => 'business_card_resume_woocommerce',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'business-card-resume'),
			'Right Sidebar' => __('Right Sidebar', 'business-card-resume'),
		),
	));

	$wp_customize->add_setting('business_card_resume_single_related_products',array(
		'default' => true,
		'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_single_related_products',array(
		'type' => 'checkbox',
		'label' => __('Enable Related Products','business-card-resume'),
		'section' => 'business_card_resume_woocommerce'
	));

 	$wp_customize->add_setting('business_card_resume_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_products_per_page',array(
		'label'	=> __('Products Per Page','business-card-resume'),
		'input_attrs' => array(
         	'step'             => 1,
			'min'              => 0,
			'max'              => 50,
     	),
		'section'=> 'business_card_resume_woocommerce',
		'type'=> 'number',
	));

	$wp_customize->add_setting('business_card_resume_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_products_per_row',array(
		'label'	=> __('Products Per Row','business-card-resume'),
		'choices' => array(
         '2' => '2',
			'3' => '3',
			'4' => '4',
     	),
		'section'=> 'business_card_resume_woocommerce',
		'type'=> 'select',
	));

	$wp_customize->add_setting('business_card_resume_product_border',array(
		'default' => true,
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_product_border',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide product border','business-card-resume'),
		'section' => 'business_card_resume_woocommerce',
	));

 	$wp_customize->add_setting('business_card_resume_product_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('business_card_resume_product_padding',array(
		'label'	=> esc_html__('Product Padding','business-card-resume'),
		'section'=> 'business_card_resume_woocommerce',
	));

	$wp_customize->add_setting( 'business_card_resume_product_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_top_padding', array(
		'label' => esc_html__( 'Top','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('business_card_resume_product_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_bottom_padding', array(
		'label' => esc_html__( 'Bottom','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('business_card_resume_product_left_padding',array(
		'default' => 10,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_left_padding', array(
		'label' => esc_html__( 'Left','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'business_card_resume_product_right_padding',array(
		'default' => 10,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_right_padding', array(
		'label' => esc_html__( 'Right','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => -1,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'business_card_resume_product_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_product_border_radius', array(
		'label'  => __('Product Border Radius','business-card-resume'),
		'section'  => 'business_card_resume_woocommerce',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
    )));

	$wp_customize->add_setting( 'business_card_resume_product_box_shadow',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_product_box_shadow', array(
		'label'  => __('Product Box Shadow','business-card-resume'),
		'section'  => 'business_card_resume_woocommerce',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
    )));		

	$wp_customize->add_setting('business_card_resume_product_button_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('business_card_resume_product_button_padding',array(
		'label'	=> esc_html__('Product Button Padding','business-card-resume'),
		'section'=> 'business_card_resume_woocommerce',
	));

	$wp_customize->add_setting( 'business_card_resume_product_button_top_padding',array(
		'default' => 10,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_button_top_padding', array(
		'label' => esc_html__( 'Top','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('business_card_resume_product_button_bottom_padding',array(
		'default' => 10,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_button_bottom_padding', array(
		'label' => esc_html__( 'Bottom','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('business_card_resume_product_button_left_padding',array(
		'default' => 12,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_button_left_padding', array(
		'label' => esc_html__( 'Left','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'business_card_resume_product_button_right_padding',array(
		'default' => 12,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_button_right_padding', array(
		'label' => esc_html__( 'Right','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'business_card_resume_product_button_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_product_button_border_radius', array(
		'label'  => __('Product Button Border Radius','business-card-resume'),
		'section'  => 'business_card_resume_woocommerce',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));

 	$wp_customize->add_setting('business_card_resume_product_sale_position',array(
     'default' => 'Right',
     'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_product_sale_position',array(
		'type' => 'radio',
		'label' => __('Product Sale Position','business-card-resume'),
		'section' => 'business_card_resume_woocommerce',
		'choices' => array(
		   'Left' => __('Left','business-card-resume'),
		   'Right' => __('Right','business-card-resume'),
		),
	) );

	$wp_customize->add_setting( 'business_card_resume_product_sale_font_size',array(
		'default' => '13',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_product_sale_font_size', array(
		'label'  => __('Product Sale Font Size','business-card-resume'),
		'section'  => 'business_card_resume_woocommerce',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));

 	$wp_customize->add_setting('business_card_resume_product_sale_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('business_card_resume_product_sale_padding',array(
		'label'	=> esc_html__('Product Sale Padding','business-card-resume'),
		'section'=> 'business_card_resume_woocommerce',
	));

	$wp_customize->add_setting( 'business_card_resume_product_sale_top_padding',array(
		'default' => 0,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_sale_top_padding', array(
		'label' => esc_html__( 'Top','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('business_card_resume_product_sale_bottom_padding',array(
		'default' => 0,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_sale_bottom_padding', array(
		'label' => esc_html__( 'Bottom','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('business_card_resume_product_sale_left_padding',array(
		'default' => 0,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_sale_left_padding', array(
		'label' => esc_html__( 'Left','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting('business_card_resume_product_sale_right_padding',array(
		'default' => 0,
		'sanitize_callback' => 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_product_sale_right_padding', array(
		'label' => esc_html__( 'Right','business-card-resume' ),
		'type' => 'number',
		'section' => 'business_card_resume_woocommerce',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'business_card_resume_product_sale_border_radius',array(
		'default' => '0',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_product_sale_border_radius', array(
		'label'  => __('Product Sale Border Radius','business-card-resume'),
		'section'  => 'business_card_resume_woocommerce',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
    )));
    
	//footer text
	$wp_customize->add_section('business_card_resume_footer_section',array(
		'title'	=> __('Footer Section','business-card-resume'),
		'panel' => 'business_card_resume_panel_id'
	));

	$wp_customize->add_setting('business_card_resume_hide_scroll',array(
		'default' => 'true',
		'sanitize_callback'	=> 'business_card_resume_sanitize_checkbox'
	));
	$wp_customize->add_control('business_card_resume_hide_scroll',array(
     	'type' => 'checkbox',
   	'label' => __('Show / Hide Back To Top','business-card-resume'),
   	'section' => 'business_card_resume_footer_section',
	));

	$wp_customize->add_setting('business_card_resume_back_to_top',array(
		'default' => 'Right',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_back_to_top',array(
		'type' => 'radio',
		'label' => __('Back to Top Alignment','business-card-resume'),
		'section' => 'business_card_resume_footer_section',
		'choices' => array(
		   'Left' => __('Left','business-card-resume'),
		   'Right' => __('Right','business-card-resume'),
		   'Center' => __('Center','business-card-resume'),
		),
	) );

	$wp_customize->add_setting('business_card_resume_back_to_top_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_back_to_top_color', array(
		'label'    => __('Back To Top Color', 'business-card-resume'),
		'section'  => 'business_card_resume_footer_section',
	)));

	$wp_customize->add_setting('business_card_resume_back_to_top_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_back_to_top_text_color', array(
		'label'    => __('Back To Top Text Color', 'business-card-resume'),
		'section'  => 'business_card_resume_footer_section',
	)));	

	$wp_customize->add_setting('business_card_resume_scroll_icon_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_scroll_icon_hover_color', array(
		'label'    => __('Back to Top Hover Color', 'business-card-resume'),
		'section'  => 'business_card_resume_footer_section',
	)));

	$wp_customize->add_setting( 'business_card_resume_footer_hide_show',array(
      'default' => 'true',
      'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_footer_hide_show',array(
    	'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Footer','business-card-resume' ),
      'section' => 'business_card_resume_footer_section'
    ));

	$wp_customize->add_setting('business_card_resume_footer_template',array(
		'default'	=> esc_html('business_card_resume-footer-one'),
		'sanitize_callback'	=> 'business_card_resume_sanitize_choices'	
	));
	$wp_customize->add_control('business_card_resume_footer_template',array(
		'label'	=> esc_html__('Footer style','business-card-resume'),
		'section'	=> 'business_card_resume_footer_section',
		'setting'	=> 'business_card_resume_footer_template',
		'type' => 'select',
		'choices' => array(
			'business_card_resume-footer-one' => esc_html__('Style 1', 'business-card-resume'),
			'business_card_resume-footer-two' => esc_html__('Style 2', 'business-card-resume'),
			'business_card_resume-footer-three' => esc_html__('Style 3', 'business-card-resume'),
			'business_card_resume-footer-four' => esc_html__('Style 4', 'business-card-resume'),
			'business_card_resume-footer-five' => esc_html__('Style 5', 'business-card-resume'),
			)
	));		

	$wp_customize->add_setting('business_card_resume_footer_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_footer_bg_color', array(
		'label'    => __('Footer Background Color', 'business-card-resume'),
		'section'  => 'business_card_resume_footer_section',
	)));

	$wp_customize->add_setting('business_card_resume_footer_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'business_card_resume_footer_bg_image',array(
		'label' => __('Footer Background Image','business-card-resume'),
		'section' => 'business_card_resume_footer_section'
	)));

	$wp_customize->add_setting('business_card_resume_footer_img_position',array(
		'default' => 'center center',
		'transport' => 'refresh',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_footer_img_position',array(
		  'type' => 'select',
		  'label' => __('Footer Image Position','business-card-resume'),
		  'section' => 'business_card_resume_footer_section',
		  'choices' 	=> array(
			  'left top' 		=> esc_html__( 'Top Left', 'business-card-resume' ),
			  'center top'   => esc_html__( 'Top', 'business-card-resume' ),
			  'right top'   => esc_html__( 'Top Right', 'business-card-resume' ),
			  'left center'   => esc_html__( 'Left', 'business-card-resume' ),
			  'center center'   => esc_html__( 'Center', 'business-card-resume' ),
			  'right center'   => esc_html__( 'Right', 'business-card-resume' ),
			  'left bottom'   => esc_html__( 'Bottom Left', 'business-card-resume' ),
			  'center bottom'   => esc_html__( 'Bottom', 'business-card-resume' ),
			  'right bottom'   => esc_html__( 'Bottom Right', 'business-card-resume' ),
		  ),
	));
	$wp_customize->add_setting('business_card_resume_footer_attatchment',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_footer_attatchment',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','business-card-resume'),
		'choices' => array(
            'fixed' => __('fixed','business-card-resume'),
            'scroll' => __('scroll','business-card-resume'),
        ),
		'section'=> 'business_card_resume_footer_section',
	));		

	// footer padding
	$wp_customize->add_setting('business_card_resume_footer_padding',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('business_card_resume_footer_padding',array(
		'label' => __('Footer Top Bottom Padding','business-card-resume'),
		'description' => __('Enter a value in pixels. Example:20px','business-card-resume'),
		'input_attrs' => array(
		  'placeholder' => __( '10px', 'business-card-resume' ),
		),
		'section'=> 'business_card_resume_footer_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('business_card_resume_footer_widget',array(
		'default'           => '4',
		'sanitize_callback' => 'business_card_resume_sanitize_choices',
	));
	$wp_customize->add_control('business_card_resume_footer_widget',array(
		'type'        => 'radio',
		'label'       => __('No. of Footer columns', 'business-card-resume'),
		'section'     => 'business_card_resume_footer_section',
		'description' => __('Select the number of footer columns and add your widgets in the footer.', 'business-card-resume'),
		'choices' => array(
		   '1'   => __('One column', 'business-card-resume'),
		   '2'  => __('Two columns', 'business-card-resume'),
		   '3' => __('Three columns', 'business-card-resume'),
		   '4' => __('Four columns', 'business-card-resume')
		),
	)); 

	$wp_customize->add_setting('business_card_resume_footer_text_tranform',array(
		'default' => 'Capitalize',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
 	));
 	$wp_customize->add_control('business_card_resume_footer_text_tranform',array(
		'type' => 'select',
		'label' => __('Footer Widgets Heading Text Transform','business-card-resume'),
		'section' => 'business_card_resume_footer_section',
		'choices' => array(
		   'Uppercase' => __('Uppercase','business-card-resume'),
		   'Lowercase' => __('Lowercase','business-card-resume'),
		   'Capitalize' => __('Capitalize','business-card-resume'),
		),
	) );	

	$wp_customize->add_setting('business_card_resume_widgets_heading_letter_spacing',array(
		'default'	=> '',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float',
	));	
	$wp_customize->add_control('business_card_resume_widgets_heading_letter_spacing',array(
		'label'	=> __('Footer Widgets Heading Letter Spacing','business-card-resume'),
		'section'	=> 'business_card_resume_footer_section',
		'type'		=> 'number'
	));		

	$wp_customize->add_setting('business_card_resume_widgets_heading_fontsize',array(
		'default'	=> 25,
		'sanitize_callback'	=> 'business_card_resume_sanitize_float',
	));	
	$wp_customize->add_control('business_card_resume_widgets_heading_fontsize',array(
		'label'	=> __('Footer Widgets Heading Font Size','business-card-resume'),
		'section'	=> 'business_card_resume_footer_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting('business_card_resume_widgets_heading_font_weight',array(
        'default' => '600',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
    ));
    $wp_customize->add_control('business_card_resume_widgets_heading_font_weight',array(
        'type' => 'select',
        'label' => __('Footer Widgets Heading Font Weight','business-card-resume'),
        'section' => 'business_card_resume_footer_section',
        'choices' => array(
            '100' => __('100','business-card-resume'),
            '200' => __('200','business-card-resume'),
            '300' => __('300','business-card-resume'),
            '400' => __('400','business-card-resume'),
            '500' => __('500','business-card-resume'),
            '600' => __('600','business-card-resume'),
            '700' => __('700','business-card-resume'),
            '800' => __('800','business-card-resume'),
            '900' => __('900','business-card-resume'),
        ),
	) );

	$wp_customize->add_setting('business_card_resume_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widgets Heading Alignment','business-card-resume'),
    'section' => 'business_card_resume_footer_section',
    'choices' => array(
    	'Left' => __('Left','business-card-resume'),
        'Center' => __('Center','business-card-resume'),
        'Right' => __('Right','business-card-resume')
      ),
	) );

	$wp_customize->add_setting('business_card_resume_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widgets Content Alignment','business-card-resume'),
    'section' => 'business_card_resume_footer_section',
    'choices' => array(
    	'Left' => __('Left','business-card-resume'),
        'Center' => __('Center','business-card-resume'),
        'Right' => __('Right','business-card-resume')
        ),
	) );

	$wp_customize->add_setting( 'business_card_resume_copyright_hide_show',array(
      'default' => 'true',
      'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_copyright_hide_show',array(
    	'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Copyright','business-card-resume' ),
      'section' => 'business_card_resume_footer_section'
    ));

	$wp_customize->add_setting('business_card_resume_copyright_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_copyright_bg_color', array(
		'label'    => __('Copyright Background Color', 'business-card-resume'),
		'section'  => 'business_card_resume_footer_section',
	)));

	$wp_customize->add_setting('business_card_resume_copyright_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_copyright_color', array(
		'label'    => __('Copyright Color', 'business-card-resume'),
		'section'  => 'business_card_resume_footer_section',
	)));

 	$wp_customize->add_setting('business_card_resume_copyright_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('business_card_resume_copyright_padding',array(
		'label'	=> esc_html__('Copyright Padding','business-card-resume'),
		'section'=> 'business_card_resume_footer_section',
	));

    $wp_customize->add_setting('business_card_resume_top_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_top_copyright_padding',array(
		'description'	=> __('Top','business-card-resume'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
     	),
		'section'=> 'business_card_resume_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('business_card_resume_bottom_copyright_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'business_card_resume_sanitize_float'
	));
	$wp_customize->add_control('business_card_resume_bottom_copyright_padding',array(
		'description'	=> __('Bottom','business-card-resume'),
		'input_attrs' => array(
         'step' => 1,
			'min' => 0,
			'max' => 50,
     	),
		'section'=> 'business_card_resume_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('business_card_resume_copyright_alignment',array(
		'default' => 'center',
		'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_copyright_alignment',array(
		'type' => 'radio',
		'label' => __('Copyright Alignment','business-card-resume'),
		'section' => 'business_card_resume_footer_section',
		'choices' => array(
		   'left' => __('Left','business-card-resume'),
		   'right' => __('Right','business-card-resume'),
		   'center' => __('Center','business-card-resume'),
		),
	) );

	$wp_customize->add_setting( 'business_card_resume_copyright_font_size', array(
		'default'=> '15',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( new Business_Card_Resume_WP_Customize_Range_Control( $wp_customize, 'business_card_resume_copyright_font_size', array(
		'label'  => __('Copyright Font Size','business-card-resume'),
		'section'  => 'business_card_resume_footer_section',
		'description' => __('Measurement is in pixel.','business-card-resume'),
		'input_attrs' => array(
		   'min' => 0,
		   'max' => 50,
		)
 	)));
	
	$wp_customize->add_setting('business_card_resume_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('business_card_resume_text',array(
		'label'	=> __('Copyright Text','business-card-resume'),
		'description'	=> __('Add some text for footer like copyright etc.','business-card-resume'),
		'section'	=> 'business_card_resume_footer_section',
		'type'		=> 'text'
	));	

	// Copyright Sticky //
	$wp_customize->add_setting( 'business_card_resume_copyright_sticky',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
    ) );
    $wp_customize->add_control('business_card_resume_copyright_sticky',array(
		'type' => 'checkbox',
      'label' => __('Show / Hide Sticky Copyright','business-card-resume'),
      'section' => 'business_card_resume_footer_section',
    ));

	//Footer Social Media
	$wp_customize->add_section('business_card_resume_footer_social_media',array(
		'title'	=> __('Footer Social Media','business-card-resume'),
		'priority' => null,
		'panel' => 'business_card_resume_panel_id',
	));

	$wp_customize->add_setting( 'business_card_resume_footer_social_media_hide_show',array(
      'default' => false,
      'sanitize_callback' => 'business_card_resume_sanitize_checkbox'
    ));
    $wp_customize->add_control('business_card_resume_footer_social_media_hide_show',array(
    	'type' => 'checkbox',
      'label' => esc_html__( 'Show / Hide Social Icon','business-card-resume' ),
      'section' => 'business_card_resume_footer_social_media'
    ));		

	$wp_customize->add_setting('business_card_resume_footer_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_footer_facebook_url',array(
		'label'	=> __('Add Facebook URL','business-card-resume'),
		'section' => 'business_card_resume_footer_social_media',
		'setting' => 'business_card_resume_footer_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_footer_facebook_icon',array(
        'default'   => 'fab fa-facebook-f',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_footer_facebook_icon',array(
        'label' => __('Facebook Icon','business-card-resume'),
        'section' => 'business_card_resume_footer_social_media',
        'type'    => 'icon',
    )));	

	$wp_customize->add_setting('business_card_resume_footer_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_footer_twitter_url',array(
		'label'	=> __('Add Twitter URL','business-card-resume'),
		'section' => 'business_card_resume_footer_social_media',
		'setting' => 'business_card_resume_footer_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_footer_twitter_icon',array(
        'default'   => 'fab fa-twitter',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_footer_twitter_icon',array(
        'label' => __('Twitter Icon','business-card-resume'),
        'section' => 'business_card_resume_footer_social_media',
        'type'    => 'icon',
    )));

	$wp_customize->add_setting('business_card_resume_footer_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_footer_instagram_url',array(
		'label'	=> __('Add Instagram URL','business-card-resume'),
		'section' => 'business_card_resume_footer_social_media',
		'setting' => 'business_card_resume_footer_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_footer_insta_icon',array(
        'default'   => 'fab fa-instagram',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_footer_insta_icon',array(
        'label' => __('Instagram Icon','business-card-resume'),
        'section' => 'business_card_resume_footer_social_media',
        'type'    => 'icon',
    )));	

	$wp_customize->add_setting('business_card_resume_footer_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('business_card_resume_footer_linkedin_url',array(
		'label'	=> __('Add Linkedin URL','business-card-resume'),
		'section' => 'business_card_resume_footer_social_media',
		'setting' => 'business_card_resume_footer_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('business_card_resume_footer_linkdin_icon',array(
        'default'   => 'fab fa-linkedin-in',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control(new Business_Card_Resume_Icon_Selector(
        $wp_customize,'business_card_resume_footer_linkdin_icon',array(
        'label' => __('Linkedin Icon','business-card-resume'),
        'section' => 'business_card_resume_footer_social_media',
        'type'    => 'icon',
    )));	

	$wp_customize->add_setting('business_card_resume_footer_icon_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'business_card_resume_footer_icon_color', array(
		'label'    => __('Icon Color', 'business-card-resume'),
		'section'  => 'business_card_resume_footer_social_media',
	)));




	$wp_customize->add_setting('business_card_resume_footer_icon_alignment',array(
    	'default' => 'Center',
        'sanitize_callback' => 'business_card_resume_sanitize_choices'
	));
	$wp_customize->add_control('business_card_resume_footer_icon_alignment',array(
        'type' => 'radio',
        'label' => __('Icon Alignment','business-card-resume'),
        'section' => 'business_card_resume_footer_social_media',
        'choices' => array(
            'Center' => __('Center','business-card-resume'),
            'Left' => __('Left','business-card-resume'),
            'Right' => __('Right','business-card-resume'),
        ),
	) );

	$wp_customize->add_setting( 'business_card_resume_footer_icon_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'business_card_resume_sanitize_float',
	) );
	$wp_customize->add_control( 'business_card_resume_footer_icon_font_size', array(
		'label' => __( 'Icon Font Size','business-card-resume' ),
		'section'     => 'business_card_resume_footer_social_media',
		'type'        => 'number',
		'input_attrs' => array(
			'step' => 1,
			'min' => 0,
			'max' => 50,
		),
	) );

	//Reset All Settings
	$wp_customize->add_section( 'business_card_resume_reset_section', array(
        'title'    => __( 'Reset Theme Settings', 'business-card-resume' ),
        'priority'	=> null,
		'panel' => 'business_card_resume_panel_id',
    ) );

	//Reset Demo Import
    $wp_customize->add_setting( 'business_card_resume_reset_demo_import_settings', array(
        'sanitize_callback' => 'sanitize_text_field',
    ) );

    $wp_customize->add_control('business_card_resume_reset_demo_import_settings',array(
            'label'   => __( 'Reset Demo Import', 'business-card-resume' ),
            'section' => 'business_card_resume_reset_section',
            'type'    => 'button',
            'input_attrs' => array(
                'onclick' => 'ResetDemoSettings()',
            ),
    ));

	//Reset Global Color
	$wp_customize->add_setting('business_card_resume_reset_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	
	$wp_customize->add_control('business_card_resume_reset_color', array(
		'type'    => 'button',
		'label'   => __('Reset Global Color', 'business-card-resume'),
		'section' => 'business_card_resume_reset_section',
		'input_attrs' => array(
			'onclick' => 'ResetGlobalColor()',
		),
	));
}
add_action( 'customize_register', 'business_card_resume_customize_register' );	

load_template( ABSPATH . 'wp-includes/class-wp-customize-control.php' );

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

class Business_Card_Resume_Image_Radio_Control extends WP_Customize_Control {

    public function render_content() {
 
        if (empty($this->choices))
            return;
 
        $name = '_customize-radio-' . $this->id;
        ?>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <ul class="controls" id='business-card-resume-img-container'>
            <?php
            foreach ($this->choices as $value => $label) :
                $class = ($this->value() == $value) ? 'business-card-resume-radio-img-selected business-card-resume-radio-img-img' : 'business-card-resume-radio-img-img';
                ?>
                <li style="display: inline;">
                    <label>
                        <input <?php $this->link(); ?>style = 'display:none' type="radio" value="<?php echo esc_attr($value); ?>" name="<?php echo esc_attr($name); ?>" <?php
                          	$this->link();
                          	checked($this->value(), $value);
                          	?> />
                        <img role="img" src='<?php echo esc_url($label); ?>' class='<?php echo esc_attr($class); ?>' />
                    </label>
                </li>
                <?php
            endforeach;
            ?>
        </ul>
        <?php
    } 
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Business_Card_Resume_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Business_Card_Resume_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Business_Card_Resume_Customize_Section_Pro(
			$manager,
			'business_card_resume_pro_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Business Card Resume Pro', 'business-card-resume' ),
					'pro_text' => esc_html__( 'Get Pro', 'business-card-resume' ),
					'pro_url'  => esc_url('https://www.themesglance.com/products/business-card-wordpress-theme')
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new Business_Card_Resume_Customize_Section_Pro(
			$manager,
			'business_card_resume_doc_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Business Card Resume Doc', 'business-card-resume' ),
					'pro_text' => esc_html__( 'Help Doc', 'business-card-resume' ),
					'pro_url'  => esc_url(BUSINESS_CARD_RESUME_THEMESGLANCE_FREE_THEME_DOC)
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new Business_Card_Resume_Customize_Section_Pro(
			$manager,
			'business_card_resume_demo_link',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Business Card Demo', 'business-card-resume' ),
					'pro_text' => esc_html__( 'Live Demo', 'business-card-resume' ),
					'pro_url'  => esc_url(BUSINESS_CARD_RESUME_THEMESGLANCE_LIVE_DEMO)
				)
			)
		);

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'business-card-resume-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'business-card-resume-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Business_Card_Resume_Customize::get_instance();