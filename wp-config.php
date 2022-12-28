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
define( 'DB_NAME', 'amir1' );

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
define( 'AUTH_KEY',         '0d~.=G6WObhy%wQEWz$UE^d{KyTujm81@}|wPmYkX]8Us`jU,srV;>VnEWa9;1wt' );
define( 'SECURE_AUTH_KEY',  '61.gK.*+K#bve%Jj{Ky/VrEm+bDh<gD:[@z~24)OoS/ZED1|p+YFW]*6*Zo}f]Id' );
define( 'LOGGED_IN_KEY',    '(EEDy{V-@w)RqX]_}{U{6e9/c4fn@(+k-Q*a@f8bR2^gN?-XgA2iN23r~K%-#}r!' );
define( 'NONCE_KEY',        'Zd r@kb9Ca3P$?]#Wa}[JaE>OCDwJvJPK#H-ishLZarXKDK,#|-L_I =5y[n]8SM' );
define( 'AUTH_SALT',        'H-t^^~_]gFllO%h1GO1^Z1gUTg:kExdrq<G2s!7V|Uj,B;)LmKMs}4PsE#`86Cw ' );
define( 'SECURE_AUTH_SALT', 'xP7Mum?EmyPuB&ExoJXbx8*m/D:=+bu-@,)zMbCnQ4$3)/E]Jk)z|q/SL-_zNUfe' );
define( 'LOGGED_IN_SALT',   '/!N{|+g]8;[e=P*yx*1,B=U#XlYy_`fjB%#AdY8Q>.hymO7l%FZoXL}XrieY_co]' );
define( 'NONCE_SALT',       '22knKVe4prNl~iyg7Jw_OF;Jg%@4Na=hnNZX<nt[deIMG>9;1(_##O`Dapg%_6Z%' );

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
