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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D)Yi}C-p4q:y8ec+L4J:LANt*`@CEQQgPI`BSwxE+knmDD]n|~{;OdMV8P{Ihk4d' );
define( 'SECURE_AUTH_KEY',  ')M-^|/dX?fea4+m<-B=h%AR[@#1<o9I@0kQpR97F1|m=&E..0=njw#{@e_4j(8O~' );
define( 'LOGGED_IN_KEY',    'Dmf.+f{^)jJSFu,7rJ[#UvD0opL}FD(]*B})jhDEZK>%hLdh;(:j 7EH|E|-uDWu' );
define( 'NONCE_KEY',        'H]!o!0D=0+jFb{2jZ;c[IBM#5FER|7Ox#@#^nWO=FvC]1Ia~k,KI v[LxzJ8qlX$' );
define( 'AUTH_SALT',        '-DCsz|f%+|)eU=c@_Y?<k%$5EMKNp5y[-6(58P|aR:T>Amv/zM9d }5jBQQGk:V_' );
define( 'SECURE_AUTH_SALT', 'cUpYcB~vy@T1$meq$&gzgHmK%gaI=M&wSX%H;ZWZj`L$4J;`&g<*yu0j{S,Kh6q7' );
define( 'LOGGED_IN_SALT',   'auV5`a+-T-Z;+,b&:3R^7EKVPSq,P/d7CUAhz xUpiLqK%`5l]1enuw>R|kTX&-_' );
define( 'NONCE_SALT',       '8*ri:)XfX$!#|#FE62}=QcCRQuHi:#9EtSI_{tj]3%M3*c&,YD }i* d+AL.?sWp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
