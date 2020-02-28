<?php
require_once('functions-bbpress.php');


/*
** **
** ** * LOAD SCRIPTS
** ** 
*/
function load_scrips(){
    wp_enqueue_script(
        'js',
        get_theme_file_uri('/bundle.js'),
        NULL,
        '1.0',
        true       
    );
    wp_enqueue_style('google_fonts','https://fonts.googleapis.com/css?family=Fira+Sans:300,400,400i,500,600,700&display=swap"');
    wp_enqueue_style('stylesheet',get_stylesheet_uri());    
}
add_action('wp_enqueue_scripts','load_scrips');



/*
** **
** ** * REGISTER NAVIGATION MENU
** ** 
*/
function register_my_menus(){
    register_nav_menus(
        array(
            'header_primary' => __('Header Menu','mingle'),
            'footer_primary' => __('Footer Menu', 'mingle'),            
        )        
    );
}
add_action('init','register_my_menus');



/*
** **
** ** * REGISTER A SIDEBAR
** ** 
*/
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'mingle' ),
        'id'            => 'main-sidebar',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
    register_sidebar(array(
        'name'          => __( 'Footer Widgets', 'mingle' ),
        'id'            => 'footer-widgets',
        'description'   => __( 'Widgets in this area will be shown in footer.', 'textdomain' ),
        'before_widget' => '<div class="footer-widget bg-white shadow-2xl shadow rounded" id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="bg-gray-100 text-gray-200 px-20 py-5 text-5xl">',
        'after_title'   => '</h2>',
    ));
 }
 add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


/*
** **
** ** * ADD THEME SUPPORT
** ** 
*/
function theme_support(){
    add_theme_support('post-thumbnails');    
    add_theme_support('widgets');
    add_post_type_support('forum', 'thumbnail');

    // add_image_sizes(array('forum-icon'));
}
add_action('after_setup_theme','theme_support')

?>