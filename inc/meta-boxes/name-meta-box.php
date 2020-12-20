<?php

function name_meta_box(){
    add_meta_box('dish_name_metabox', __('Dish Name', 'menu_plugin'), 'dish_name_meta_box_html', ['dish']);
}

function dish_name_meta_box_html($post){
wp_nonce_field('save_dish_name', 'dish_name_nonce');
$value = get_post_meta($post->ID, 'dish_name_key', true);
?>

<input type="text" name="dish_name" value="<?php echo esc_attr($value); ?>">

<?php

}

function save_dish_name($post_id){
    if(!isset($_POST['dish_name_nonce'])){
        return;
    } 

    if(!wp_verify_nonce($_POST['dish_name_nonce'], 'save_dish_name')){
        return;
    }

    if(!isset($_POST['dish_name'])){
        return;
    }

    $dish_name = sanitize_text_field($_POST['dish_name']);

    update_post_meta($post_id, 'dish_name_key', $dish_name);

}

add_action('add_meta_boxes', 'name_meta_box');
add_action('save_post', 'save_dish_name');