<?php

include_once("classes/WPLoader.php");
include_once("classes/WPCustomizer.php");

function load_styles() {
	$loader = new WPLoader();
	$loader->addStyles();
}
add_action('wp_enqueue_scripts', 'load_styles', 20);

function load_scripts()
{
	$loader = new WPLoader();
	$loader->addJavascripts();
	$loader->parentOverride();
}
add_action('wp_enqueue_scripts', 'load_scripts', 100);


function add_google_font() { 
	wp_enqueue_style( 'merriweather-font', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900' ); 
}
add_action( 'wp_enqueue_scripts', 'add_google_font' );

