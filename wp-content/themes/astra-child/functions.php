<?php
/**
 * Astra Child Theme functions.php
 *
 * @package Astra_Child
 */

// 1. Enqueue parent & child styles
function astra_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles' );

// 2. Register Custom Post Type: Projects
function create_custom_post_projects() {
    register_post_type(
        'projects',
        array(
            'labels'      => array(
                'name'          => __( 'Projects', 'astra-child' ),
                'singular_name' => __( 'Project',  'astra-child' ),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array( 'title', 'editor', 'thumbnail' ),
            'menu_icon'   => 'dashicons-portfolio',
        )
    );
}
add_action( 'init', 'create_custom_post_projects' );

// 3. Optional: Remove auto <p> tags to avoid unwanted white space
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
