<?php

declare(strict_types=1);

add_action('init', function () {
    register_post_type('News', [
        'has_archive' => false,
        'labels' => [
            'add_new_item' => __('Add news article'),
            'edit_item' => __('Edit article'),
            'name' => __('News article'),
            'search_items' => __('Search news'),
            'singular_name' => __('News article'),
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
