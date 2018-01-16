<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function skt_child_theme_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 550,
		'width'       => 250,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'skt_child_theme_setup', 11 );