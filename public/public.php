<?php
/**
 * Init Styles & scripts
 *
 * @return void
*/
function lasaphire_videomodal_public_styles_scripts(){
	wp_enqueue_style( 'lasaphire-videomodal-public-style', LASAPHIRE_VIDEOMODAL_URL . 'public/css/public.css', '', rand());
	wp_enqueue_script( 'lasaphire-videomodal-public-script', LASAPHIRE_VIDEOMODAL_URL . 'public/js/public.js', array(), rand(), true );
}
add_action( 'wp_enqueue_scripts', 'lasaphire_videomodal_public_styles_scripts' );