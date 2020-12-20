<?php 

$primi_args = [
    'post_type' => 'dish',
    'tax_query' => [
        [
        'taxonomy'  => 'dish_types',
        'field'     => 'slug',
        'terms'     => 'primo'
        ]
    ]
];

$primi = new WP_Query($primi_args);

wp_reset_postdata();

$primi_total = [];


    if($primi->have_posts()){
        while($primi->have_posts()){
            $primi->the_post();

            $primi_data = 
            ' <div class="d-flex align-items-center justify-content-around">
            <p>' . get_post_meta(get_the_ID(), 'dish_name_key', true) . '</p>
            <p>' .  get_post_meta(get_the_ID(), 'dish_price_key', true) . '</p>
            </div>';

            array_push($primi_total, $primi_data);
    
    ?>
    
    <?php
            
        }
    }


