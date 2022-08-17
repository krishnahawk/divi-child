<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Turn off XMLRPC right off the bat to prevent exploit hacks */
add_filter( ‘xmlrpc_enabled’, ’_return_false’ );