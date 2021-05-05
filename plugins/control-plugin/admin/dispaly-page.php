<?php

if (!defined('ABSPATH')) {
    exit;
}
function controlpanel_display_page()
{
    if (!current_user_can('manage_options')) return;
}
?>
<div class="cp-wrapper">
    <p>something</p>
</div>