<?php

/**
 * =============================================================
 * Loading CSS and JS
 * =============================================================
 */

function news_files(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.2', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome-4.7.0/css/font-awesome.css', array(), '1.0.0', 'all');
    wp_enqueue_script('bootstrapjs', get_theme_file_uri() . '/assets/js/bootstrap.min.js', array(), '5.0.2', true);
    wp_enqueue_script('script', get_theme_file_uri() . '/assets/js/myscript.js', array(), '1.0.0', true);
    wp_enqueue_script('script-jquery', get_theme_file_uri() . '/assets/js/jquery-3.6.0.js', array(), '3.6.0');
}

add_action('wp_enqueue_scripts', 'news_files');

/**
 * =============================================================
 * Activating Theme Support
 * =============================================================
 */

function news_theme_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(200,200);
    add_image_size('single-post-thumbnail', 10000, 1000);
    add_theme_support('comments');
}

add_action('init', 'news_theme_setup');