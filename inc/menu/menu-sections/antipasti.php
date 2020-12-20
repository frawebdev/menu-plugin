<?php 

$antipasti_args = [
    'post_type' => 'dish',
    'tax_query' => [
        [
        'taxonomy'  => 'dish_types',
        'field'     => 'slug',
        'terms'     => 'antipasto'
        ]
    ]
];

$antipasti = new WP_Query($antipasti_args);

wp_reset_postdata();

$antipasti_total = [];


    if($antipasti->have_posts()){
        while($antipasti->have_posts()){
            $antipasti->the_post();

            $antipasti_data = 
            ' <div class="d-flex align-items-center justify-content-around">
            <p>' . get_post_meta(get_the_ID(), 'dish_name_key', true) . '</p>
            <p>' .  get_post_meta(get_the_ID(), 'dish_price_key', true) . '</p>
            </div>';

            array_push($antipasti_total, $antipasti_data);
    
    ?>
    
    <?php
            
        }
    }


