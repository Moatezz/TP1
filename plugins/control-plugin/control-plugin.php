<?php

/**
 * Plugin Name: Control Plugin
 * Autor: Moatezz Chabane
 * Text Domain: controlpanel
 */

// Exit if accessed directely
if (!defined('ABSPATH')) {

    exit;
}
// REQUIRING DEPENDENCIES
if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'admin/dispaly-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/register-settings.php';
    require_once plugin_dir_path(__FILE__) . 'admin/callbacks.php';
}
// DEFAULT OPTIONS
function controlpanel_options_default()
{
    return array(
        //Breaking news bar defaults
        'bg_color' => 'red',
        'static_font_color' => 'white',
        'animated_font_color' => 'white',
        'text_speed' => 30,


        //Author description defaults
        'pseudo_name' => '',
        'pseudo_font_color' => 'black',
        'description' => '',
        'desc_font_color' => 'black',
        'avatar' => 's',
    );
}
