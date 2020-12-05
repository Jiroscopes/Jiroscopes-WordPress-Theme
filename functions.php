<?php 
//https://developer.wordpress.org/themes/basics/theme-functions/


register_nav_menus(

    [
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    ]
);

function jiroscopes_widgets_init() {
    // Sidebar https://developer.wordpress.org/themes/functionality/sidebars/
    register_sidebar([
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'description'   => 'Site sidebar. Hidden by default.',
        'class'         => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}

// Load style.css https://developer.wordpress.org/themes/basics/including-css-javascript/#stylesheets
function load_stylesheets() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

function load_fonts() {
    wp_enqueue_style('wp-google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Merriweather:ital,wght@0,400;0,700;1,400&display=swap');
}

function load_js() {
    wp_enqueue_script('sidebarjs', get_stylesheet_directory_uri() . '/assets/js/sidebar.js', [ 'jquery' ]);
}

// A JS hack to get around redirects
function form_redirect($url){
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';
    echo $string;
}

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
    }
}

function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment;

    echo ' 
    <li '. comment_class('py-4 border-l-8 pl-4', null, null, false) .' id="li-comment-';
    comment_ID();
    echo '" >
        <h4 class="font-bold text-lg">'.get_comment_author().'</h4>
        <p class="text-SemiGrey text-sm p">'.get_comment_date().'</p>
        <p class="py-2">'.get_comment_text().'</p>
    ';
    comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'])));
    // echo '</div>'; 
}



add_action( 'init', 'blockusers_init' );

function blockusers_init() {
    if ( is_admin() && ! current_user_can( 'administrator' ) && 
       ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
        wp_redirect( home_url() );
        exit;
    }
}

/*
    ===================================
    Theme support
    ===================================
*/
add_theme_support('menus');

/*
    ===================================
    Add actions
    ===================================
*/
add_action('widgets_init', 'jiroscopes_widgets_init');
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_fonts');
add_action('wp_enqueue_scripts', 'load_js');
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );