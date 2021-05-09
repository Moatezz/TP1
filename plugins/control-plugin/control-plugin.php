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

if (is_admin()) {
    require_once plugin_dir_path(__FILE__) . 'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__) . 'admin/dispaly-page.php';
    require_once plugin_dir_path(__FILE__) . 'admin/register-settings.php';
    require_once plugin_dir_path(__FILE__) . 'admin/callbacks.php';
}

function controlpanel_options_default()
{
    return array(
        //Breaking news bar defaults
        'bg_color' => 'red',
        'bnb_font_color' => 'white',
        'text_speed' => 30,
        //Author description defaults
        'pseudo_font_color' => 'black',
        'desc_font_color' => 'black'
    );
}
//var_dump(controlpanel_options_default());
