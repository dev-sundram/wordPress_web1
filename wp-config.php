<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rohitweb' );

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
define( 'AUTH_KEY',         'Vg0 b{x,0vb?P@Ny>#84fvD:#A+$TL_Q]ZTo+x9-l4s%U;#mYi_i%/qQ4gZ>EL[G' );
define( 'SECURE_AUTH_KEY',  'U0Eb@%WdkBfIlbhF?&k2KVzFizFT,]Nsc,N7ZBvMW|:ymgpt72yAz|_{FVOp{a[@' );
define( 'LOGGED_IN_KEY',    '+d-5OM8c/Wm=mnEUWy 8`Cwn<?Wll}I{R:YP1yl{%yFGGo`bD_^2>byQ[G@I!&#P' );
define( 'NONCE_KEY',        'AnMTEB@vn-j56;jQ`wiatRo)bS.oFBL5Wx#SAqQ+rlZ1i#}&9^xq?fV09c}}MIYO' );
define( 'AUTH_SALT',        '|Qb21oG.x,WnWg`$+oK?e@{uknIss^ .M!@S3< 7GE/[UaT=qp$1x^O9=hWXOkmF' );
define( 'SECURE_AUTH_SALT', '32%452{fXe}5;ypQX%H~=(ZnGZU{yN%/KLNTp$,`4Pf20PK3|hb,(*aD_/KxPRv1' );
define( 'LOGGED_IN_SALT',   '_8Kw3#XAWNb~Cx6_0JG/5X|^f$;*vg4_2/tI-z/m}R9c`JU GlO1~:i`7m8e8L!`' );
define( 'NONCE_SALT',       ';vGD&*YP!juk>$ 80tp] I^epiN+/F62J7`WZ6+.B_WXIUAD.e2u- J,dW]5w5eH' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
