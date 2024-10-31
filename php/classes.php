<?php
class MenuHandler {
	private function _checkMenu($handle, $sub = false) {
		if(!is_admin() || (defined('DOING_AJAX') && DOING_AJAX)) {
			return false;
		}
		global $menu, $submenu;
		$check_menu = $sub ? $submenu : $menu;
		if(empty($check_menu)) {
			return false;
		}
		foreach ($check_menu as $k => $item) {
			if ($sub) {
				foreach($item as $sm) {
				  if($handle == $sm[2]) {
				    return true;
				  }
				}
			} else {
				if($handle == $item[2]) {
				  return true;
				}
			}
		}
		return false;
	}
	
	function __construct() {
		if ( !$this->_checkMenu( getter ( "__SLUG__" , "_main" ) ) ) {
			add_menu_page("Top Heading Menu", getter ( "__MENU__" , "_main" ), USER_CAPABILITY, getter ( "__SLUG__" , "_main" ), getter ( "__FUNCTION__" , "_subInfo" ), PLUGIN_BASE_URL.'/images/logo_16.png' , MY_NUMBER);
		}
		if ( !$this->_checkMenu( getter ( "__SLUG__" , "_subInfo" ) , true ) ) {
			add_submenu_page( getter ( "__SLUG__" , "_main" ), getter ( "__TITLE__" , "_subInfo" ), getter ( "__MENU__" , "_subInfo" ), USER_CAPABILITY, getter ( "__SLUG__" , "_subInfo" ), getter ( "__FUNCTION__" , "_subInfo" ) );
		}
		if ( !$this->_checkMenu( getter ( "__SLUG__" , "_subPlugin" ) , true ) ) {
			add_submenu_page( getter ( "__SLUG__" , "_main" ), getter ( "__TITLE__" , "_subPlugin" ), getter ( "__MENU__" , "_subPlugin" ), USER_CAPABILITY, getter ( "__SLUG__" , "_subPlugin" ), getter ( "__FUNCTION__" , "_subPlugin" ) );
		}
	}
}

class KeyHandler {
	
	private function _generateKey () {
		$k = $this->_curPageURL ();
		$kp = parse_url( $k );
		$k = $kp['scheme']."://".$kp['host']."/pluginstalk.com/ramonasunil.lv";		
		return $k;
	}
	
	private function _curPageURL() {
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
	
	public function getKey() { return $this->_generateKey(); }
}

class DatabaseHandler {
	
	private function _createTable( $tableName ) {
		global $wpdb;
		$sql = "CREATE TABLE $tableName  (
		  blogid INTEGER NOT NULL,
		  code VARCHAR(100) NOT NULL,
		  active CHAR NOT NULL,	 
		  PRIMARY KEY (blogid),
		  UNIQUE (blogid, code)
		);";
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
	}
	
	public function getCode () {
		global $wpdb;
		$blog_id = $_SESSION['blogid'];
		$code = "";
		$sql = "SELECT * FROM ".TABLE_NAME." WHERE blogid = $blog_id ";
		$results = $wpdb->get_results ( $sql );
		foreach ( $results as $result ) {
			$code = $result->code;
		}
		return $code;
	}
	
	public function deactivateBar ( $code ) {
		global $wpdb;
		$blog_id = $_SESSION['blogid'];
		$sql = "update ".TABLE_NAME." SET active = 'n' WHERE code = '$code' AND blogid = $blog_id ";
		if ( $wpdb->query( $sql ) ) {
			return true;
		} else {
			return false;
		}
	}
	
	public function activateBar ( $code ) {
		global $wpdb;
		$blog_id = $_SESSION['blogid'];
		$sql = "update ".TABLE_NAME." SET active = 'y' WHERE code = '$code' AND blogid = $blog_id ";
		if ( $wpdb->query( $sql ) ) {
			return true;
		} else {
			return false;
		}
	}
	
	public function isActive ( $code ) {
		global $wpdb;
		$blog_id = $_SESSION['blogid'];
		$sql = "SELECT active FROM ".TABLE_NAME." WHERE code = '$code' AND blogid = $blog_id ";
		$results = $wpdb->get_results ( $sql );
		foreach ( $results as $result ) {
			if ( $result->active == 'y' ) {
				return true;
			} else {
				return false;
			}
		}
	}
	
	function __construct () {
		$this->_createTable ( TABLE_NAME );
		if ( is_multisite() ) {
			global $blog_id;
			$_SESSION['blogid'] = $blog_id;
		} else {
			$_SESSION['blogid'] = 0;
		}
		
	}
}
?>