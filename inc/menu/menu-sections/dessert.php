<?php 

$dessert_args = [
    'post_type' => 'dish',
    'tax_query' => [
        [
        'taxonomy'  => 'dish_types',
        'field'     => 'slug',
        'terms'     => 'dessert'
        ]
    ]
];

$dessert = new WP_Query($dessert_args);

wp_reset_postdata();

$dessert_total = [];


    if($dessert->have_posts()){
        while($dessert->have_posts()){
            $dessert->the_post();

            $dessert_data = 
            ' <div class="d-flex align-items-center justify-content-around">
            <p>' . get_post_meta(get_the_ID(), 'dish_name_key', true) . '</p>
            <p>' .  get_post_meta(get_the_ID(), 'dish_price_key', true) . '</p>
            </div>';

            array_push($dessert_total, $dessert_data);
    
    ?>
    
    <?php
            
        }
    }


