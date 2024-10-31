<?php
//Set Plugin Version
define ( 'PLUGIN_VERSION', '1.0.0', TRUE );
//Set User Capability
define ( 'USER_CAPABILITY', 'publish_posts', TRUE );
//Set Base Prefix
global $wpdb;
define ( 'TABLE_PREFIX', $wpdb->base_prefix, TRUE );
//Set Table Name
define ( 'TABLE_NAME', TABLE_PREFIX.'pluginsTalkHelloBarFree', TRUE );
//Set My Number
define ( 'MY_NUMBER', '99.000000000179', TRUE );
?>