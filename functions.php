<?php

function my_theme_scripts() {
    // Get the last modified time of style.css to use as version
    $theme_version = filemtime( get_stylesheet_directory() . '/style.css' );
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri(), array(), $theme_version );

    // AOS CSS
    wp_enqueue_style( 'aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1' );

    // AOS JS
    wp_enqueue_script( 'aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true );

    // AOS Initialize
    wp_add_inline_script( 'aos-js', 'AOS.init();', 'after' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

?>