<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'developmDBicdf4');

/** MySQL database username */
define('DB_USER', 'developmDBicdf4');

/** MySQL database password */
define('DB_PASSWORD', 'vYNE36yeSK');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h|9[-]-lWteODaL]-2_xil_tePN7@n|vgRoYJ8VZJ4|C0!s@oZJkVG04RC:~XI3<E');
define('SECURE_AUTH_KEY',  'x]eLiaL6A]+;*qm.qaLiTEI2.uK4|w:~-l_pZKh9[D9[-:~pteO9WH1~zjgQnUJ0N');
define('LOGGED_IN_KEY',    ']ladthSDaL5#D]+l_tePmWHDaL6#A]+mJ4zw:@oZwdN8ZK4|8:~d-oZdOlWG1O9[-');
define('NONCE_KEY',        'F!,B|z@r<,jXfrfnMBIUIQ7{7F3$^v,>$cjYjrgF3BNUJ>0,08}rzn6]2xmt*tx');
define('AUTH_SALT',        'J>$^v^>@cQUkYcQ37YBF4@!*ema9HiHPD.]L]*<m<{uimPquXLP2TbA6+6E.y*f');
define('SECURE_AUTH_SALT', '@ZNjA6QA{^{^,nXf^fUbBbjI7B,FIyHOD#]~;2+pxWe*ilPDLWeT6D_DL]2#pt.x*');
define('LOGGED_IN_SALT',   'ZhSG[:O15~s-#:_hpdtxaOW5DeHL;_]5D2+~h_]pxlPSshoOVKZhGOC|[K:1-ow_[');
define('NONCE_SALT',       '+N4|w:@oZwhVCZK5[G1_s[-hSpZK5SD:~YJ3,B}@n,vgQrvg7BRFN}!,F>}!ko[sv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
