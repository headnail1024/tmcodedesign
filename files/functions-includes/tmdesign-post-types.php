<?php
/* Używane w projekcie customowe post types */

/* Post type Big Section */
add_action('init', 'tmcodedesign_post_types');
function tmcodedesign_post_types()
{
    register_post_type('bsection', array(
        'supports' => array('thumbnail'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'bsections'),
        'public' => false,
        'show_ui' => true,
        'menu_icon' => 'dashicons-analytics',
        'labels' => array(
            'name' => 'Big sections',
            'add_new_item' => 'Add new bsection',
            'edit_item' => 'Edit bsection',
            'all_items' => 'All bsections',
            'singular_name' => 'bsection'
        )
    ));
}
