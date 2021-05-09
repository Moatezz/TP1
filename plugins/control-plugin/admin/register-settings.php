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
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'bg_color', 'label' => 'Choose a background color']
    );
    add_settings_field(
        'font_color',
        'Font Color',
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'font_color', 'label' => 'Choose a font color']
    );
    add_settings_field(
        'animated_text_color',
        'Animated Text Color',
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'font_color', 'label' => 'Choose a font color']
    );
    add_settings_field(
        'text_speed',
        'Text Speed',
        'controlpanel_bnb_range_cb',
        'controlpanel',
        'controlpanel_section_bnb',
        ['id' => 'text_speed', 'label' => 'min: 10s | max: 100s']
    );
    add_settings_field(
        'pseudo_name',
        'Pseudo name',
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'pseudo_name', 'label' => 'Choose a pseudo name to display']
    );
    add_settings_field(
        'pseudo_font_color',
        'Font Color',
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'pseudo_font_color', 'label' => 'Choose a font color']
    );
    add_settings_field(
        'description',
        'Description',
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'description', 'label' => 'Add your own description']
    );
    add_settings_field(
        'avatar_font_color',
        'Font Color',
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'avatar_font_color', 'label' => 'Choose a font color for description']
    );
    add_settings_field(
        'avatar',
        'Avatar',
        'controlpanel_bnb_color_cb',
        'controlpanel',
        'conrolpanel_section_author_desc',
        ['id' => 'avatar', 'label' => 'Add your own Avatar']
    );
}

add_action('admin_init', 'controlpanel_register_settings');
