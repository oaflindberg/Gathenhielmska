<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('category', ['evenemang'], [

        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Category'),
            'edit_item' => __('Edit Category'),
            'name' => __('Category'),
            'search_items' => __('Search Category'),
            'singular_name' => __('Category'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
