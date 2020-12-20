<?php

function price_meta_box(){
    add_meta_box('dish_price_metabox', __('Dish Price', 'menu_plugin'), 'dish_price_meta_box_html', ['dish']);
}

function dish_price_meta_box_html($post){
wp_nonce_field('save_dish_price', 'dish_price_nonce');
$value = get_post_meta($post->ID, 'dish_price_key', true);
?>

<input type="number" name="dish_price" value="<?php echo esc_attr($value); ?>">

<?php

}

function save_dish_price($post_id){
    if(!isset($_POST['dish_price_nonce'])){
        return;
    } 

    if(!wp_verify_nonce($_POST['dish_price_nonce'], 'save_dish_price')){
        return;
    }

    if(!isset($_POST['dish_price'])){
        return;
    }

    $dish_price = sanitize_text_field($_POST['dish_price']);

    update_post_meta($post_id, 'dish_price_key', $dish_price);

}

add_action('add_meta_boxes', 'price_meta_box');
add_action('save_post', 'save_dish_price');