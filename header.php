<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="bg-LightGrey">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body<?php body_class(); ?> >
        <?php wp_body_open(); ?>

        <?php 
            // wp_nav_menu([
            //     'theme_location' => 'top-menu'
            // ])
        ?>

        <div class="min-h-screen">
            <!-- <a href="#" class="z-20 absolute top-0 right-0 m-4 md:m-16"> -->
                <?php get_sidebar(); 
                
                $current_user = wp_get_current_user();
                // echo "ID: ".$current_user->ID;
                
                ?>
            <!-- </a> -->
            <div class="my-20 md:m-16 text-center md:w-max">
                <a href="<?php echo get_home_url(); ?>"><h1 class="text-DarkGrey font-Lora font-bold text-5xl"><?php echo get_bloginfo('name'); ?></h1></a>
                <h2 class="text-SemiGrey font-Lora font-medium text-2xl"><?php echo get_bloginfo('description'); ?></h2>

            </div>

        
        <!-- Branding -->