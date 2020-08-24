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
define( 'DB_NAME', 'airoffreedom_db' );

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
define( 'AUTH_KEY',         'kgw/!F~|+Q}kwWC>yjr{A<h*3PC8j0=&c$&f@lsg>X/r}N:1!Ec;DX_DAf_Bz@]}' );
define( 'SECURE_AUTH_KEY',  '@q6O!+>mx:MHh`GZvEhtz2E4[{EUI@?7UsT&4/f]6M`Gzg3.ny)i% VH1Yb huCY' );
define( 'LOGGED_IN_KEY',    'lD#tfg1ieipu_mi>L?EAY_|?kk-i*N0wy|_*c6>g>oiEe(V]T&)t,^l~@Y#`,3V;' );
define( 'NONCE_KEY',        'vf7Q4d$i2zcNm4uz+5|iy:oq{?@;NGxZ{n[}T_F**N?xCn&l| Ys`QW VoU05LKG' );
define( 'AUTH_SALT',        'xH3$IcRhPbQ>Eza}&P<+Ng5ypmrmT3>wjpd9)iP%Uk0v|#y9:J$a>=H[<5;v!e  ' );
define( 'SECURE_AUTH_SALT', 'P:_CqDRMH[mqH}PFP`|[=l/X]kG^@Fu)wk8>U:K-DdU{S}zB~hL!B&4+o=Wwe3z!' );
define( 'LOGGED_IN_SALT',   'v H|?:BjnqB&B[(HjcpRN7&a;b`w9piMo,pfpXnS{iGyP,zvI~qSB4g#vQggu~pS' );
define( 'NONCE_SALT',       '_LAB.<-X=3 <; MQ@Ps3pP)VW@[v9@E>p&a(3+ ?,F?B+a0Yg(L|OPg[?G?sczDM' );

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
