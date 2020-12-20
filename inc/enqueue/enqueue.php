<?php

function pm_enq_css(){
    wp_enqueue_style('bootstrap_css', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
}

add_action('wp_enqueue_scripts', 'pm_enq_css');