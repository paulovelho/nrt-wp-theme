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

