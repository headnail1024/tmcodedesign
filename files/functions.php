<?php

require get_theme_file_path('includes/bsection.php');
require get_theme_file_path('functions-includes/tmdesign-post-types.php');
require get_theme_file_path('functions-includes/admin-extensions.php');

/* Skrypty i style */
function my_files()
{
    wp_enqueue_script('tmcodedesign_script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('tmcodedesign_style', get_theme_file_uri('/bundled/style.css'));

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('tmcodedesign_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_files');

/* Features */
function tmcodedesign_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('bsection'));
}
add_action('after_setup_theme', 'tmcodedesign_features');

/* Skrypty i style dla panelu admina */
function load_custom_wp_admin_style()
{
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom_wp_admin_css', get_theme_file_uri('/bundled/admin.css'));
}
add_action('admin_enqueue_scripts', 'load_custom_wp_admin_style');
