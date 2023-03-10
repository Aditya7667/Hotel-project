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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'Ng9(609S9@w^[`h.<YLnGu=(p9AOS*$ju|;vf!Od(tmA1>a|P#e4;z(wtxr%@j~i' );
define( 'SECURE_AUTH_KEY',  '~0K?;b=,O`Z@i&8R+?>A3}&NBbhAgs[:rW*0yI$!Av+!lW7yu2<p};&tDiRp+]sH' );
define( 'LOGGED_IN_KEY',    '*xxzfM;`{fn!(Qj&!|.G#0;IdT9923GUauAK3!*3pkaL2?&_*3]:(`xt2f4-[ps)' );
define( 'NONCE_KEY',        'm{>`9NcUTaEyxF6BPWp-]!tBF+Vqw5O#yy{afb3ca4s+/]W#!8zPro-9R^4Sot+e' );
define( 'AUTH_SALT',        'uq*}n#fA_B,yROLH_P[figD3OE(cQV1Kt*)qUr=*kDp}N(a`[U[h9&)PNoxq;K|7' );
define( 'SECURE_AUTH_SALT', '3=.Nls`N :i~dd{+/W.ipgIuz 0&s5vCbE*wn~Q{r]O{0(eW6a0XI$_QnrZu7KLL' );
define( 'LOGGED_IN_SALT',   '&5.G~>uA]4LApWWS>6Ipq(/xM3]Ms_jwj:yWup^<QBKmx.~Km{sz^m4,zGvbN&!x' );
define( 'NONCE_SALT',       'hyJA:0AONa5FVtV9xGaKChUl8)C)lV5KPNMH_++1WY!>I%`aIA]= !YFKiic~$^1' );

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
