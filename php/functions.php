<?php

function addActions () {
	add_action('admin_menu', "addMenus");
	add_action('wp_head', 'pluginHeader');
}

function addMenus () {
	new MenuHandler ;
}

function pluginHeader(){
	$dbHandler = new DatabaseHandler;
	$code = $dbHandler->getCode();
	if ( $dbHandler->isActive( $code ) ) {	
		$obj = new KeyHandler;			
		?>
		<!-- PluginsTalk.com | Hello Bar (Free) Plugin | Start -->
			<script type="text/javascript" src="http://dev.pluginstalk.com/plugins/pluginstalk_hello_bar/pluginstalk_hello_bar.js"></script>
			<script type='text/javascript'>
				$(function(){	pluginsTalkBar('<?php echo "$code"; ?>', '<?php echo md5($obj->getKey()); ?>'); window.setInterval( function() {shownext();}, 10000);   });
			</script>
		<!-- PluginsTalk.com | Hello Bar (Free) Plugin | End -->
		<?php	
	}
?>
<?php	
}

function getter ( $type, $name ) {
	$class = 'Variables';
	return call_user_func_array ( array($class, 'getVariable'), array( $name, $type ));
}

function aboutPluginsTalk () {
	include ( PLUGIN_BASE_URL."/pages/aboutPluginsTalk.php" );
}

function pluginsTalkHelloBarFree () {
	include ( PLUGIN_BASE_URL."/pages/pluginsTalkHelloBarFree.php" );
}

?>