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

define( 'DB_NAME', 'profimeister' );

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
define( 'AUTH_KEY',         'gv|q3Wj;SH;SJ[|[q1Xe?? 3uRND!l=[5ya ~>1T*O*58YnxP^!n`YnOU0RMV6M[' );
define( 'SECURE_AUTH_KEY',  'E4ZeC)G`WPrs8<(2tD2.p6,Ge3;oEE^O_ZjTUA9S1YG/jXI,>vz6Km)nRbkh8W&z' );
define( 'LOGGED_IN_KEY',    'nfL9ua1oz#M*x~KJ6r0)FoUw*o:P`8G#Y{ 5t1Yh Ctu{h48qQj;08=wKe(F.6F*' );
define( 'NONCE_KEY',        '9s_1N3pV*pUu^q3W/Xs)Q03bV}U?Ji9#A$iC*Vlx7v{7}o<]9=Jn/IzDKW5)`7m?' );
define( 'AUTH_SALT',        ',fYg{NHgOsWkx`vc<dDAr+?D`G5?^IBKk/PSZYJxpcEz;kzQ]iSrXPYt#X(x9*%2' );
define( 'SECURE_AUTH_SALT', '`Ej${djo/u$XIlTE[bY 6$s%7dv5-a6Rxe^s yuMS5f YVNHix(o@VvM]p}I<X4n' );
define( 'LOGGED_IN_SALT',   'jw[C?)ZenHh<}/]37&]N[Bz090Wm5!6DKIp$w0,ixTIFXg&mU]z6l-W-Nno~<{FU' );
define( 'NONCE_SALT',       '5dg@K#4)b rVRD`2JV!bO4JebPv7$Ke{ S?%YRM.@z_KrO60%!X+/p?~-k*J{jSZ' );

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
