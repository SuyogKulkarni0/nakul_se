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
define( 'DB_NAME', 'nakul_se_db' );

/** MySQL database username */
define( 'DB_USER', 'lucifersk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Skaru@143' );

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
define( 'AUTH_KEY',         '=x)]K]PO<;mqGD:Ew/qC!$pv`B_3i,(_jCp:y}.>[L0/3gNacT6Em0|Ep$5%;h=e' );
define( 'SECURE_AUTH_KEY',  'xmQCuZv#Aa=)KLGgFxq+a{1UDeDpqmdUq$j<=^fA5Ax?|XlgH9<1TK=i=ds]HU2v' );
define( 'LOGGED_IN_KEY',    'b^Iw&_P3-|<}Z?`j0rk!$:?wMA2)+lkWI-i0Tgg#L.j-zI`4ex49~Z (xKR!v>KB' );
define( 'NONCE_KEY',        'wur~%9#:@Jc1W0^?{)tF4hEz>R%=:z56kW#%)l]k[Li?/Sf,E;Y=ijr>>J&c}+3Q' );
define( 'AUTH_SALT',        'Mp,.S%5>Ai(:gDNVHQ}XS3/j]WP%8s^=-#&P[9)Ei`qnBW;I#m|,!VFCY,Fs7%DX' );
define( 'SECURE_AUTH_SALT', 'I=T6D7BZ%{~<>pdcHr@h>t7c7$0z:&VG6W>tLP5qeD@;5Nff=C^yq.1B,x1sqHbW' );
define( 'LOGGED_IN_SALT',   'uUe4ZACvrh[hFV.zk+!^:Io&Qz6XCK%z_Vl}SA:JheSg+|LEuD! j(wk5Rjxaly|' );
define( 'NONCE_SALT',       'X.LUsfYb;(atq1!rf[lm;Q|^7p@!.&6V7p+0*,4%hmQs|AQNvx]j>60@qVU#fY#o' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
