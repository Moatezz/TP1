<?php
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
    $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
// Breaking News bar hook
function breaking_news_bar()
{
    do_action('breaking_news_bar');
}


// bnb test function
function bnb_test()
{
?>
    <!-- START Breaking News Bar -->
    <style>
        @keyframes horizontalText {
            to {
                transform: translateX(-100%);
            }
        }
    </style>
    <?php
    $options = get_option('controlpanel_options', controlpanel_options_default());
    echo '<div class="bnb-container" style="background-color: ' . $options['bg_color'] . '">';
    echo '<div class="bnb-text-static-container" style="background-color: ' . $options['bg_color'] . '">';
    echo '<p class="bnb-text-static" style="color: ' . $options['static_font_color'] . '">BREAKING NEWS</p>';



    echo '</div>';
    echo '<div class="bnb-text" style="animation: horizontalText ' . $options['text_speed'] . 's linear infinite;" >';
    ?>
    <?php
    //Setting infinite post titles with the -1 value  
    $args = array(
        'numberposts' => -1
    );
    // Using get_posts to query all post titles
    $posts_list = get_posts($args);
    // duming() is the function responsable to wrap up every post_title when it is being mapped.
    function dumping($target)
    {
        $options = get_option('controlpanel_options', controlpanel_options_default());
        echo '<div class="bnb-text-target"  style="color: ' . $options['animated_font_color'] . '">' . $target->post_title . '</div>';
    }
    //Mapping every post list.
    array_map('dumping', $posts_list)
    ?>
    </div>
    </div>
    <!-- END Breaking News Bar -->
<?php
}
add_action('breaking_news_bar', 'bnb_test');

// Author Description hook
function author_description()
{
    do_action('author_description');
}

// author description test function
function author_desc_test()
{
?>
    <!-- Author Description Area START HERE -->
    <div class="post-desc">
        <div class='post-desc-divider'></div>
        <div class="post-desc-flex-container">
            <?php
            $options = get_option('controlpanel_options', controlpanel_options_default());
            $id = get_the_author_ID();
            $data = get_user_meta($id);
            $avatar = get_avatar_url($id);

            echo '<img class="post-desc-avatar" src="' . $avatar . '" />';


            var_dump($options['pseudo_font_color']);
            echo '<div class="post-desc-name" style="color: ' . $options['pseudo_font_color'] . '">' . $data['first_name'][0] . " " . $data['last_name'][0] . '</div>';
            ?>

        </div>
        <div class='post-desc-divider'></div>
        <?php
        echo "<div  class='post-desc-desc'>" . $data['description'][0] . '</div>';
        ?>


    </div>
    <!-- Author Description Area END HERE -->
<?php
}
add_action('author_description', 'author_desc_test');
