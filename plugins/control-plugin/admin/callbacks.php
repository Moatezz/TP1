<?php
if (!defined('ABSPATH')) {

    exit;
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
    $id = isset($args['id']) ? $args['id'] : '';
    $label = isset($args['label']) ? $args['label'] : '';
    $value = isset($options['id']) ? sanitize_text_field($options[$id]) : '';

    echo '<label for=" controlpanel_options_' . $id . '">' . $label . '</label> <br />';
    echo '<input id="controlpanel_options_' . $id . '" name="controlpanel_options_[' . $id . ']"
    type="text" value="' . $value . '">';
}
