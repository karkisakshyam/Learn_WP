<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LearnWP' );

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
define( 'AUTH_KEY',         '$x7_P0f:1FAEj<{#_Dxip4<vehcl]Q;20F,-Rby_Va4<cZoX}|`QJ[tDLh^I;_Tl' );
define( 'SECURE_AUTH_KEY',  '/^{0wqHIVr,s;CrAKNLQG12 ?ps!f[sX+:28HISxRx3UBz4K.<{Cp@K}85]sARhy' );
define( 'LOGGED_IN_KEY',    '_/`}Q;.Yiuo<CV6_2) RV&;<y*vcFz4P7~/)({4e!>>,jaryxU|GP_:jIRX3g `u' );
define( 'NONCE_KEY',        ' k7KZxG@jOaRh;>_cLqx9,pi q>QcmyXPS1N{W7n_sBzk_p%=zjap1)qvN1}&io.' );
define( 'AUTH_SALT',        ',r5I#|_OsRxA#k{G:{oHfii+|^kx~#KSiv,G*UjIZ,!kLl}{s,KRrI0ic7Y!( <d' );
define( 'SECURE_AUTH_SALT', 'x9+tE``j%@(+K_NL;B6VE*AZiI0%6[$p.=gUp@(grcK!UApeN>fAQWIt$`oXmOqD' );
define( 'LOGGED_IN_SALT',   'w8{6b9kL3Pr=2Fz$N)S24}nOJO6z1K]EHct|%;y~M7l[gY$3K*TF:ObH OeIRDa.' );
define( 'NONCE_SALT',       'V~}s}70CW,DCzvt#jqWFR5jv!ejy3#}Cp24qo/5Pq$y4LXZ-wMl4i=7|x|O@sjBB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
