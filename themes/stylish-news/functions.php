<?php 
/**
 * The template for functions 
 *
 * @version    0.1.40
 * @package    stylish-news
 * @author     Zidithemes
 * @copyright  Copyright (C) 2021 zidithemes.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * 
 */


if ( ! defined( 'ABSPATH' ) ) { exit; }


require get_template_directory() . "/inc/stylish-news-layout-customizer.php";
require get_template_directory() . "/inc/stylish-news-options.php";
require get_template_directory() . "/inc/stylish-news-adm-style-options.php";
require get_template_directory() . "/inc/stylish-news-customizer-pro-btn.php";

function stylish_news_setup(){


	// ADD THEME SUPPORT
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support('woocommerce');

	//EDITOR STYLE
	add_editor_style('editor-style.css');

	register_nav_menus(
	    array(
	      'primary-menu' => esc_attr__( 'Primary Menu', 'stylish-news' ),
	    )
	  );


	load_theme_textdomain( 'stylish-news' );

	// SET CONTENT WIDTH
	if ( ! isset( $content_width ) ) $content_width = 600;

}

add_action('after_setup_theme', 'stylish_news_setup');

// Load styles
function stylish_news_load_styles_scripts(){
	// NOTE:   SOME OF THESE SCRIPTS ARE HOSTED ON A CDN AND ARE NOT STORED LOCALLY... SO THIS THEME MAY NOT RENDER PROPERLY IF YOU ARE NOT CONNECTED TO THE INTERNET
	
		wp_enqueue_style( 'stylish-news-style', get_template_directory_uri() . '/style.css');

		wp_enqueue_style( 'stylish-news-google-noto-font', 'https://fonts.googleapis.com/css?family=Noto+Sans');

		wp_enqueue_script('stylish-news-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js' );
		
		wp_enqueue_script('stylish-news-onejs-script', get_template_directory_uri() . '/js/zidi-one.js', array('jquery'), '1.0.0', true );
		
		if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); 
	
}

add_action('wp_enqueue_scripts', 'stylish_news_load_styles_scripts');


//EDITOR STYLE
function stylish_news_pro_block_styles() {

	wp_enqueue_style( 'stylish-news-pro-editor-google-font', 'https://fonts.googleapis.com/css?family=Noto+Sans');

	wp_enqueue_style( 'stylish-news-pro-editor-styles', get_template_directory_uri() . '/editor-style.css' );

}

add_action( 'enqueue_block_editor_assets', 'stylish_news_pro_block_styles' );



function stylish_news_pingback_wrap(){

		if ( is_singular() && pings_open() ) {
			echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
		}

}
add_action( 'wp_head', 'stylish_news_pingback_wrap');



// Creating the sidebar
function stylish_news_menu_init() {


register_sidebar(
		array(
                'name' 			=> esc_html__('Sidebar Widgets', 'stylish-news'),
                'id'    		=> 'sidebar_id',
                'class'       	=> '',
				'description' 	=> esc_html__('Add sidebar widgets here', 'stylish-news'),
				'before_widget' => '<div class="sidebar-items">',
				'after_widget' 	=> '</div>',
				'before_title' 	=> '<h2>',
				'after_title' 	=> '</h2>',
	));

	register_sidebar(array(
                'name' 			=> esc_html__('Main Footer', 'stylish-news'),
                'id'    		=> 'main_footer',
                'class' 		=> '',
				'description' 	=> esc_html__('Add widgets here', 'stylish-news'),
				'before_widget' => '<li>',
				'after_widget' 	=> '</li>',
				'before_title' 	=> '<h2>',
				'after_title' 	=> '</h2>',
	));
	

}
add_action('widgets_init', 'stylish_news_menu_init');

// this increases or decreaes the length of the excerpt on the index page
function stylish_news_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}
	return 20;
}
add_filter( 'excerpt_length', 'stylish_news_excerpt_length', 999 );

function stylish_news_excerpt_more( $more ) {
    //return 'More';
    return ' <a class="read-more" href="'. esc_url(get_permalink( get_the_ID() ) ) . '">' . __('Read More', 'stylish-news') . '</a>';
}
add_filter( 'excerpt_more', 'stylish_news_excerpt_more' );



if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}


/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function stylish_news_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'stylish_news_skip_link_focus_fix' );


