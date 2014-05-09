<?php

function perbanas_cssjs() {
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('perbanas', get_template_directory_uri() . '/css/perbanas.css');
	//wp_enqueue_script( 'jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),'1.3.1',FALSE);
	
}

add_action('wp_enqueue_scripts','perbanas_cssjs');