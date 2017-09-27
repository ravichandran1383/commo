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
define('DB_NAME', 'commodb');

/** MySQL database username */
define('DB_USER', 'commouser');

/** MySQL database password */
define('DB_PASSWORD', 'como#9!');

/** MySQL hostname */
define('DB_HOST', '35.202.240.70');

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
define('AUTH_KEY',         'Xt^%s:p<jTOGD>HL,t%T-lRhRW3V{m~ae$cbHct:i1^R5q@LW_b;=3-wUCo5zMhU');
define('SECURE_AUTH_KEY',  'IwnW:z;I#y=l]egc/]G`/Q0Y.26h4PWdl@8mjYj!h6Pun-ZdaeCuL`V2.FC1Sd*U');
define('LOGGED_IN_KEY',    '/Y@f(ax43(~VRJVR{+<4RrFE72tH!51VU~@!wle,4%q}.MPQRF]}))uQ+Svdm[8n');
define('NONCE_KEY',        'xLx%hjoOdH,5u!wHmm]}O{!d--Z9(UJVJP_l>9 #kD9-:+lDrQs>9umD{PjcbgzR');
define('AUTH_SALT',        'NC1x)3q<i=LfpJA*{bGcPHv9O1Xj`XyuNs)lVX6@k1vSD~;*%_5IxR6lqU16wdi;');
define('SECURE_AUTH_SALT', 'k&FC&g>EWtQ->>T AuF:4(MumG_DR`dq1xynyEW|P9zt# $-dxgN.9ey:i#Eph~q');
define('LOGGED_IN_SALT',   'Wi9yrZB^w_AbyuCWtC@U?9?/,VC:PPaD@E^/oo&8+uEFznRr?T{v{#~sOcX;4V:v');
define('NONCE_SALT',       ',06#rstYbn:5tIPwH48tQ(JiMHW?VGEAN-aZjWUa0@3Eln@EPSoqv-;41X.{INI5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpsc_';

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
