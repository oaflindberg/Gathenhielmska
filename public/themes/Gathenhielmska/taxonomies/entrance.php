<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('Entrance', ['evenemang'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Entrence'),
            'edit_item' => __('Edit Entrence'),
            'name' => __('Entrence'),
            'search_items' => __('Search Entrence'),
            'singular_name' => __('Entrence'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
