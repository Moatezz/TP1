<?php
if (!defined('ABSPATH')) {

    exit;
}
function controlpanel_vaildate_options($input)
{
    return $input;
}
function controlpanel_cb_bnb()
{
    echo 'Here you can adjust multiple settings for the Breaking News Bar';
}
function controlpanel_cb_author_desc()
{
    echo 'Here you can adjust multiple settings for the Author Description';
}
function controlpanel_color_cb($args)
{
    $options = get_option('controlpanel_options', controlpanel_options_default());

    $id    = isset($args['id'])    ? $args['id']    : '';
    $label = isset($args['label']) ? $args['label'] : '';
    $value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';


    echo '<input id="controlpanel_options_' . $id . '" name="controlpanel_options[' . $id . ']" type="color" value="' . $value . '"><br />';
    echo '<label for="controlpanel_options_' . $id . '" class="controlpanel-label" style="opacity: 0.5; font-size: smaller">' . $label . '</label>';
}
function controlpanel_range_cb($args)
{

    $options = get_option('controlpanel_options', controlpanel_options_default());

    $id    = isset($args['id'])    ? $args['id']    : '';
    $label = isset($args['label']) ? $args['label'] : '';
    $value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';
    //var_dump($id);

    echo '<input id="controlpanel_options_' . $id . '" name="controlpanel_options[' . $id . ']" type="range" min="10" max="100" value="' . $value . '"><br />';
    echo '<label for="controlpanel_options_' . $id . '" class="controlpanel-label" style="opacity: 0.5; font-size: smaller">' . $label . '</label>';
}
function controlpanel_text_field_cb($args)
{

    $options = get_option('controlpanel_options', controlpanel_options_default());

    $id    = isset($args['id'])    ? $args['id']    : '';
    $label = isset($args['label']) ? $args['label'] : '';
    $value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';
    //var_dump($id);

    echo '<input id="controlpanel_options_' . $id . '" name="controlpanel_options[' . $id . ']" type="text" value="' . $value . '"><br />';
    echo '<label for="controlpanel_options_' . $id . '" class="controlpanel-label" style="opacity: 0.5; font-size: smaller">' . $label . '</label>';
}
