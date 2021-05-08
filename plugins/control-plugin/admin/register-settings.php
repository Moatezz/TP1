<?php

function controlpanel_register_settings()
{
    register_setting(
        'controlpanel_options',
        'controlpanel_options',
        'controlpanel_vaildate_options'
    );
    add_settings_section(
        'controlpanel_section_bnb',
        'Breaking News Bar',
        'controlpanel_cb_bnb',
        'controlpanel'
    );
    add_settings_section(
        'conrolpanel_section_author_desc',
        'Author Description',
        'controlpanel_cb_author_desc',
        'controlpanel'
    );
    add_settings_field(
        'bg_color',
        'Backgroud Color',
        'control_panel_bnb_bgcolor_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'bg_color', 'label' => 'choose a background color:']
    );
    add_settings_field(
        'font_color',
        'Font Color',
        'control_panel_bnb_fontcolor_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'font_color', 'label' => 'choose a font color:']
    );
}
add_action('admin_init', 'controlpanel_register_settings');
