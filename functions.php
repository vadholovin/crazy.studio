<?php

// Set up
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );
add_theme_support( 'title-tag' );

// Enable ACF 5 early access
// define('ACF_EARLY_ACCESS', '5');


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/backend/mail.php' );


// Actions & Filters
add_action( 'wp_enqueue_scripts', 'vh_enqueue' );
add_action( 'wp_enqueue_scripts', 'vh_enqueue_briefs' );
add_action( 'after_setup_theme', 'true_load_crazystudio' );
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );
add_action( 'widgets_init', 'vh_register_widgets' );
add_action( 'init', 'vh_register_post_types' );

// add_filter( 'locale', 'true_localize_theme' );
add_filter( 'pll_get_post_types', 'fixwp_add_acf_pll', 10, 2 );
add_filter( 'document_title_separator', 'vh_set_title_separator' );
add_filter( 'excerpt_length', 'new_excerpt_length' );
add_filter( 'navigation_markup_template', 'vh_navigation_template', 10, 2 );

// remove junk from head
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );


// ACF + Polylang
function fixwp_add_acf_pll( $post_types, $is_settings ) {
  $post_types[] = 'acf';
  return $post_types;
}

// Set Document Title Separator
function vh_set_title_separator( $sep ) {
  $sep = ' | ';
  return $sep;
}

// Change default excerpt length
function new_excerpt_length( $length ) {
	return 40;
}

// Remove title from the pagination
function vh_navigation_template( $template, $class ) {
	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>
	';
}

// Register widgets
function vh_register_widgets() {
  register_sidebar( array(
		'name'          => __( 'Правый сайдбар', 'crazystudio' ),
		'id'            => 'right-sidebar',
		'class'         => 'sidebar',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h3>',
		'after_title'   => "</h3>\n",
  ) );

  register_nav_menus( array(
    'primary'   => __( 'Меню на Главной странице', 'crazystudio' ),
    'secondary' => __( 'Меню в Блоге', 'crazystudio' ),
  ) );
}

// Register post types
function vh_register_post_types() {
  register_post_type('portfolio', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Все работы', // основное название для типа записи
			'singular_name'      => 'Портфолио', // название для одной записи этого типа
			'add_new'            => 'Добавить работу', // для добавления новой записи
			'add_new_item'       => 'Добавление работы', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование работы', // для редактирования типа записи
			'new_item'           => 'Новая работа', // текст новой записи
			'view_item'          => 'Смотреть работу', // для просмотра записи этого типа.
			'search_items'       => 'Искать работу в портфолио', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Портфолио', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-format-gallery', 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','thumbnail','custom-fields'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}


