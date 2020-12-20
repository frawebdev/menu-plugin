<?php

/**
 * Plugin Name: Menu Plugin
 */

 if(!defined('WPINC')){
     die;
 }

define('UC_PLUGIN_MAIN_FILE', __FILE__);

define('UC_PLUGIN_URL', plugin_dir_url(__FILE__));

define('UC_PLUGIN_DIR', plugin_dir_path(__FILE__));


 //base includes

include_once UC_PLUGIN_DIR . '/inc/base/activate-plugin.php';

include_once UC_PLUGIN_DIR . '/inc/base/deactivate-plugin.php';

//enqueue includes

include_once UC_PLUGIN_DIR . '/inc/enqueue/enqueue.php';

//taxonomies includes

include_once UC_PLUGIN_DIR . '/inc/taxonomies/dish-type-taxonomy.php';

//post types includes

include_once UC_PLUGIN_DIR . '/inc/post-types/dish-post-type.php';

//shortcodes include

include_once UC_PLUGIN_DIR . '/inc/shortcodes/menu-shortcode.php';
