<?php
// Webriti scripts
if( !function_exists('busiporf_scripts'))
{
	function busiporf_scripts(){

		// css
		wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
		wp_enqueue_style('busiprof-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style('busiporf-custom-css', get_template_directory_uri() . '/css/custom.css' );
		wp_enqueue_style('flexslider-css', get_template_directory_uri() . '/css/flexslider.css' );

		wp_enqueue_style('busiporf-Droid', '//fonts.googleapis.com/css?family=Droid+Sans:400,700' );
		wp_enqueue_style('busiporf-Montserrat', '//fonts.googleapis.com/css?family=Montserrat:400,700' );
		wp_enqueue_style('busiporf-Droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' );

		wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css' );

		// js
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' );
		wp_enqueue_script( 'busiporf-custom-js' , get_template_directory_uri() . '/js/custom.js' );

		if ( is_singular() ) wp_enqueue_script( "comment-reply" );
		require_once('custom_style.php'); 
	}
}
add_action('wp_enqueue_scripts','busiporf_scripts');

//Enqueue Customizer css
function busiprof_enqueue_scripts(){
	wp_enqueue_style('busiprof_customizer-css', get_template_directory_uri() . '/css/drag-drop.css');
}
add_action( 'admin_enqueue_scripts', 'busiprof_enqueue_scripts' );
