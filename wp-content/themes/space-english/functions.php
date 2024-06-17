<?php 

function space_english_scripts_styles(){

    // Styles
    wp_enqueue_style( 'about-us-styles', get_template_directory_uri() . '/styles/about-us.css', array(), '1.0.0' );
    wp_enqueue_style( 'atributtions-styles', get_template_directory_uri() . '/styles/attributions.css', array(), '1.0.0' );
    wp_enqueue_style( 'home-styles', get_template_directory_uri() . '/styles/home.css', array(), '1.0.0' );
    wp_enqueue_style( 'jobs-styles', get_template_directory_uri() . '/styles/jobs.css', array(), '1.0.0' );
    wp_enqueue_style( 'practice-styles', get_template_directory_uri() . '/styles/practice.css', array(), '1.0.0' );
    wp_enqueue_style( 'skills-styles', get_template_directory_uri() . '/styles/skills.css', array(), '1.0.0' );


    // Scripts
    wp_enqueue_script('app-js', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrap-min-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
    wp_enqueue_script('writing-js', get_template_directory_uri() . '/js/writing.js', array(), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'space_english_scripts_styles');