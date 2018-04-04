<?php

// function wptuts_scripts_basic()
// {
    
//     wp_register_script( 'mioscript', get_template_directory_uri() . '/js/mioscript.js', '4.9.4', false );
 
//     // For either a plugin or a theme, you can then enqueue the script:
//     wp_enqueue_script( 'mioscript' );
// };
// add_action( 'wp_enqueue_scripts', 'wptuts_scripts_basic' );



wp_enqueue_script( 
    'mioscript',
    get_stylesheet_directory_uri() . '/js/mioscript.js',
    array(),
    '4.7.3',
    true 
);



function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function wpb_hidetitle_class($classes) {
    if ( is_single() || is_page() ) : 
        $classes[] = 'hidetitle';
        return $classes;
    endif; 
    return $classes;
}
add_filter('post_class', 'wpb_hidetitle_class');


add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

?>

