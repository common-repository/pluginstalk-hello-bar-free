<?php
/*
Plugin Name: Plugins Talk Hello Bar (Free)
Plugin URI: http://dev.pluginstalk.com/pluginstalk-hello-bar
Description: Display a top bar in each page of your WordPress blog. You can use it to <strong>display news, important website events, offers or discounts on your products,</strong> etc. The bar is fully <strong>created using CSS</strong>, so that you can personalize according to your needs. Supports <strong>unlimited news</strong> with a read more URL. <strong>Navigation keys</strong> for easy navigating between news. <strong>Automatically scrolls</strong> to next news after every 10 seconds. This is beta version of plugin!
Version: 1.0.0
Author: Sunil Kumar
Author URI: http://www.pluginstalk.com
*/

//Set plugin dirname
define('PLUGIN_BASE_DIRECTORY', dirname(plugin_basename(__FILE__)), TRUE);
function curPageURL() {
	$pageURL = 'http';
	if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

if ( is_admin() ) {	
	$url = curPageURL();
	$parse = parse_url ($url);
	$url = $parse['path'];
	$parse = explode ( "/" , $url );
	$url = sizeof( $parse ) - 2;
	$result="";
	
	for($i=1; $i <= $url ; $i++ ) {
		$result = "";
		for($j=1; $j <= $i; $j++){
			$result = $result."../";
		}
	}
	$result = substr( $result , 0, -1 );
	
	define('PLUGIN_BASE_URL', $result.current(array_slice(parse_url(plugins_url(PLUGIN_BASE_DIRECTORY)), 2,1)) , TRUE);
} else {
	define('PLUGIN_BASE_URL', '.'.current(array_slice(parse_url(plugins_url(PLUGIN_BASE_DIRECTORY)), 2,1)) , TRUE);
}

include ( PLUGIN_BASE_URL.'/php/includes.php' );
addActions();
?>