<?php 

$contorno_args = [
    'post_type' => 'dish',
    'tax_query' => [
        [
        'taxonomy'  => 'dish_types',
        'field'     => 'slug',
        'terms'     => 'contorno'
        ]
    ]
];

$contorno = new WP_Query($contorno_args);

wp_reset_postdata();

$contorno_total = [];


    if($contorno->have_posts()){
        while($contorno->have_posts()){
            $contorno->the_post();

            $contorno_data = 
            ' <div class="d-flex align-items-center justify-content-around">
            <p>' . get_post_meta(get_the_ID(), 'dish_name_key', true) . '</p>
            <p>' .  get_post_meta(get_the_ID(), 'dish_price_key', true) . '</p>
            </div>';

            array_push($contorno_total, $contorno_data);
    
    ?>
    
    <?php
            
        }
    }


