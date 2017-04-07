<?php
define('DB_NAME', 'leonardomota-wp-lU1Nvp8Q');
define('DB_USER', 'neQWWlahnIvr');
define('DB_PASSWORD', 'vYZzUIoMF216uVkm');

define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '0fevZjelw2bOimln2Fgowg11huIJqVFsvzCdzsrv');
define('SECURE_AUTH_KEY',  'KlKqsqLgeWitIfBLYqRX3MgJ8cZlauFcxLghikPd');
define('LOGGED_IN_KEY',    'kqs1stWExAZzcyofzmlxvP0rTZJwrLkMsQOFcpye');
define('NONCE_KEY',        '5LSTxrM1a9NzVUCnt5TyhKhfp0EAuGGddc7HRWUb');
define('AUTH_SALT',        'o3RLLNxjrJqjQVLD1OU16sFq2PheIIN7lNOL3yyV');
define('SECURE_AUTH_SALT', '0MMeRYzWC71iSR7U5WfZUOTZEevWrJEt6V7QXnn6');
define('LOGGED_IN_SALT',   'p1mmLuhyYc80tr8tJ3UdW6lDwiVEQkyriS1ISTys');
define('NONCE_SALT',       'CCWi8BIaCQP8IS1KVDaSV5WVfHsMMQibgXHotoyz');

$table_prefix  = 'wp_458879f3d0_';

define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);

define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);

/* Change WP_MEMORY_LIMIT to increase the memory limit for public pages. */
define('WP_MEMORY_LIMIT', '256M');

/* Uncomment and change WP_MAX_MEMORY_LIMIT to increase the memory limit for admin pages. */
//define('WP_MAX_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
