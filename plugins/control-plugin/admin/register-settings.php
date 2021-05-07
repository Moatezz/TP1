<?php

function controlpanel_register_settings()
{
    register_setting(
        'controlpanel_options',
        'controlpanel_options'
    );
    add_settings_section(
        'controlpanel_section_bnb',
        'Breaking News Bar',
        'controlpanel_cb_bnb',
        'control-panel'
    );
    add_settings_section(
        'conrolpanel_section_author_desc',
        'Author Description',
        'controlpanel_cb_author_desc',
        'control-panel'
    );
    add_settings_field(
        'bgcolor_bnb',
        'bgcolor',
        'control_panel_bnb_color_cb',
        'control-panel',
        'controlpanel_section_bnb',
        ['id' => 'bgcolor_bnb', 'label' => 'choose a background color:']
    );
}
add_action('admin_init', 'controlpanel_register_settings');
