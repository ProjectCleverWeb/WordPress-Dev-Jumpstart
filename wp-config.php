<?php
/**
 * CONFIG
 * =====
 * This file switches configuration based on the server it's on
 * 
 * WordPress already knows to look for this file. Creating a wp-config.php
 * file in the public folder will override this file.
 * 
 * You can set "CONFIG_TYPE" in your apache config file, like so:
 *   SetEnv CONFIG_TYPE development
 */
if (isset($_SERVER['CONFIG_TYPE']) && is_file(__DIR__.'/config/'.$_SERVER['CONFIG_TYPE'].'.php')) {
	require_once __DIR__.'/config/'.$_SERVER['CONFIG_TYPE'].'.php';
} else {
	// Default to production
	require_once __DIR__.'/config/production.php';
}

// Of all the things that are wrong with WordPress, the file editor is the wrong-ist
define('DISALLOW_FILE_EDIT',true);

if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__).'/');
}

require_once ABSPATH.'wp-settings.php';
