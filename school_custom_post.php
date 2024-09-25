<?php 

// custom post type

function student_info(){
    register_post_type('student',
        array(
            'labels' => array(
                'name' => 'students',
                'sigular_name' => 'student',
                'add_new' => 'add new student',
                'edit_item' => 'edit student',
                'new_item' => 'new student',
                'view_item' => 'view studnet',
            ),
            'menu_icon' => 'dashicons-networking',
            'menu_position' => 5,
            'public' => true,
            'has_archive' => true,
            'show_ui' => true,
            'supports' => array('title','editor','thumbnail'),

        ));
}

add_action('init','student_info');

// taxonomies/category

register_taxonomy( 'all_student',['student'],array(
    'hierarchical' => true,
    'labels' => array(
        'name' => __('Student Categories','smnazmul'),
        'singular_name' => __('student categories','smnazmul'),
        'add_new_item' => __('add new student categories','smnazmul'),
        'edit_item' => __('edit student categories','smnazmul' ),
        'new_item_name' => __('new_student categories','smnazmul'),
        'view_item' => __('view student categories','smnazmul'),
    ),
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewite' => array('slug' => 'student-categories'),



    ));


?>