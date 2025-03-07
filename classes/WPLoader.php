<?php

class WPLoader {

	private $cssHandle = "caprese-style-";
	private $jsHandle = "caprese-js-";

	public function addStyles() {
		$baseName = "";
		$theme_version = wp_get_theme()->get('Version');
		$version_string = is_string($theme_version) ? $theme_version : false;

		wp_register_style(
			$baseName . 'style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);
		$dir = get_stylesheet_directory_uri() . "/styles/";
		wp_enqueue_style($this->cssHandle . 'general-styles', $dir . 'styles.css');
		wp_enqueue_style($this->cssHandle . 'typography', $dir . 'typography.css');
		wp_enqueue_style($this->cssHandle . 'home-styles', $dir . 'home.css');
	}

	public function addJavascript(string $handle, string $file) {
		$args = array(
			'in_footer' => true,
			'strategy'  => 'defer',
		);
		$dir = get_stylesheet_directory_uri() . "/scripts/";
		wp_enqueue_script($this->jsHandle . $handle, $dir . $file, null, null, true);
	}

	public function addJavascripts() {
		$this->addJavascript('contact', 'contact.js');
		// wp_localize_script($this->jsHandle . 'contact', 'themeUrl', get_theme_file_uri());
	}

	public function parentOverride(){
		wp_dequeue_script("jquery-totop");
		wp_enqueue_script(
			'jquery-totop2',
			// get_stylesheet_directory_uri() . '/assets/js/jquery.totop-override.min.js',
			null,
			null,
			true
		);
	}

}
