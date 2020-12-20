<?php

include_once UC_PLUGIN_DIR . '/inc/meta-boxes/name-meta-box.php';
include_once UC_PLUGIN_DIR . '/inc/meta-boxes/price-meta-box.php';
include_once UC_PLUGIN_DIR . '/inc/meta-boxes/description-meta-box.php';

function dish_post_type() {
    $labels = array(
        'name'                  => _x( 'Dishes', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Book', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Dishes', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Dish', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Add New', 'textdomain' ),
        'add_new_item'          => __( 'Add New Dish', 'textdomain' ),
        'new_item'              => __( 'New Dish', 'textdomain' ),
        'edit_item'             => __( 'Edit Dish', 'textdomain' ),
        'view_item'             => __( 'View Dish', 'textdomain' ),
        'all_items'             => __( 'All Dishes', 'textdomain' ),
        'search_items'          => __( 'Search Dishes', 'textdomain' ),
        'parent_item_colon'     => __( 'Parent Dishes:', 'textdomain' ),
        'not_found'             => __( 'No dishes found.', 'textdomain' ),
        'not_found_in_trash'    => __( 'No dishes found in Trash.', 'textdomain' ),
        'featured_image'        => _x( 'Dish Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set dish image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Dish archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Insert into dish', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this dish', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter dishes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Dishes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Dishes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' )
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'dish' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('thumbnail'),
        'menu_icon'          => 'dashicons-food'
    );
 
    register_post_type( 'dish', $args );
}
 
add_action( 'init', 'dish_post_type' );