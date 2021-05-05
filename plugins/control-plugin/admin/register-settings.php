<?php

function controlpanel_register_settings()
{
    register_setting(
        'controlpanel_options',
        'controlpanel_options'
    );
    add_settings_section(
        'conrolpanel_section_bnb',
        'Breaking News Bar',
        'controlpanel_cb_bnb',
        'control-panel'
    );
}
add_action('admin_init', 'controlpanel_register_settings');
