<?php

/**
 * Plugin Name: Control Plugin
 * Autor: Moatezz Chabane
 * Text Domain: control-panel
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
