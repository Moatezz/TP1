<?php


function stylish_news_layout_customizer_settings( $wp_customize ){


	//ADD PANEL
	$wp_customize->add_panel('stylish_news_site_layout_option_panel',
		array(
			'title'      => esc_html__('Stylish News - Customize Layout', 'stylish-news'),
			'priority'   => 2,
			'capability' => 'edit_theme_options',
		)
	);

	//BEGIN ADVERT BOX SECTION
	$wp_customize->add_section('stylish_news_header_box_section', array(
		'title' => __('Stylish News Theme - Logo and Advert Section', 'stylish-news'),
		'priority' => 10,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	$wp_customize->add_setting('stylish_news_header_box_display_settings', array(
	    'default' => __('none', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'stylish_news_header_box_display_control', array(
	    'label'    => __('Display Logo and Ad Section', 'stylish-news'),
	    'section'  => 'stylish_news_header_box_section',
	    'settings' => 'stylish_news_header_box_display_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes', 'stylish-news'),
	    				'none' 	=> __('No', 'stylish-news'),
	    			   )
	)));

	
	//LOGO LINK COLOR
	$wp_customize->add_setting('stylish_news_header_box_logo_link_color_settings', array(
	    'default' => __('#353535', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_header_box_logo_link_color_control', array(
	    'label'    => __('Logo Text Color', 'stylish-news'),
	    'section'  => 'stylish_news_header_box_section',
	    'settings' => 'stylish_news_header_box_logo_link_color_settings',
	)));


	/* BEGIN AD SECTION */

	/* END AD SECTION */


	//BEGIN NAVIGATION BACKGROUND COLOR SECTION
	$wp_customize->add_section('stylish_news_navbar_section', array(
		'title' => __('Stylish News Theme - Navbar BG Color', 'stylish-news'),
		'priority' => 10,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	
	//NAVBAR SECTION BACKGROUND COLOR
	$wp_customize->add_setting('stylish_news_navbar_section_bg_color_settings', array(
	    'default' => __('#353535', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_navbar_section_bg_color_control', array(
	    'label'    => __('Navbar Background Color', 'stylish-news'),
	    'section'  => 'stylish_news_navbar_section',
	    'settings' => 'stylish_news_navbar_section_bg_color_settings',
	)));

	//NAVBAR SECTION TEXT COLOR
	$wp_customize->add_setting('stylish_news_navbar_section_text_color_settings', array(
	    'default' => __('#ffffff', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_navbar_section_text_color_control', array(
	    'label'    => __('Navbar Text Color', 'stylish-news'),
	    'section'  => 'stylish_news_navbar_section',
	    'settings' => 'stylish_news_navbar_section_text_color_settings',
	)));

	//Stylish News INDEX SECTION CLASS NAME
	$wp_customize->add_section('stylish_news_index_class_name_section', array(
		'title' => __('Stylish News - Change Index Posts Style', 'stylish-news'),
		'priority' => 7,
		'panel'	=> 'stylish_news_site_layout_option_panel',
	));

	
	$wp_customize->add_setting('stylish_news_index_class_name_settings', array(
	    'default' => __('stylish-news-index-two', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'stylish_news_index_class_name_display_control', array(
	    'label'    => __('Change Style', 'stylish-news'),
	    'section'  => 'stylish_news_index_class_name_section',
	    'settings' => 'stylish_news_index_class_name_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'stylish-news-index' 		=> __('List Layout - Right Sidebar', 'stylish-news'),
	    				'stylish-news-index-two' 	=> __('List Layout (Two Columns) - Right Sidebar', 'stylish-news'),
	    			   )
	)));


	//BEGIN MAGAZINE FEATURED SECTION
	$wp_customize->add_section('stylish_news_feature_section', array(
		'title' => __('Stylish News - Featured Section', 'stylish-news'),
		'priority' => 8,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	$wp_customize->add_setting('stylish_news_feature_display_settings', array(
	    'default' => __('block', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'stylish_news_feature_display_control', array(
	    'label'    => __('Display Featured Section', 'stylish-news'),
	    'section'  => 'stylish_news_feature_section',
	    'settings' => 'stylish_news_feature_display_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes', 'stylish-news'),
	    				'none' 	=> __('No', 'stylish-news'),
	    			   )
	)));

		//CHANGE STYLE FEATURE SECTION
	$wp_customize->add_setting('stylish_news_feature_change_style_settings', array(
	    'default' => __('stylish-news-feature', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'stylish_news_feature_change_style_control', array(
	    'label'    => __('Change Style', 'stylish-news'),
	    'section'  => 'stylish_news_feature_section',
	    'settings' => 'stylish_news_feature_change_style_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'stylish-news-feature' 		=> __('Style 1', 'stylish-news'),
	    				'stylish-news-feature-two' 	=> __('Style 2 - ( 3 Columns )', 'stylish-news'),
	    			   )
	)));

	//BEGIN MAGAZINE STACK MAG SECTION
	$wp_customize->add_section('stylish_news_stack_mag_section', array(
		'title' => __('Stylish News - Stack Mag Section', 'stylish-news'),
		'priority' => 9,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	$wp_customize->add_setting('stylish_news_stack_mag_display_settings', array(
	    'default' => __('block', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'stylish_news_stack_mag_display_control', array(
	    'label'    => __('Display Stack Mag Section', 'stylish-news'),
	    'section'  => 'stylish_news_stack_mag_section',
	    'settings' => 'stylish_news_stack_mag_display_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes', 'stylish-news'),
	    				'none' 	=> __('No', 'stylish-news'),
	    			   )
	)));


	//BEGIN Stylish News READ MORE BACKGROUND COLOR SECTION
	$wp_customize->add_section('stylish_news_readmore_section', array(
		'title' => __('Stylish News Theme - Read More BG Color', 'stylish-news'),
		'priority' => 11,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	
	//Stylish News READ MORE SECTION BACKGROUND COLOR
	$wp_customize->add_setting('stylish_news_readmore_bg_color_settings', array(
	    'default' => __('#ffffff', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_readmore_bg_color_control', array(
	    'label'    => __('Read More Background Color', 'stylish-news'),
	    'section'  => 'stylish_news_readmore_section',
	    'settings' => 'stylish_news_readmore_bg_color_settings',
	)));
	
	//Stylish News READ MORE SECTION BACKGROUND COLOR
	$wp_customize->add_setting('stylish_news_readmore_text_color_settings', array(
	    'default' => __('#424242', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_readmore_text_color_control', array(
	    'label'    => __('Read More Text Color', 'stylish-news'),
	    'section'  => 'stylish_news_readmore_section',
	    'settings' => 'stylish_news_readmore_text_color_settings',
	)));

	//BEGIN SIDEBAR BACKGROUND COLOR SECTION
	$wp_customize->add_section('stylish_news_sidebar_section', array(
		'title' => __('Stylish News Theme - Sidebar Header BG Color', 'stylish-news'),
		'priority' => 11,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	
	//SIDEBAR SECTION BACKGROUND COLOR
	$wp_customize->add_setting('stylish_news_sidebar_header_bg_color_settings', array(
	    'default' => __('#ffffff', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_sidebar_header_bg_color_control', array(
	    'label'    => __('Sidebar Header Background Color', 'stylish-news'),
	    'section'  => 'stylish_news_sidebar_section',
	    'settings' => 'stylish_news_sidebar_header_bg_color_settings',
	)));

		//SIDEBAR SECTION HEADER TEXT COLOR
	$wp_customize->add_setting('stylish_news_sidebar_header_title_color_settings', array(
	    'default' => __('#353535', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_sidebar_header_text_color_control', array(
	    'label'    => __('Sidebar Header Text Color', 'stylish-news'),
	    'section'  => 'stylish_news_sidebar_section',
	    'settings' => 'stylish_news_sidebar_header_title_color_settings',
	)));

	//BEGIN Stylish News PAGINATION BACKGROUND COLOR SECTION
	$wp_customize->add_section('stylish_news_pagination_section', array(
		'title' => __('Stylish News Theme - Pagination BG Color', 'stylish-news'),
		'priority' => 11,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	
	//Stylish News PAGINATION SECTION BACKGROUND COLOR
	$wp_customize->add_setting('stylish_news_pagination_bg_color_settings', array(
	    'default' => __('#353535', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_pagination_bg_color_control', array(
	    'label'    => __('Page Numbers Background Color', 'stylish-news'),
	    'section'  => 'stylish_news_pagination_section',
	    'settings' => 'stylish_news_pagination_bg_color_settings',
	)));


	//BEGIN Stylish News SEARCH BUTTON SIDEBAR BACKGROUND COLOR SECTION
	$wp_customize->add_section('stylish_news_search_btn_sidebar_section', array(
		'title' => __('Stylish News Theme - Search Button BG Color', 'stylish-news'),
		'priority' => 11,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	
	//Stylish News SEARCH BUTTON SIDEBAR SECTION BACKGROUND COLOR
	$wp_customize->add_setting('stylish_news_search_btn_sidebar_bg_color_settings', array(
	    'default' => __('#353535', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_search_btn_sidebar_bg_color_control', array(
	    'label'    => __('Search Button Sidebar Background Color', 'stylish-news'),
	    'section'  => 'stylish_news_search_btn_sidebar_section',
	    'settings' => 'stylish_news_search_btn_sidebar_bg_color_settings',
	)));



	//BEGIN FOOTER BACKGROUND COLOR SECTION
	$wp_customize->add_section('stylish_news_footer_section', array(
		'title' => __('Stylish News Theme - Footer BG Color', 'stylish-news'),
		'priority' => 11,
		'panel' => 'stylish_news_site_layout_option_panel',
	));

	
	//FOOTER SECTION BACKGROUND COLOR
	$wp_customize->add_setting('stylish_news_footer_bg_color_settings', array(
	    'default' => __('#353535', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_footer_bg_color_control', array(
	    'label'    => __('footer Header Background Color', 'stylish-news'),
	    'section'  => 'stylish_news_footer_section',
	    'settings' => 'stylish_news_footer_bg_color_settings',
	)));


	//FOOTER SECTION LINK TEXT COLOR
	$wp_customize->add_setting('stylish_news_footer_text_link_color_settings', array(
	    'default' => __('#fff', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_footer_text_link_color_control', array(
	    'label'    => __('Footer Link Text Color', 'stylish-news'),
	    'section'  => 'stylish_news_footer_section',
	    'settings' => 'stylish_news_footer_text_link_color_settings',
	)));

	//FOOTER SECTION HEADER TITLE COLOR
	$wp_customize->add_setting('stylish_news_footer_header_text_color_settings', array(
	    'default' => __('#fff', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'stylish_news_footer_header_text_color_control', array(
	    'label'    => __('Footer Header Title Text Color', 'stylish-news'),
	    'section'  => 'stylish_news_footer_section',
	    'settings' => 'stylish_news_footer_header_text_color_settings',
	)));

	//FOOTER SECTION DISPLAY HEADER TITLE
	$wp_customize->add_setting('stylish_news_footer_display_header_text_settings', array(
	    'default' => __('block', 'stylish-news'),
	    'sanitize_callback'  => 'sanitize_text_field',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'stylish_news_footer_display_header_text_control', array(
	    'label'    => __('Footer Display Header Title', 'stylish-news'),
	    'section'  => 'stylish_news_footer_section',
	    'settings' => 'stylish_news_footer_display_header_text_settings',
	    'type'     	=> 'select',
	    'choices'	=> array(
	    				'block' => __('Yes', 'stylish-news'),
	    				'none' 	=> __('No', 'stylish-news'),
	    			   )
	)));

	$wp_customize->get_setting('stylish_news_header_box_display_settings')->transport 				= 	'postMessage';
	$wp_customize->get_setting('stylish_news_header_box_logo_link_color_settings')->transport 		= 	'postMessage';
	$wp_customize->get_setting('stylish_news_navbar_section_bg_color_settings')->transport 			= 	'postMessage';
	$wp_customize->get_setting('stylish_news_navbar_section_text_color_settings')->transport 		= 	'postMessage';
    $wp_customize->get_setting('stylish_news_readmore_bg_color_settings')->transport 				= 	'postMessage';
    $wp_customize->get_setting('stylish_news_readmore_text_color_settings')->transport 				= 	'postMessage';
    $wp_customize->get_setting('stylish_news_sidebar_header_bg_color_settings')->transport 			= 	'postMessage';
    $wp_customize->get_setting('stylish_news_sidebar_header_title_color_settings')->transport 		=	'postMessage';
    $wp_customize->get_setting('stylish_news_search_btn_sidebar_bg_color_settings')->transport 		= 	'postMessage';
    $wp_customize->get_setting('stylish_news_pagination_bg_color_settings')->transport 				= 	'postMessage';
    $wp_customize->get_setting('stylish_news_footer_bg_color_settings')->transport 					= 	'postMessage';
    $wp_customize->get_setting('stylish_news_footer_text_link_color_settings')->transport 			= 	'postMessage';
    $wp_customize->get_setting('stylish_news_footer_header_text_color_settings')->transport 		= 	'postMessage';
    $wp_customize->get_setting('stylish_news_footer_display_header_text_settings')->transport 		= 	'postMessage';


}


//CSS
function stylish_news_layout_custom_css(){
	?>

<style type="text/css">

.header-box .ad-box-img {
	display: <?php echo esc_html(get_theme_mod('stylish_news_ad_img_display_settings')); ?>
}

.header-box {
	display: <?php echo esc_html(get_theme_mod('stylish_news_header_box_display_settings')); ?>;
}

.header-box .logo .logo-text-link {
	color: <?php echo esc_html(get_theme_mod('stylish_news_header_box_logo_link_color_settings')); ?>;
}

.nav-outer {
	background: <?php echo esc_html(get_theme_mod('stylish_news_navbar_section_bg_color_settings')); ?>;
}

.theme-nav ul li a {
	color: <?php echo esc_html(get_theme_mod('stylish_news_navbar_section_text_color_settings')); ?>;
}

.stylish-news-index .blog-2-col-inner .items .items-inner .img-box .details-box .details-box-inner .btn-case a {
	background: <?php echo esc_html(get_theme_mod('stylish_news_readmore_bg_color_settings')); ?>;
	color: <?php echo esc_html( get_theme_mod('stylish_news_readmore_text_color_settings')); ?>;
}

.stylish-news-no-feature {
	display: <?php echo esc_html(get_theme_mod('stylish_news_feature_display_settings')); ?>;
}

.stylish-news-no-diff {
	display: <?php echo esc_html(get_theme_mod('stylish_news_stack_mag_display_settings')); ?>;
}

.sidebar .sidebar-inner .sidebar-items h2 {
	background: <?php echo esc_html(get_theme_mod('stylish_news_sidebar_header_bg_color_settings')); ?>;
	color: <?php echo esc_html(get_theme_mod('stylish_news_sidebar_header_title_color_settings')); ?>;
}

.sidebar .sidebar-inner .sidebar-items .searchform div #searchsubmit {
	background: <?php echo esc_html(get_theme_mod('stylish_news_search_btn_sidebar_bg_color_settings')); ?>;
}

.page-numbers {
	background: <?php echo esc_html(get_theme_mod('stylish_news_pagination_bg_color_settings')); ?>;	
}

.footer-4-col {
	background: <?php echo esc_html(get_theme_mod('stylish_news_footer_bg_color_settings')); ?>; 
}

.footer-4-col .inner .footer .footer-inner .footer-items a {
	color: <?php echo esc_html(get_theme_mod('stylish_news_footer_text_link_color_settings')); ?>;
}

.footer-4-col .inner .footer .footer-inner .footer-items li h2 {
	display: <?php echo esc_html(get_theme_mod('stylish_news_footer_display_header_text_settings')); ?>;
	color: <?php echo esc_html(get_theme_mod('stylish_news_footer_header_text_color_settings')); ?>;
}

</style>


	<?php

}


function stylish_news_layout_customizer_live_preview()
{
	wp_enqueue_script( 
		  'stylish-news-site-layout-customizer',			
		  get_template_directory_uri().'/js/stylish-news-layout-customizer.js',
		  array( 'jquery','customize-preview' ),	
		  '',						
		  true						
	);
}




add_action('wp_head', 'stylish_news_layout_custom_css');
add_action('customize_register', 'stylish_news_layout_customizer_settings');
add_action( 'customize_preview_init', 'stylish_news_layout_customizer_live_preview' );


?>