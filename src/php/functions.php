<?php
function kvartitant_scripts() {
	wp_enqueue_style( 'kvartirant-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'kvartitant_scripts' );
