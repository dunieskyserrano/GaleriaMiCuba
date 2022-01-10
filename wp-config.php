<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'galeriamicuba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ',/6A[,i}7?~a1+ZG]tP_M)A:X){F[e[eO{70Tq(suKIyPIw(fu~GQK=!E$Z;YfTi' );
define( 'SECURE_AUTH_KEY',  'O[usS8[IcDLoZe# qcL x/Jr^o@:AY:De(Hb^F[;?FK:nd+ClG+{N%9[`Nt]wf O' );
define( 'LOGGED_IN_KEY',    'X0>/uX^PBk49HBx^n>i`;==j- uN(L6@mD~2mI}`^ES5.](I1KO+iEv9FU%vLh?t' );
define( 'NONCE_KEY',        'l/{#IFj?J>[Tv&i^d:@d3+YV;r_KFI kTd8l3xiImU^uSt#(b}Fws!~&zt#/~3tj' );
define( 'AUTH_SALT',        '],eDB>x3y`4YX.>VWE]yZ@%kWtO5p#<f;v`fd[jyW+?uT4+dP2tVpcI_acYoBd}a' );
define( 'SECURE_AUTH_SALT', 'JdK)=T|D<aKp:gy@0)Pk87HFMWHQEF Gpt3nW2cqTT#3NcS+Djbi >GJPcn?hq,B' );
define( 'LOGGED_IN_SALT',   ')57SVIjP>@V}>S|@m0#A!/RmrJyzrf!Dl!0Yv7k=C>}Y9mY2Y7ioJzrd b7s%Blf' );
define( 'NONCE_SALT',       '6 :8j8G_,3aN]VRxLlk(e:neK[aFLSheJ<l:=%bQ>;kPh_3x^v4<!oJSM(IRva }' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
