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
define('DB_NAME', 'wordpress_framework');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
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
define('AUTH_KEY',         'b)[XpW)^>763,pxN)0mk)%&bm^~px:uBf.hm&.p}f?e;6u_O&wdE}Z@|H!(;{X!P');
define('SECURE_AUTH_KEY',  'I9e2pWWMUbPVBM,+,><ew4]Rh&LJTsKMJ6mYShN5+]0o6PA=v|X[s|~uj)IH3W`I');
define('LOGGED_IN_KEY',    '7|Haxf%M<a)h*=bJC`d&[:sQb/b`H=?;_BsiwuLQ+<7aT=4mOspHYk;kAxnVaHIA');
define('NONCE_KEY',        'GN:=<]WI{d^|/=CUNg0@3+|mOrwAVTz;<*IY<c|`]P[UaiJjQQA-?%]{!LeerV$2');
define('AUTH_SALT',        'sP.yaEh%5M:3^:-T(isKgFa[{M>x/Zhi/}q+w`JM]imW^/zSBaZ)o>/o=m6:JDQ~');
define('SECURE_AUTH_SALT', ']#7rgy{rL=05CVw)xxgN$56m7mB}qq{VSV~!{klu?8/ckNBP7V=xvghF40j?b^-c');
define('LOGGED_IN_SALT',   'e3ZQuspH{;PWCM#^fUJ ^)^C;U5`PJ:JgP:^D*A6.6,cM?B8F1Umh+jf+^>u:=0t');
define('NONCE_SALT',       'V82GB+:|H*XB!oaJSlD2@6(TiyOD1XGcrJJ}tgTNIVp~i%]n6lU<m)+X~fJf6ao0');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nw_';
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
define('WP_DEBUG', true);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

// define static variables
define("SITE_URL", "");
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define('WP_CONTENT_URL', SITE_URL . 'wp-content' );
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins' );
define('WP_PLUGIN_URL', SITE_URL . 'wp-content/plugins' );
define('UPLOADS', dirname( __FILE__ ) . '/wp-content/media' );
$theme_root = WP_CONTENT_DIR . '/themes';
define( 'COOKIE_DOMAIN', SITE_URL );
define('WP_CACHE', true); //Added by WP-Cache Manager
define('WPCACHEHOME', dirname( __FILE__ ) . '/wp-content/plugins/wp-super-cache/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
