<?php

// Add scripts and stylesheets
function nawaal_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/build/css/main.min.css' );
}

add_action( 'wp_enqueue_scripts', 'nawaal_scripts' );

?>