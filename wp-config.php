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
define( 'DB_NAME', 'menu_db' );

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
define( 'AUTH_KEY',         '&HzBp<9b*Iy6`Q- -fnH<d35,%j<{*Y.2w`zrG:]9`qlQH|0yK{Sg54C%sw5pdv$' );
define( 'SECURE_AUTH_KEY',  '5un?k|iy_46K5LBy+rBl@M<O }^bvz>~Bx!K0Dn@M)r-jGM6O*nJ$kjWy|UB5Ggw' );
define( 'LOGGED_IN_KEY',    'cKTXuCEFarz:G 8P(vUMi}k=xIAo&h%m,RQI)b#Mbl(.S~Kld_@r+PZIfcPCgZvq' );
define( 'NONCE_KEY',        '~n4Pe+kcUo%WRs*#)O.p,.bpn[rMLw0-j7$XL4|=w%ao?TDa9B9zW*wd2qzk1VH8' );
define( 'AUTH_SALT',        '{|1r^.k8C>{CBC;UQA:(m-q*9@gXg/6_3e C0-,o{5x0)Ryi_GlA360 ~orU81/L' );
define( 'SECURE_AUTH_SALT', '1~uXObm<oqhk/9zC?d1P:FX2wXV/im^]TL/8nuS M@N?*R.CQ;~3TDe<F+Mjm&W9' );
define( 'LOGGED_IN_SALT',   '{BI-1BMh-9exBUW>4Bq%*1{KSh Kak2mCL!iS9D-^&:jF<wax3|L~^pmu^f)(>ZD' );
define( 'NONCE_SALT',       'F[@1|1m}!ADxf8bg[LjL_4Q{(jB=iY-vAc7I=T=8yW<6{1O_@,^D[?@>5!?5I08V' );

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
