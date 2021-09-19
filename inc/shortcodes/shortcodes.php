<?php

/**
 * La Saphire Video Modal Wordpress Shortcode
*/

function lasaphire_videomodal_autoload(){
	$lasaphire_videomodal_video_id = get_option( 'lasaphire_videomodal_video_uploader_field' );
	$enable_videomodal = get_option( 'lasaphire_videomodal_enable' );
	$expire_time = get_option( 'lasaphire_videomodal_expiration_time' );
	if(!empty($lasaphire_videomodal_video_id)){

		$return_html = '';
		$return_html .= '
		<div data-enable="' . $enable_videomodal . '" data-expire="' . $expire_time . '" class="fullscreen-modal">
			<div class="video-content-container">
				<video src="' . esc_url( wp_get_attachment_url( $lasaphire_videomodal_video_id ) ) . '" id="video-modal" width="100%" autoplay muted controls></video>
			</div>
		</div>
		';
	};
	return $return_html;
}
add_shortcode( 'lasaphire_videomodal_autoload', 'lasaphire_videomodal_autoload' );

