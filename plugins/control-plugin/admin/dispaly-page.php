<?php

// Exit if accessed  directely
if (!defined('ABSPATH')) {

    exit;
}


function controlpanel_display_page()
{
    // Check if user is authorised for access

    if (!current_user_can('manage_options')) return;
?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="post">
            <?php
            //output fields
            settings_fields('controlpanel_options');
            //output setting sections
            do_settings_sections('controlpanel');
            // submitting form
            submit_button();
            ?>

        </form>
    </div>

<?php };
