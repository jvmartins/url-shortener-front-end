<?php
require_once( dirname(__FILE__).'/includes/load-yourls.php' );

//direcionando para a página inicial
//$url = ( isset( $_REQUEST['url'] ) ? $_REQUEST['url'] : '' );
//yourls_redirect( YOURLS_SITE.'/'.'index.php'.'?u='.rawurlencode( $url ), 302 );

//imprimindo a url encurtada na tela
$url = ( isset( $_REQUEST['url'] ) ? $_REQUEST['url'] : '' );
$return = yourls_add_new_link( $url, '', '' );
echo ( isset( $return['shorturl'] ) ? $return['shorturl'] : '' );

die();