<?php

function enqueue_parent_styles(): void {
   wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
   wp_enqueue_style( 'main-style', src: get_stylesheet_directory_uri() . '/output.css' );
}
add_action( 'wp_enqueue_scripts', callback: 'enqueue_parent_styles' );

add_action('wp_footer', 'wpml_floating_language_switcher'); 

function wpml_floating_language_switcher() { 
   echo '<div class="wpml-floating-language-switcher">';
	   //PHP action to display the language switcher (see https://wpml.org/documentation/getting-started-guide/language-setup/language-switcher-options/#using-php-actions)
	   do_action('wpml_add_language_selector');
   echo '</div>'; 
}