<?php
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

//Custom Menu
register_nav_menu('header-nav','Header Navigation');
register_nav_menu('footer-nav','Footer Navigation');

//Call Menu JS
function navbutton_scripts(){
    wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/navbutton.js', ['jquery'] );
}
add_action( 'wp_enqueue_scripts' , 'navbutton_scripts' );

//Register Sidebar
function widgetarea_init(){
    register_sidebar([
        'name'          => 'sidebar',
        'id'            => 'side-widget',
        'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
        'after_widget'  =>'</div>',
        'before_title'  => '<h4 class="sidebar-title">',
        'after_title'   => '</h4>'
    ]);
}
add_action('widgets_init','widgetarea_init');