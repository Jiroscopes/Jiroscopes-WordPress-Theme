<?php 
/**
 * The template for displaying 404 pages (Not Found)
 */
get_header();
?>

<div class="mx-16 text-center">
    <h1 class="font-Lora text-DarkGrey text-4xl font-bold my-4">Oops... That page doesn't exist!</h1>
    <a href="<?php echo site_url(); ?>" class="text-DarkGrey text-xl font-Merriweather border-b-2 border-DarkGrey font-medium">Go Home</a>
</div>

<?php get_footer(); ?>