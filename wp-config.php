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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\XAMPP\htdocs\BaoChauWebsite\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'ad_baoChau');

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
define('AUTH_KEY',         'u0.U5g{edJZ*D%E(IsK__F*R?hti#axp=XL}Qu-1OTTo+zOXL0|nocj[W%?vRpCQ');
define('SECURE_AUTH_KEY',  'NJwi}%$>k1x(3{W6Gq%8!cdouFI)AsdD=q? f?PndkhaY/mE0T:}ce84VN^cV9]O');
define('LOGGED_IN_KEY',    '`#)G#QZV={m;:A+U%CZ6c%Q-LQNfQ%&?8-PKkY^$V`p]BC=G?1F#F 79~i_Y;w6+');
define('NONCE_KEY',        'dD/B>kmUm%t%)$_aTER%N7.Q l09>!n%?)YC+E9)J%WVHc >C`t8p0ky>E$fV>vp');
define('AUTH_SALT',        'CmTVNOEh0%gfb+##N)u]f;0kLGIzS[GbJ>8Owtkv_pR.~bK mFJO3c[UOk&PZGm/');
define('SECURE_AUTH_SALT', 'rV{@rsV9/{?7{FNocq+<)6O6&R)JX#b8~:x-?T<|Q0N:-)Yk+bn#Uf?r4#}P-nBk');
define('LOGGED_IN_SALT',   '&T:$fD&8Pf0nUEwdtC:|q3d$ofa[}-<T+pgU]`U%61%JS=o[I[_pL<7z]0?&iD$E');
define('NONCE_SALT',       ']@fbs<9.}<X|Jo#Ep{0<f-7+rA^t~Vs%W`pQREp/zH1|L6sb<A5^%55t~l;Xs$y(');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
