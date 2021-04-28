<div class="post-desc">
    <div class='post-desc-divider'></div>
    <div class="post-desc-flex-container">
        <?php
        $id = get_the_author_ID();
        $data = get_user_meta($id);
        $avatar = get_avatar_url($id);

        //var_dump($test);
        echo '<img class="post-desc-avatar" src="' . $avatar . '" />'
        ?>

        <?php
        echo "<div  class='post-desc-name'>" . $data['first_name'][0] . " " .  $data['last_name'][0] . '</div>';
        ?>

    </div>
    <div class='post-desc-divider'></div>
    <?php
    echo "<div  class='post-desc-desc'>" . $data['description'][0] . '</div>';
    ?>


</div>