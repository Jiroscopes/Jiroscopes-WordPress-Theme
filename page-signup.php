<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Jirosocpes
 */

get_header(); 
?>
    <!-- Page Content -->
    <div class="mx-3 lg:mx-16 flex justify-center">
        <div class="w-full lg:w-1/2 shadow-xl">
            <div class="text-center mt-4">
                <h1 class="font-Lora text-DarkGrey text-4xl font-bold"><?php echo the_title(); ?></h1>
            </div>

<?php 
if (have_posts()):
    while(have_posts()):
        the_post();
?>
            <div class="" >
                <?php the_content(); ?>
            </div>
        </div>

<?php 
    endwhile;
endif;
?>
    </div>
<?php
get_footer();