<?php 

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action('after_setup_theme', 'theme_register');
add_action( 'widgets_init', 'register_my_widgets' );

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
function wpdocs_excerpt_more( $more ) {
  return '...';
}

add_filter('document_title_separator', 'my_separator' );
function my_separator($sep) {
  $sep = ' | ';
  return $sep;
}

function register_my_widgets(){
  register_sidebar(array(
    'name'          => 'Main Sidebar',
    'id'            => 'sidebar',
    'description'   => 'Main Sidebar',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>'
  ) );
  register_sidebar(array(
    'name'          => 'Contacts Sidebar',
    'id'            => 'sidebar-contacts',
    'description'   => 'Contacts Sidebar',
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
    add_theme_support('post-thumbnails', array('post', 'portfolio'));
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

add_action( 'init', 'register_post_types' );
function register_post_types(){
	$args = array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Portfolio', // основное название для типа записи
			'singular_name'      => 'Portfolio', // название для одной записи этого типа
			'all_items' 	     => 'Portfolio', //названия для всех записей этого вида
			'add_new'            => 'Add item', // для добавления новой записи
			'add_new_item'       => 'Adding item', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit item', // для редактирования типа записи
			'new_item'           => 'New item', // текст новой записи
			'view_item'          => 'View item', // для просмотра записи этого типа.
			'search_items'       => 'Search item', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родительских типов. для древовидных типов
			'menu_name'          => 'Portfolio', // название меню
		),
		'description'         => 'Our works in portfolio',
		'public'              => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => true,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor', 'thumbnail', 'excerpt'),
		'taxonomies'          => array('skills'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'show_in_nav_menus'   => null,
	);

	register_post_type('portfolio', $args );
}

add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){
	$args = array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Skills', // основное название для типа записи
			'singular_name'      => 'Skill', // название для одной записи этого типа
			'all_items' 	     => 'All skills', //названия для всех записей этого вида
			'add_new'            => 'Add item', // для добавления новой записи
			'add_new_item'       => 'Adding item', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Edit item', // для редактирования типа записи
			'new_item'           => 'New item', // текст новой записи
			'view_item'          => 'View item', // для просмотра записи этого типа.
			'search_items'       => 'Search item', // для поиска по этим типам записи
			'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
			'parent_item'  => 'Parent skill', 
			'parent_item_colon'  => 'Parent Skill:', // для родительских типов. для древовидных типов
			'menu_name'          => 'Skills', // название меню
			'update_item'          => 'Update Skill',
			'new_item_name'          => 'New Name of Skill',
		),
		'description'         => 'Skills in portfolio',
		'public'              => true,
		'publicly_queryable'  => true,
		'hierarchical'        => false,
		'rewrite'             => true,
	);

	register_taxonomy('skills', array('portfolio', 'post'), $args);
}

add_action( 'init', 'skills_for_porfolio' );
function skills_for_porfolio(){
  register_taxonomy_for_object_type('skills', 'portfolio');
}
?>
