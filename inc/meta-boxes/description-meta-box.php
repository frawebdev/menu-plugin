<?php

function description_meta_box(){
    add_meta_box('dish_description_metabox', __('Dish Description', 'menu_plugin'), 'dish_description_meta_box_html', ['dish']);
}

function dish_description_meta_box_html($post){
wp_nonce_field('save_dish_description', 'dish_description_nonce');
$value = get_post_meta($post->ID, 'dish_description_key', true);
?>

<textarea name="dish_description" rows="5" value="<?php echo esc_attr($value); ?>" style="width: 100%;"></textarea>

<?php

}

function save_dish_description($post_id){
    if(!isset($_POST['dish_description_nonce'])){
        return;
    } 

    if(!wp_verify_nonce($_POST['dish_description_nonce'], 'save_dish_description')){
        return;
    }

    if(!isset($_POST['dish_description'])){
        return;
    }

    $dish_description = sanitize_text_field($_POST['dish_description']);

    update_post_meta($post_id, 'dish_description_key', $dish_description);

}

add_action('add_meta_boxes', 'description_meta_box');
add_action('save_post', 'save_dish_description');