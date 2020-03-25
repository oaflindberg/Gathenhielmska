<?php

declare(strict_types=1);

add_action('init', function () {
    register_taxonomy('dat', ['evenemang'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Date'),
            'edit_item' => __('Edit Date'),
            'name' => __('Date'),
            'search_items' => __('Search Date'),
            'singular_name' => __('Date'),
        ],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
});
