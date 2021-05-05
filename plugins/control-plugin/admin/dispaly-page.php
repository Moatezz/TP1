<?php

// Exit if accessed directely
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
        <button onclick="trigger()">Click</button>
    </div>

    <script>
        function trigger() {

        }
    </script>
<?php };
/*

        <form action="options.php" method="post">
            <?php
            //output security fields
            settings_fields('controlpanel_options');
            //output setting sections
            do_settings_sections('control-panel');
            // submitting form
            submit_button();
            ?>

        </form>
*/

?>