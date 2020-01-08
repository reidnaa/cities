<?php

function cities_setup(){

    wp_enqueue_style("stylecss", get_template_directory_uri() . '/style.css', array(), '1.0');

   
    wp_enqueue_style("normalizecss", get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style("bxslidercss", get_template_directory_uri() . '/css/bxslider.css', array(), '4.2.12');
    wp_enqueue_script("jquery");
    wp_enqueue_script("bxsliderjs", get_template_directory_uri() . '/js/bxslider.js', array('jquery'), '4.2.12');

    wp_enqueue_script("scriptsjs", get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0');
};


add_action('wp_enqueue_scripts', 'cities_setup');


add_filter('show_admin_bar', '__return_false');


function cities_images(){

    //register new Image sizes   
    add_image_size('square', '350px', '350px', true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 444, false);
    add_image_size('smallBlog', 358, 288, true);
    add_image_size('feature', 1100, 418, true);


    // add featured Images   
    add_theme_support('post-thumbnails');

    //seo titles    

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'cities_images');



// create the menus

function cities_menu() {
    // wordperss function 
    register_nav_menus(
        array(
            'main-menu' => 'Main Menu'
        )
        );
}

add_action('init', 'cities_menu');

// widgets     
function theme_widgets(){
    register_sidebar(array(
        'name' => __('Sidebar Testimonials'),
        'id' => 'testimonials',
        'description' => 'Testimonials widget',
        'before_widget' => '<aside id="%1$" class="widget">',
        'after_widget' => '</aside>',
        'before_title'=> '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Images for the front page'),
        'id' => 'front-page',
        'description' => 'widget for images on front page',
        'before_widget' => '<div  class="widget">',
        'after_widget' => '</div>',
        'before_title'=> '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'theme_widgets');


// add featured image

add_theme_support('post_thumbnail');
?>