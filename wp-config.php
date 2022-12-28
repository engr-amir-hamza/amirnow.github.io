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
define( 'DB_NAME', 'amirnow.me' );

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
define( 'AUTH_KEY',         'AcAx!:$wv17T+H:,v3d~f1kI2rDmw[iS!OIg%3p.z*gxu(Go0&O{S*HGwA~aD6UX' );
define( 'SECURE_AUTH_KEY',  '`YiON-XNSTMqe)sZJw;,^:RPk:^f|v*@dt0H`Ovi0R2;.n,r/>VyfEPCIDx~a>V/' );
define( 'LOGGED_IN_KEY',    'OEoo>GFUkN,uV27*?fx_?>[V?BQt[i^{J(e;dl`GvB{MJ84Q bitKxZ`a@J`B#_!' );
define( 'NONCE_KEY',        'adV&Ets8O]p4DQ7uBUbhasyGzU.a|e.r02iIf}1Oi_*.n$yKh]gY7X+fc%<{eCpf' );
define( 'AUTH_SALT',        'S2zp@AOPd?(`z JzXT5)i%qGc>T1DUP~~*(4@M%Lr6abD,bfX(Bk[WMVjiL7}zm,' );
define( 'SECURE_AUTH_SALT', 'xZh3-a+:bmOO;-Uc`L~R;3hiVLB`}O5oz*ay<yw}`osxQ{W@n+m]xl#HsGa/[]@_' );
define( 'LOGGED_IN_SALT',   '/e!kkj(C,R9AZ,!m)37fX)V ov|5)r5Ry8vWrjsX(N(<%_4ns)cZ8nm)k&>vo0!s' );
define( 'NONCE_SALT',       '@5O5D)/)cz+h_KVa7#ZB6k>V4C|oqLZb4p!^dv1-0s!yl!K&]);B<,%#t<MPHkrl' );

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
