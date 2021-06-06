<?php 

//security

remove_action('wp_head', 'wp_generator');


// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );

// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function register_assets() {
    // Déclarer le JS
    //     wp_enqueue_script( 
    //    'main-js', 
    //     get_template_directory_uri() . '/main.js', 
    //     array(), 
    //     '1.0',
    //     true 
    // );
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'main-css', 
        get_template_directory_uri() . '/main.css',
        array(), 
        '1.0'
    );
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'style-css',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'register_assets');

//Déclaré le menu


register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );


// register custom post type to work with
// to create events in Wordpress as Post-type to display on front-page
function lc_create_post_type() {
    // set up labels
    // $labels = array (
    // 'name' => 'Events',
    // 'singular_name' => 'Event',
    // 'add_new' => 'Add New Event',
    // 'add_new_item' => 'Add New Event',
    // 'edit_item' => 'Edit Event',
    // 'new_item' => 'New Event',
    // 'all_items' => 'All Events',
    // 'view_item' => 'View Event',
    // 'search_items' => 'Search Events',
    // 'not_found' => 'No Events Found',
    // 'not_found_in_trash' => 'No Events found in Trash',
    // 'parent_item_colon' => '',
    // 'menu_name' => 'Events',
    // );
    //register post type
    register_post_type ( 'event', array(
    //'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'events' ),
    )
    );
}
add_action( 'init', 'lc_create_post_type' );

// bootstrap Navwalker

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );




