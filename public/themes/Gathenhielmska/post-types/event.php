<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('Evenemang', [
        'has_archive' => false,
        'labels' => [
            'add_new_item' => __('Add New Event'),
            'edit_item' => __('Edit Event'),
            'name' => __('Event'),
            'search_items' => __('Search Event'),
            'singular_name' => __('Event'),
        ],
        'supports' => [
            'title',
            'editor',
            'thumbnail',
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 20,
        'public' => true,
        'show_in_rest' => true,
    ]);
});
