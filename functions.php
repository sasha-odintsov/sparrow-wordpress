<?php 

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register');
add_action( 'widgets_init', 'register_my_widgets' );

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function register_my_widgets(){
  register_sidebar( array(
    'name'          => 'Left Sidebar',
    'id'            => 'left-sidebar',
    'description'   => 'Left Sidebar',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>'
  ) );
}

function theme_register() {
    register_nav_menu('header-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post'));
    add_image_size('post-thumb', 1300, 600, true);
}

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css');
    wp_enqueue_style('layout', get_template_directory_uri() . '/assets/css/layout.css');
    wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
}

function scripts_theme() {
    wp_deregister_script('jquery');
    wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', array( 'jquery' ), null, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array( 'jquery' ), null, true);
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', array( 'jquery' ), null, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', null, null, true);
}

function wpdocs_excerpt_more( $more ) {
	return '...';
}

?>