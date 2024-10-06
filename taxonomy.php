<?php 


function st_taxonomyy(){
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
}

    add_action('init','st_taxonomyy' );



?>