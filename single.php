<?php
/**
 * The template for displaying a post
 */
get_header();


if (is_single()):
?>
<div class="pb-8" <?php post_class(); ?> >
    <h1 class="text-center font-Lora text-5xl text-DarkGrey font-bold my-16"><?php the_title();?></h1>
<?php 
    if (have_posts()): 
        while(have_posts()): the_post();
?>
    <div class="post-body text-left leading-loose text-lg mx-10 lg:mx-40 2xl:mx-96 font-Roboto">
        <?php the_content(); ?>
    </div>

<?php 
        endwhile;
    endif;
?>
    <div class="text-left leading-loose mx-10 lg:mx-40 2xl:mx-96 font-Roboto">
        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>
    </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>



