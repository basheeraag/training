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
define('DB_NAME', 'wordance_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root123');

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
define('AUTH_KEY',         '|~.(b]YK^xMqV46}g8Fu)#Wuv$VvP7=<Y%QfrN8$ii@GdX`FnhzU(Wgi^5-aN!0a');
define('SECURE_AUTH_KEY',  'Tba}7!U<4i&u$THd8Ak>UAj)2iQ@K|>bzPS%V+nGNPg{7/n1]Z,_/>[%]&`~ED,V');
define('LOGGED_IN_KEY',    'vn72i#qX-[~v@K><mR+?e0w fByfU;q+pS/ PuYk*A^QyNGTU2,b};6b08.ey%X/');
define('NONCE_KEY',        '@b[Q*c-dAiV_lC~EbnBY[XC!T%7MxW,Y86hXoS,&HQiGftm@DTdz1W|]vGDB2/q)');
define('AUTH_SALT',        'ph@{Kad6S/@5x2wBJ9e:bq3NnMSmj-;zFh[#4~V/IAnlZaU&r<?F&&r:C@c7*%>g');
define('SECURE_AUTH_SALT', '3y-h.(B9AE9Wny]#;HW<WtC7{E(+vbB,B1*d.R67C$D[Nbs)yN%xcU8VfRHxB2Y!');
define('LOGGED_IN_SALT',   '_HS0$&4UNp8z,p+PL)}6*G(L%5%->`C)yL.be{v9H#kC-@Rc_JM1u#,NPK[m=$Jv');
define('NONCE_SALT',       'z2.;X03bkU=lzuOdw)CljyTe2a)`7$(VgVRVHdm6!i3p@UIJP.* blgMW2bsNqLV');

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
