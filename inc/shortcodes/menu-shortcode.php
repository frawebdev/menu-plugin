<?php

function menu_shortcode(){
    
    include_once UC_PLUGIN_DIR . '/inc/menu/menu-area.php';

    return $menu_total;

}

add_shortcode('menu', 'menu_shortcode');