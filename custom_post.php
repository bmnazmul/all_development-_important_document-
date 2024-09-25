<?php

function custom_service(){
    register_post_type( 'service', 
        array(
            'labels' => array(
                'name' => 'services',
                'singular_name' => 'service',
                'add_new' => 'add new service',
                'add_new_item' => 'add new service',
                'edit_item' => 'edit service item',
                'new_item' => 'new service',
                'view_item' => 'view service',
            ),
            'menu_icon' => 'dashicons-welcome-widgets-menus',
            'public' => true,
            'menu_position' => 5,
            'show_ui' => true,
            'supports' => array('title','editor','thumbnail'),
        )
    );
}

add_action('init','custom_service');

// register taxonomy 

function our_service() {
    register_taxonomy('our_service', ['service'], array(
        'hierarchical' => true,
        'labels' => array(
            'name' => __('Web Categories', 'textdomain'),
            'singular_name' => __('Web Service', 'textdomain'),
            'edit_item' => __('Edit Service Item', 'textdomain'),
            'add_new_item' => __('Add New Service Item', 'textdomain'),
            'search_items' => __('Search Services', 'textdomain'),
            'all_items' => __('All Services', 'textdomain'),
        ),
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'web-service'),
    ));
}

add_action('init', 'our_service');


?>