<?php

/**
 * Sidebar file
 * 
 * The sidebar is always on the right of the page
 * and is toggled by a button
 */

?>


<div id="sidebar" class="sidebar-closed z-40 top-0 right-5 md:right-8 md:right-0 ease-out transition-all duration-300 widgets-area min-h-screen w-1/12 fixed p-4 md:p-16">
    <span id="sidebar-toggle" class="cursor-pointer">
        <i id="sidebar-icon" class="text-2xl fas fa-bars md:text-3xl transition-all duration-300"></i>
    </span>
    <div class="">
        <?php dynamic_sidebar('sidebar-1'); ?>
        <nav class="my-8 opacity-0 transition-all duration-400 ease" id="sidebar-content">
            <?php if (!is_user_logged_in()): ?>
                <a href="<?php echo site_url() . '/signup/'; ?>" class="font-Lora text-DarkGrey font-bold text-lg block">Sign Up</a>
                <a href="<?php echo site_url() . '/login/'; ?>" class="font-Lora text-DarkGrey font-bold text-lg block">Login</a>
            <?php else: ?>
                <h3 class="font-Lora text-DarkGrey font-bold text-xl block">Hi, <?php echo wp_get_current_user()->user_login; ?>!</h3>
                <a href="<?php echo site_url() . '/logout/'; ?>" class="font-Lora text-DarkGrey font-bold text-lg block">Logout</a>
            <?php endif; ?>
            <a href="<?php echo site_url(); ?>" class="<?php echo is_front_page() ? 'text-LightGrey' : '' ?> font-Lora text-DarkGrey font-bold text-lg block mt-8">Home</a>
        </nav>
    </div>
</div>