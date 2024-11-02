<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'ITSEC_ENCRYPTION_KEY', 'Y1JuV1oja25yciAwPk0gejRyUSE7aD0wMWJCKXNQWHpbPjV1V0EjWShtfEFoZEc+Y1ktdi4hPWlwIGVPWnRTPA==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#N/G o<|zE6+F`Xj{4x~R#;F(w=R9c mOs_{G.:d*Eg)Z9^)GEPWgMx&ClC3k7On' );
define( 'SECURE_AUTH_KEY',  ';}k~J]!$z|e1w e2r.YwP2t%5J5zfwDCY!b[<UvCA#GLH1|vk@CMK;Qb[]Bm%={?' );
define( 'LOGGED_IN_KEY',    '9Ry2ral<:zr&bGg!~H{n&]~b|@AmV=eL>XmbgFpL$x718Z>q?l-o^u_3B{HWp?O}' );
define( 'NONCE_KEY',        'rA$Q0n~HGOW[2L.DFB%a&O/} BjxF2*yMb7GZ%zX+a-*xXT(=Az WvZPG&@&@45-' );
define( 'AUTH_SALT',        '5-uV{:b)t@z[kY1!r[WstnhBqZ{sH-rI|dKw}n0iO&Jh-<S_]B.q|/587Ob8!IsI' );
define( 'SECURE_AUTH_SALT', 'zJ`( 3W6D[xS-U,{y:?RlF{_9$J3AOUa(XW~`3tos&[])Vspz|e;}N^TwHu6qJ0c' );
define( 'LOGGED_IN_SALT',   'P0^YmoA+M@?qCk0RfhX5Xdp3-&9_/;`E5IBd_.j9CP^s$htA0N9Q{JiY[<>L#gg,' );
define( 'NONCE_SALT',       'XvcO}EqE,to1h0Qsh0s-5cn`t4yOU K?R+6M$aBVM#hmOif[)/f8!8/;ukJ[|Y*C' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
