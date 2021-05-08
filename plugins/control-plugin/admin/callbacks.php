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
    echo 'anydhing';
}
function controlpanel_cb_author_desc()
{
    echo 'anydhing';
}
function control_panel_bnb_bgcolor_cb($args)
{
    $options = get_option('controlpanel_options', controlpanel_options_default());

    $id    = isset($args['id'])    ? $args['id']    : '';
    $label = isset($args['label']) ? $args['label'] : '';

    $value = isset($options[$id]) ? sanitize_text_field($options[$id]) : '';
    var_dump($options['bgcolor_bnb']);

    echo '<input id="controlpanel_options_' . $id . '" name="controlpanel_options[' . $id . ']" type="text" size="40" value="' . $value . '"><br />';
    echo '<label for="controlpanel_options_' . $id . '">' . $label . '</label>';
}
