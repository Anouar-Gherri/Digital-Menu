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
define( 'DB_NAME', 'menu2_db' );

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
define( 'AUTH_KEY',         '#gGW Tckf0R/!TDTf^I<qNfdrSj%T.{nzbr4HA&v$yz3M/gA0=:Umr}53HFTV%$]' );
define( 'SECURE_AUTH_KEY',  '!Y xCx.C&!i]qZAw]hJTkEseUQ!kqH~H9t05(SC!8!,Kw4j,p.2/:W.dka:,P(nA' );
define( 'LOGGED_IN_KEY',    'TIi~n{hauR;ph/,>/ya)NG 3Ir*hrDTD~;MzRs ,zVz?&Q1}PJB+;Lyy1}OVY~Ip' );
define( 'NONCE_KEY',        '5K=t@&uw_3e3.i!&;Vcci7>rRevz8 X:Wy_]m,tgbSChT|u/`0MOl9 .)vZDW3Z4' );
define( 'AUTH_SALT',        '>^aS #3#M`;&<,NR[$[+03q1qXGnL-J-r=}0XTOnx6J@@*?Qz}apHO)h9@Kb5jD}' );
define( 'SECURE_AUTH_SALT', 'Wz)c9<-V&s~KL<~{9c*IIzJ#B..iU hWt~%s/[<eBY0Oz6YpuOKU34;muX.$rW<x' );
define( 'LOGGED_IN_SALT',   '04/_w`[6)aCu@^/oVDsH|T4{a})kDz8,e<rUbr_UY&T(}e<DaB6pC},Xv-o~Rg#;' );
define( 'NONCE_SALT',       'noxiEiz q< 7uLm$~3wAAid5OAAH:!Rha4_DdSI}WGX4MVshu?$jT8V0s )_rcOn' );

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
