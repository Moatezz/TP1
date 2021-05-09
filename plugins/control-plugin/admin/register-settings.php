<?php

function controlpanel_register_settings()
{
    //SETTINGS
    register_setting(
        'controlpanel_options',
        'controlpanel_options',
    );
    //SECTIONS
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
    //BREAKING NEWS BAR FIELDS
    add_settings_field(
        'bg_color',
        'Backgroud Color',
        'controlpanel_color_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'bg_color', 'label' => 'Choose a background color']
    );
    add_settings_field(
        'static_font_color',
        'Font Color',
        'controlpanel_color_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'bnb_font_color', 'label' => 'Choose a font color']
    );
    add_settings_field(
        'animated_font_color',
        'Animated Text Color',
        'controlpanel_color_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'font_color', 'label' => 'Choose a font color']
    );
    add_settings_field(
        'text_speed',
        'Text Speed',
        'controlpanel_range_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'text_speed', 'label' => 'min: 10s | max: 100s']
    );
    //AUTHOR DESCRIPTION FIELDS
    add_settings_field(
        'pseudo_name',
        'Pseudo name',
        'controlpanel_text_field_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'pseudo_name', 'label' => 'Choose a pseudo name to display']
    );
    add_settings_field(
        'pseudo_font_color',
        'Font Color',
        'controlpanel_color_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'pseudo_font_color', 'label' => 'Choose a font color']
    );
    add_settings_field(
        'description',
        'Description',
        'controlpanel_text_area_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'description', 'label' => 'Add your own description']
    );
    add_settings_field(
        'desc_font_color',
        'Font Color',
        'controlpanel_color_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'desc_font_color', 'label' => 'Choose a font color for description']
    );
    add_settings_field(
        'avatar_url',
        'Avatar URL',
        'controlpanel_text_field_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'Avatar_url', 'label' => 'Add your own Avatar URL']
    );
}

add_action('admin_init', 'controlpanel_register_settings');
