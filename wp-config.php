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
define( 'DB_NAME', 'r80726lenc_abstrlabs' );

/** MySQL database username */
define( 'DB_USER', 'r80726lenc_radu' );

/** MySQL database password */
define( 'DB_PASSWORD', '!AdminLencos1234!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','https://lencos.ro/abstrlabs');
define('WP_SITEURL','https://lencos.ro/abstrlabs');

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
define( 'AUTH_KEY',         'EWZS.*$eE$5;TSTqFsl$9kEN5q?0~Kx)?&E;s7m]C>+-r(9.m%JlZA)TE%59{5l]' );
define( 'SECURE_AUTH_KEY',  'Gl2>c8>;*A9s^ 9b,`T>I^RI6()Q9Hg3YRRzLw#Rt]bU/YQ*p[E]a}0^b!u*PYf`' );
define( 'LOGGED_IN_KEY',    'XXXK}l5]tAFbY5W=[s9wca(`pGR[CwWYe{t/b<B/KO+(*<hv!~&4Hn3)LfLN;OTM' );
define( 'NONCE_KEY',        'i6A_s^;{V1ScpU^kV-0|`W!$t/fJ>[6vk R*3O;ne/i$|x Z[s#a5f=i>_l :L5*' );
define( 'AUTH_SALT',        'KcND~%1,Yy}nbC@aK>58YI|.JK+Hu{Ir4`pM@DQRWsmZ#v[+Z,d0TK~XiOly]Ptf' );
define( 'SECURE_AUTH_SALT', 'kofuyVR<USxSs.xXa;vLuQF[DM|ZE>9!zCZLUW#aJH!d.axNR:-{aRFK%|Ku~X;L' );
define( 'LOGGED_IN_SALT',   '8HJ1ck8<ow_i4he ji0,Tq%sAwX8EQ+<!lP*}9YRa!ht@q<Dh~oq kS|~sqU@7%D' );
define( 'NONCE_SALT',       '._O*Q08=h}BD}/QWQg-?Hj[T!5xtkpAH8oJ}e)*3g|3}LGb~~c}WBz#sZ,8>$SXe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'abstr_';

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
