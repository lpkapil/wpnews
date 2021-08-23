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
define( 'DB_NAME', 'wpnews' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U=$y*>0 G0}QE7q58&;:NZ.P557u.vPdQ_F0i2=}9m91?*r;H~No<;#r{@l?|<>2' );
define( 'SECURE_AUTH_KEY',  'v3p>~cXB;~.{+Y&QJ[z.9Eo|4B7JgOuq%G8cqE[e+?RR,iS[{@hU>&ubaK<8?fdj' );
define( 'LOGGED_IN_KEY',    '0@z+1-&X+P?R`=M4+)1*TcRc7ZzG4GM==9tf|9j#jM3#4]F[jUVI>zj7SvOKo?7V' );
define( 'NONCE_KEY',        'fBm#g0a!Ew[H2;grhz(SI<r+z</U.6PMub?#xwl`huovk{6Qtkd1i=VSgE[ZhXPA' );
define( 'AUTH_SALT',        'fX[DtDkV*rkdV&L36PYjug7E!!yq7A^8o6/R_9]B?D/1z- SHx?%ulWi[U%X7l77' );
define( 'SECURE_AUTH_SALT', 'KAc,vNthQb]Z{##Vzs+0kRZ:reO$R}hd-zJH VV|K_(a+p-#1j.0kSZ ^P?2:!A%' );
define( 'LOGGED_IN_SALT',   'X|8RG0l=46oIoeDbtloM|*x&O;f07)yUU~1;m6$>du#jP<f{c6vc[gJs$>|<5*`o' );
define( 'NONCE_SALT',       '/CEZi}#XPYM=QzDS63r5`C=bTI* [{@uhYXqHG6<;-KmqBTjAm/OW(#*AG~8&[DI' );

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

define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
