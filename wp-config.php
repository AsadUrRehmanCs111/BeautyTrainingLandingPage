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
define( 'DB_NAME', 'beautician' );

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
define( 'AUTH_KEY',         '(/qlP+T[fPwd2y?Ox0HP(6!2+N3kh^N7(A2gdm1`+6tqpFthCx2P$5m3)({lM At' );
define( 'SECURE_AUTH_KEY',  'fo5nG@4UQ-un0Ps<gq{qINM,Y2b9G$LFZ8EwU,Piv.{7W poFu4ssy@N!?jZz/j0' );
define( 'LOGGED_IN_KEY',    'y7}c@GQP{P)`7lar/)?bfv3AUW)KxD5dtYjVeyJ>(&:$RZXx>(+ipCL%*(!Yb/ Z' );
define( 'NONCE_KEY',        'e9!ci6Zr4%I<D6j~HJ I]AvS*su[:[1ZtHwZe5X<%$S!}KRXT8)8!,MXvpPDes4R' );
define( 'AUTH_SALT',        'WRZ#=`s=UzDmLM(%0hX6pbfrI~#0##4cFShfsuSJ+T1<;7nr1>]{mtJ1CRH2nA8v' );
define( 'SECURE_AUTH_SALT', '3iiN1(jM(%s7D^-> vAkE2KEJ~TGQ?!5^bXe*[Xb%EYgY8/`;JA/ .#$a)fXZc~$' );
define( 'LOGGED_IN_SALT',   '@m+O`2>e*uoiLHo[P,k+?wt~3]]D`/(iDOOJ0-X03Mk?|QHbPG}1MycAGLUTBiT^' );
define( 'NONCE_SALT',       'v9qw<_._BA,Oep( Dk)LT{X5V2?GZh?+w8o8q|m9V eU/^kW0+/<.Y^uVI+;V5*5' );

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
