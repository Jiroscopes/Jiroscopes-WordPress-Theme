<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
// [
//     'style'       => 'div',
//     'short_ping'  => true,
//     'avatar_size' => 0,
// ]
?>

<div id="comments" class="comments-area py-16">
 
    <?php if ( have_comments() ) : ?>
        <ul class="comment-list">
            <?php
                wp_list_comments('type=comment&callback=format_comment');
            ?>
        </ul><!-- .comment-list -->
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>

    <div class="py-8 border-SemiGrey">
    <?php 
        //https://developer.wordpress.org/reference/functions/comment_form/

        $text_area = '
        <span class="block py-4">
            <textarea id="comment" name="comment" aria-required="true" placeholder="Type here..." class="p-2 w-full border-SemiGrey border-2"></textarea>
        </span>';

        $submit_button = '<button type="submit" class="bg-transparent hover:bg-DarkGrey text-DarkGrey hover:text-LightGrey px-4 py-2 border-SemiGrey border-2 rounded-md transition-all duration-300" >Submit</button>';

        comment_form([
            'fields' => [
                'author' => '',
                'email' => '',
                'url' => '',
                'cookies' => '',
            ], // Removes the fields I don't want
            'comment_notes_before' => '',
            'title_reply' => 'Leave your thoughts!',
            'comment_field' => $text_area,
            'submit_button' => $submit_button
        ]); 
    ?>
    </div>
</div><!-- #comments -->