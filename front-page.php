<?php get_header(); ?>

<div class="mx-4 my-8 md:mx-16 md:py-16 min-h-screen">
<?php
    if (have_posts()) :
        while( have_posts() ) : the_post(); // moves the loop forward
?>
            <div class="my-8">
                <a href="<?php echo get_post_permalink(); ?>"><h1 class="font-Lora text-DarkGrey font-bold text-4xl md:text-5xl"> <?php the_title(); ?></h1></a>
                <h3 class="font-Lora font-medium text-lg md:text-xl my-2 text-SemiGrey"> <?php the_time('F j, Y'); ?> </h3>
                <div class="font-Merriweather text-DarkGrey">
                    <?php the_excerpt(); ?>
                </div>
                <div class="font-Merriweather text-SemiGrey hover:text-DarkGrey transition-all duration-200">
                    <?php the_shortlink("Read more..."); ?>
                </div>
            </div>
            
<?php
        endwhile;
    endif;
?>
</div>
<?php get_footer(); ?>