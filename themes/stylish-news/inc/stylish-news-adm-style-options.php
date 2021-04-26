<?php

if (!function_exists('stylish_news_admin_style')) {
	function stylish_news_admin_style($hook) {
		//admin style
		if ('appearance_page_stylish_news_theme_info_options' === $hook) {
			wp_enqueue_style('stylish-news-admin-script-style', get_template_directory_uri() . '/css/stylish-news-admin.css');
		}
	}
}
add_action('admin_enqueue_scripts', 'stylish_news_admin_style');
