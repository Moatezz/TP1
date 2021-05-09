<?php
// Exit if accessed directely
if (!defined('ABSPATH')) {

    exit;
}
// ADDING MENU
function controlpanel_toplevel_menu()
{
    add_menu_page(
        'Control Panel',
        'Controls',
        'manage_options',
        'controlpanel',
        'controlpanel_display_page',
        'dashicons-admin-generic',
        null
    );
}

add_action('admin_menu', 'controlpanel_toplevel_menu');
