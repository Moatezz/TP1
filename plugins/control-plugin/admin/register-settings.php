<?php

function controlpanel_register_settings()
{
    register_setting(
        'controlpanel_options',
        'controlpanel_options'
    );
}
add_action('admin_init', 'controlpanel_register_settings');
