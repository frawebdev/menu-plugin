<?php

function mp_activate_plugin(){
    flush_rewrite_rules();
}

add_action( 'pre_insert_term', function ( $term, $taxonomy )
{
    return ( 'dish_types' === $taxonomy )
        ? new WP_Error( 'term_addition_blocked', __( 'You cannot add terms to this taxonomy' ) )
        : $term;
}, 0, 2 );