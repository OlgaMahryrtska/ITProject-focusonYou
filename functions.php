<?php
/*add_filter('show_admin_bar', '__return_false');*/

function wpfocusonYou_setup()
{
    load_theme_textdomain('wpfocus');

    add_theme_support('title-tag');

    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 120,
        'flex-height' => true
    ));

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(105, 105, true);


    add_theme_support(
        'html5',
        array(
            'search_form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        )
    );
    register_nav_menu('primary', 'Primary menu');
}

add_action('after_setup_theme', 'wpfocusonYou_setup');

function wpfocusonYou_post_formats_setup()
{
    add_theme_support('post_formats', array('aside', 'image', 'gallery', 'video'));
}


add_action('after_setup_theme', 'wpfocusonYou_post_formats_setup');

function wpfocusonYou_scripts()
{
    wp_enqueue_style('style.css', get_stylesheet_uri());
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . 'assets/js/script.js',
        array(),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'wpfocusonYou_scripts');

function wptutsplus_widgets_init() {
    // First footer widget area, located in the footer. Empty by default.
register_sidebar(
    array(
        'name' => __( 'First Footer Widget Area', 'compass' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'compass' ),
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
    )
);
 
// Second Footer Widget Area, located in the footer. Empty by default.
register_sidebar(
    array(
        'name' => 'Second Footer Widget Area',
        'id' => 'second-footer-widget-area',
        'description' => 'The second footer widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);
 
// Third Footer Widget Area, located in the footer. Empty by default.
register_sidebar(
    array(
        'name' => 'Third Footer Widget Area',
        'id' => 'third-footer-widget-area',
        'description' => 'The third footer widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);
 
// Fourth Footer Widget Area, located in the footer. Empty by default.
register_sidebar(
    array(
        'name' => 'Fourth Footer Widget Area',
        'id' => 'fourth-footer-widget-area',
        'description' => 'The fourth footer widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);

// Fifth Footer Widget Area, located in the footer. Empty by default.
register_sidebar(
    array(
        'name' => 'Fifth Footer Widget Area',
        'id' => 'fifth-footer-widget-area',
        'description' => 'The fifth footer widget area',
        'before_widget' => '<div class="widget-container %2$s" id="%1$s">',
                'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
    )
);
}

add_action('after_setup_theme', 'wptutsplus_widgets_init');

