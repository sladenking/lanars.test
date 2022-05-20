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
define( 'DB_NAME', 'lanars_test' );

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
define( 'AUTH_KEY',         '.5AK(2 3j*$SnF.s@VzU3Wp-.v:wj2t-Rc8aJN_h7)YURuAHj>i48|OHI}uqP]` ' );
define( 'SECURE_AUTH_KEY',  '09MYAe2{w^~Cty!,96%j?Y/q]1lEWF^9B~d8{^s{6$GPJp^Z8(u.8QMG;]>B!`;w' );
define( 'LOGGED_IN_KEY',    'C9)n]t7k>^DD2ewq+sSm@Q!9fwCpu9Od#5)Igh_=yc.&O$=~.4v]<(P+mHHz5Qx_' );
define( 'NONCE_KEY',        '+N<~ab{jN8~Tt#?v%%@hVXWU_eQr<V2Ip5/lnO@}{<IQdB53/wfRu@5m9O_Zm<@$' );
define( 'AUTH_SALT',        '2IhsbHyEfb,n:@2ywzE(?Bjf.$^BMpthx<R1m|;1j.a&r)FOZ8Z;&f~pW)#Ed1m^' );
define( 'SECURE_AUTH_SALT', 'YH{X/6-GOP$HZ>^?Mtv-VVXWrn-pvwhD[=E42~&RYM%fnQ%2.iNm=SeSa`w%c]px' );
define( 'LOGGED_IN_SALT',   '1*ja$m9DQLQ]ki e-NMcwbN6<sizB2*wPOq&X/rdI [vL @nZy>eWWtfi 9)<HQV' );
define( 'NONCE_SALT',       'y5U;G*!5lT{3N30I,U6cs=f%ik:s8,oUto`67G<Sz,66}CvF$bF)KlClC2C(zxt8' );

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
