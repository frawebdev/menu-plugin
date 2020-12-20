<?php
 
add_action( 'init', 'create_dish_type_taxonomy', 0 );
 
function create_dish_type_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Dish Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Dish Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Dish Types' ),
    'all_items' => __( 'All Dish Types' ),
    'parent_item' => __( 'Parent Dish Type' ),
    'parent_item_colon' => __( 'Parent Dish Type:' ),
    'edit_item' => __( 'Edit Dish Type' ), 
    'update_item' => __( 'Update Dish Type' ),
    'add_new_item' => __( 'Add New Dish Type' ),
    'new_item_name' => __( 'New Dish Type Name' ),
    'menu_name' => __( 'Dish Types' ),
  );    
 
  register_taxonomy('dish_types',array('dish'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dish-type' ),
  ));

  wp_insert_term('Antipasto', 'dish_types');
  wp_insert_term('Primo', 'dish_types');
  wp_insert_term('Secondo', 'dish_types');
  wp_insert_term('Contorno', 'dish_types');
  wp_insert_term('Dessert', 'dish_types');
 
}

