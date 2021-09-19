<?php
/**
 * Init Styles & scripts
 *
 * @return void
*/
function lasaphire_videomodal_admin_styles_scripts(){
	wp_register_style( 'lasaphire-videomodal-video-uploader-style', LASAPHIRE_VIDEOMODAL_URL . 'admin/css/video-uploader.css', '', rand() );
	wp_enqueue_style( 'lasaphire-videomodal-admin-style', LASAPHIRE_VIDEOMODAL_URL . 'admin/css/admin.css', '', rand() );
	wp_register_script( 'lasaphire-videomodal-video-uploader-script', LASAPHIRE_VIDEOMODAL_URL . 'admin/js/video-uploader.js', array( 'jquery' ), rand(), true );
	wp_enqueue_script( 'lasaphire-videomodal-admin-script', LASAPHIRE_VIDEOMODAL_URL . 'admin/js/admin.js', array(), rand(), true );
}
add_action( 'admin_enqueue_scripts', 'lasaphire_videomodal_admin_styles_scripts' );