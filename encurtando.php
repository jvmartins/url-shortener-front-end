<?php
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );

if ( isset($_REQUEST['url']) ) {
	
	$url     = yourls_sanitize_url( $_REQUEST['url'] );
	$keyword = isset( $_REQUEST['keyword'] ) ? yourls_sanitize_keyword( $_REQUEST['keyword'] ): '' ;
	$title   = isset( $_REQUEST['title'] ) ? yourls_sanitize_title( $_REQUEST['title'] ) : '' ;

	$return  = yourls_add_new_link( $url, $keyword, $title );

	$shorturl = isset( $return['shorturl'] ) ? $return['shorturl'] : '';
	$customMessage  = isset( $return['customMessage'] ) ? $return['customMessage'] : '';
	$message  = isset( $return['message'] ) ? $return['message'] : '';
	$title    = isset( $return['title'] ) ? $return['title'] : '';
	$success  = isset( $return['shorturl'] ) ? true : false;

	echo json_encode(array("url"=>$url,
						   "shorturl"=>$shorturl,
						   "customMessage"=>$customMessage,
						   "message"=>$message,
		   				   "title"=>$title,
						   "success"=>$success));
}
?>