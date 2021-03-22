<?php
require_once 'app/setup.php';
require_once 'wp_bootstrap4_navwalker.php';

if ( ! function_exists( 'anika_setup' ) ) :
	
	function anika_setup() {
		
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'menus' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );

		
		register_nav_menus( array(
			'menu' => esc_html__( 'Menu główne', 'anika' ),
			'footer-menu' => esc_html__("footer-menu", 'anika')
		) );

	}
endif;
add_action( 'after_setup_theme', 'anika_setup' );


/**
 * Widżety
 *
 */
function anika_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'anika' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'anika' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

/**
 * Ładowanie styli i skryptów.
 */
function anika_scripts() {
	if (! is_customize_preview() ) {
		wp_deregister_script( 'jquery3' );
		wp_enqueue_script( 'jquery3', 'https://code.jquery.com/jquery-3.3.1.min.js', null, null, true);
	}
	wp_deregister_script( 'popper' );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array('jquery3'), null, true);
	wp_deregister_script('bootstrap-js');
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery3'), null, true);
	wp_deregister_script( 'libs' );
	wp_enqueue_script( 'libs', get_template_directory_uri() . '/dist/js/vendor.js', array('jquery3'), null, true);
	wp_deregister_script('js');
	wp_enqueue_script('js', get_template_directory_uri() . '/dist/js/app.js', false, filemtime(get_stylesheet_directory() . '/dist/js/app.js'), true);

	wp_deregister_style('style-libs');
	wp_enqueue_style('style-libs', get_stylesheet_directory_uri() . '/dist/css/vendor.css', array(), filemtime(get_stylesheet_directory() . '/dist/css/vendors.css'));
	wp_deregister_style('style');
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), filemtime(get_stylesheet_directory() . '/dist/css/style.css'));
}
add_action( 'wp_enqueue_scripts', 'anika_scripts' );


remove_role('klient');

add_role(
	'klient',
		__( 'Klient' ),
		array(
			'read' => true,
			'edit_pages' => true,
			'publish_pages' => true,
			'edit_published_pages' => true,
			'edit_others_pages' => true,
			'edit_posts' => true,
			'edit_published_posts' => true,
			'delete_posts' => true,
			'edit_others_posts' => true,
			'delete_others_posts' => true,
			'delete_published_posts' => true,
			'publish_posts' => true,
			'upload_files' => true,
			'unfiltered_html' => true, // bez tego wycina iframe dodane przez tinymce
		)
);



require get_template_directory() . '/app/acf.php';


function prefix_nav_description($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace($args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output);
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 4);


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/wp_bootstrap4_navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );