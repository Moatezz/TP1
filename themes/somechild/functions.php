<?php
// Exit if accessed directely
if (!defined('ABSPATH')) {

    exit;
}

//LINKING STYLES AND SCRIPTS
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles()
{
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version')
    );
}

// Breaking News bar hook
function breaking_news_bar()
{
    do_action('breaking_news_bar');
}

// BREAKING NEWS BAR MARKUP FUNCTION
function breaking_news_bar_markup()
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
    echo '<div class="bnb-container" style="background-color: ' . $options['bg_color'] . '">
    <div class="bnb-text-static-container" style="background-color: ' . $options['bg_color'] . '">
    <p class="bnb-text-static" style="color: ' . $options['static_font_color'] . '">BREAKING NEWS</p>
    </div>
    <div class="bnb-text" style="animation: horizontalText ' . $options['text_speed'] . 's linear infinite;" >';
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
add_action('breaking_news_bar', 'breaking_news_bar_markup');

// Author Description hook
function author_description()
{
    do_action('author_description');
}

// AUTHOR DESCRIPTION MARKUP FUNCTION
function author_description_markup()
{
    function conditional($option, $alt)
    {
        if ($option == '') return $alt;
        else return $option;
    }
?>
    <!-- Author Description Area START HERE -->
    <div class="post-desc">
        <div class='post-desc-divider'></div>
        <div class="post-desc-flex-container">
            <?php
            // Querying necessary raw data
            $options = get_option('controlpanel_options', controlpanel_options_default());
            $id = get_the_author_meta('ID');
            $description = get_the_author_meta('user_description');
            $first_name = get_the_author_meta('first_name');
            $last_name = get_the_author_meta('first_name');
            $full_name = $first_name . ' ' . $last_name;
            $avatar_url = get_avatar_url($id);
            // Outputting first hand data
            echo '<img class="post-desc-avatar" src="' . conditional($options['avatar_url'], $avatar_url) . '" />';
            echo '<div class="post-desc-name" style="color: ' . $options['pseudo_font_color'] . '">' . conditional($options['pseudo_name'], $full_name) . '</div>';
            ?>
        </div>
        <div class='post-desc-divider'></div>
        <?php
        echo '<div  class="post-desc-desc" style=" color: ' . $options['desc_font_color'] . '">' . conditional($options['description'], $description) . '</div>';
        ?>
    </div>
    <!-- Author Description Area END HERE -->
<?php
}
add_action('author_description', 'author_description_markup');
