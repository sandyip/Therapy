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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'therapy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ip-O c_f#I<Bb@|EWr,M@I5ZNuSr}]?~Bn[8:c2s&-]!wAl2!fO%NudSBcjh|zqj');
define('SECURE_AUTH_KEY',  '`;F8B[=+;^l+Qd$~[3vJ-L(<~.?>_xTvmr^jO=R~6+TL=- WGEAkIP4a-OxwyITE');
define('LOGGED_IN_KEY',    '(3K[|2 b,7R+17TLaQ4xQwgTq&qGbuwn+D7fQFh*o^<.~6tYeehjkC=y@MV0r-Cr');
define('NONCE_KEY',        '75F^y2At),$Vv<XN_XD--G3|i4#!YfcZPhDU$+f98J+8|Rj6@%9d`2r]JVJ_T+WU');
define('AUTH_SALT',        'v-W-):hvShwUq-cL{o$2UD-b.r=kd+ta/=+HCX6I:<yY$Ga>-Ur6DM|+fc|bm(CY');
define('SECURE_AUTH_SALT', 'R9(l{qR5(Ux|yKanb_|<_u6Y7Fb|-H-6>Zf6M-6%rR+*q<nfN|op%Mb=<?/?f.<3');
define('LOGGED_IN_SALT',   'bz)-wwlArGcBw/D2moaj?A=g?-NS.VNz|h7-/K#,1yd<tV]tMx|}1Q1-2:#A|=3`');
define('NONCE_SALT',       '8$/3=[<-UakPWtq&4--zs:4p:1#%G=,D^:XjUEg7dA+ZD[&IgC!;#5CLcBmh.&D<');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
