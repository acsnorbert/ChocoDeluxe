<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            printf(_nx('One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain'),
                number_format_i18n(get_comments_number()));
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 20,
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation();
        ?>

    <?php endif; ?>

    <?php
   
    if (!comments_open() && get_comments_number()) : ?>
        <p class="no-comments"><?php _e('Comments are closed.', 'textdomain'); ?></p>
    <?php endif; ?>

    <?php
    comment_form();
    ?>

</div>
