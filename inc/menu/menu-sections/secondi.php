<?php 

$secondi_args = [
    'post_type' => 'dish',
    'tax_query' => [
        [
        'taxonomy'  => 'dish_types',
        'field'     => 'slug',
        'terms'     => 'secondo'
        ]
    ]
];

$secondi = new WP_Query($secondi_args);

wp_reset_postdata();

$secondi_total = [];


    if($secondi->have_posts()){
        while($secondi->have_posts()){
            $secondi->the_post();

            $secondi_data = 
            ' <div class="d-flex align-items-center justify-content-around">
            <p>' . get_post_meta(get_the_ID(), 'dish_name_key', true) . '</p>
            <p>' .  get_post_meta(get_the_ID(), 'dish_price_key', true) . '</p>
            </div>';

            array_push($secondi_total, $secondi_data);
    
    ?>
    
    <?php
            
        }
    }


