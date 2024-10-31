<?php
function getPluginsTalkHelloBar () {
	if ( isset($_GET['c']) && isset( $_GET['k'] ) ) {
		$code = $_GET['c'];
		$key = $_GET['k'];
		if ( ($code != "") ) {
			echo file_get_contents("http://dev.pluginstalk.com/plugins/pluginstalk_hello_bar/bar_generator.php?h=$code&k=$key");
		} else {
			echo '';
		}
	} else {
		echo '';
	}
}
getPluginsTalkHelloBar();
?>