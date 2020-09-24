<?php

function my_files()
{
    wp_enqueue_script('tmcodedesign_script', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('tmcodedesign_style', get_theme_file_uri('/bundled/style.css'));

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Source+Sans+Pro:wght@400;700&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('tmcodedesign_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_files');

function tmcodedesign_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'tmcodedesign_features');
