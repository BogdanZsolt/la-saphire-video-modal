<?php

/**
 * Plugin Name: La Saphire Video Modal
 * Plugin URI: https://pegazusdesigns.hu/
 * Author: Shiru
 * Author URI: https://www.zsoltbogdan.hu
 * version: 1.0.0
 * Text Domain: lasaphire-videomodal
 * Description: Plugin for Petra for the introductory experience.
*/

if ( !defined( 'ABSPATH' ) ){
	exit(); // No direct access allowed
}

/**
 * define plugin constants
*/
define( 'LASAPHIRE_VIDEOMODAL_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'LASAPHIRE_VIDEOMODAL_URL', trailingslashit( plugins_url( '/', __FILE__ ) ) );

/**
 * Include admin.php
*/
if ( is_admin() ){
	require_once LASAPHIRE_VIDEOMODAL_PATH . '/admin/admin.php';
}

/**
 * Include public.php
*/
if ( !is_admin() ){
	require_once LASAPHIRE_VIDEOMODAL_PATH . '/public/public.php';
}

/**
* Include Settings
*/
require_once LASAPHIRE_VIDEOMODAL_PATH . '/inc/settings/settings.php';

/**
 * Include Shortcodes
*/
require_once LASAPHIRE_VIDEOMODAL_PATH . '/inc/shortcodes/shortcodes.php';