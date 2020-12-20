<?php

include_once UC_PLUGIN_DIR . '/inc/menu/menu-sections/antipasti.php';
include_once UC_PLUGIN_DIR . '/inc/menu/menu-sections/primi.php';
include_once UC_PLUGIN_DIR . '/inc/menu/menu-sections/secondi.php';
include_once UC_PLUGIN_DIR . '/inc/menu/menu-sections/contorno.php';
include_once UC_PLUGIN_DIR . '/inc/menu/menu-sections/dessert.php';

$antipasti_total_section = implode('', $antipasti_total);
$primi_total_section = implode('', $primi_total);
$secondi_total_section = implode('', $secondi_total);
$contorno_total_section = implode('', $contorno_total);
$dessert_total_section = implode('', $dessert_total);

$menu_total = '<section class="text-center">';
$menu_total = $menu_total . '<h1>Menu</h1>';

if(!empty($antipasti_total)){
    $menu_total = $menu_total . '<h2>Antipasti</h2>';
    $menu_total = $menu_total . $antipasti_total_section;
} else {
    return;
}

if(!empty($primi_total)){
    $menu_total = $menu_total . '<h2>Primi</h2>';
    $menu_total = $menu_total . $primi_total_section;
} else {
    return;
}

if(!empty($secondi_total)){
    $menu_total = $menu_total . '<h2>Secondi</h2>';
    $menu_total = $menu_total . $secondi_total_section;
} else {
    return;
}

if(!empty($contorno_total)){
    $menu_total = $menu_total . '<h2>Contorni</h2>';
    $menu_total = $menu_total . $contorno_total_section;
} else {
    return;
}

if(!empty($dessert_total)){
    $menu_total = $menu_total . '<h2>Dessert</h2>';
    $menu_total = $menu_total . $dessert_total_section;
} else {
    return;
}

$menu_total = $menu_total . '</section>';




