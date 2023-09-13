<?php 

function load_css(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    // navbar styles
    wp_enqueue_style( 'navbar', get_template_directory_uri() . '/css/navbar.css', false, '1.1', 'all');
    wp_enqueue_style('lato', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap', false, '1.1', 'all');

    // footer styles
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css', false, '1.1', 'all');
    wp_enqueue_style('postcard', get_template_directory_uri() . '/css/postcard.css', false, 1.1, 'all');

    // single post styles
    wp_enqueue_style('singlepost', get_template_directory_uri() . '/css/singlepost.css', false, '1.1', 'all');
}
add_action('wp_enqueue_scripts', 'load_css');


// load custom menu
register_nav_menus( array(
    'primary-menu'   => __( 'Primary Menu', 'themewp' ),
    'footer' => __( 'Footer Menu', 'themewp' ),
) );

function themename_custom_logo_setup() {
	$defaults = array(
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


add_theme_support( 'post-thumbnails' ); 

