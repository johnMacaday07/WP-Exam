<?php

if( !defined('THEME_IMG_PATH')){
    define( 'THEME_IMG_PATH', get_template_directory_uri() . '/assets/images' );
}

function exam_register_styles(){

    wp_enqueue_style('exam-fontawesome', get_template_directory_uri() . "/assets/css/all.css", array(), '5','all');
    wp_enqueue_style('exam-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), '4.6','all');
    wp_enqueue_style('exam-style', get_template_directory_uri() . "/style.css", array('exam-bootstrap'), '1.0','all');

}

add_action('wp_enqueue_scripts', 'exam_register_styles' );

function exam_register_scripts(){

    wp_enqueue_script('exam-jquery', get_template_directory_uri() . "/assets/js/jquery-3.5.1.slim.min.js", array(), '3.5.1', true);
    wp_enqueue_script('exam-validation', get_template_directory_uri() . "/assets/js/jquery.validate.min.js", array('exam-jquery'), '1.0', true);
    wp_enqueue_script('exam-popper', get_template_directory_uri() . "/assets/js/popper.min.js", array(), '1.0', true);
    wp_enqueue_script('exam-bootstrapjs', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array('exam-jquery'), '4.6', true);
    wp_enqueue_script('exam-master', get_template_directory_uri() . "/assets/js/master.js", array('exam-bootstrapjs'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'exam_register_scripts' );