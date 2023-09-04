<?php 

function load_css(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // navbar styles
    wp_enqueue_style( 'navbar', get_template_directory_uri() . '/css/navbar.css', false, '1.1', 'all');
    wp_enqueue_style('lato', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap', false, '1.1', 'all');

    // footer styles
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', false, '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'load_css');


// load custom menu
register_nav_menus( array(
    'primary-menu'   => __( 'Primary Menu', 'themewp' ),
    'footer' => __( 'Footer Menu', 'themewp' ),
) );

