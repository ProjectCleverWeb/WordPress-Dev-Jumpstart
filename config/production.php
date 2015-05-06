<?php
/**
 * PRODUCTION CONFIGURATION
 * ========================
 * This is how WordPress should be configured on the production server. (pagoda box)
 */

// Database Constants
define('DB_NAME',          $_SERVER["DB1_NAME"]);
define('DB_USER',          $_SERVER["DB1_USER"]);
define('DB_PASSWORD',      $_SERVER["DB1_PASS"]);
define('DB_HOST',          $_SERVER["DB1_HOST"]);
define('DB_CHARSET',       $_SERVER["DB1_CHAR"]);
define('DB_COLLATE',       $_SERVER["DB1_COLL"]);

// Environment Constants
define('WP_MEMORY_LIMIT',  $_SERVER['WP_MEMORY_LIMIT'] );
define('DISABLE_WP_CRON',  $_SERVER['DISABLE_WP_CRON']);
define('WP_SITEURL',       'http://'.$_SERVER['APP_NAME'].'.gopagoda.io');
define('WP_HOME',          'http://'.$_SERVER['APP_NAME'].'.gopagoda.io');

// Key Constants
define('AUTH_KEY',         $_SERVER['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_SERVER['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_SERVER['LOGGED_IN_KEY']);
define('NONCE_KEY',        $_SERVER['NONCE_KEY']);
define('AUTH_SALT',        $_SERVER['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_SERVER['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_SERVER['LOGGED_IN_SALT']);
define('NONCE_SALT',       $_SERVER['NONCE_SALT']);

$table_prefix  = $_SERVER['WP_PREFIX'];

define('WPLANG', '');
define('WP_DEBUG', false);
