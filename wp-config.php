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
define( 'AUTH_KEY',         ' XeWKgN}mT08XEE4~80 ahyaVwX#|--vgA{N>/ks6:|SGs)|6@4LL%$d,<8pJ&+;' );
define( 'SECURE_AUTH_KEY',  '$)G<s[0V<%+zh?0Cbf7{:r]Z%+CZ%M`bV7]=lPduiQPar1E14CF=^<Lu{+uQfyJa' );
define( 'LOGGED_IN_KEY',    'mKgCS=9yZ+k9qvFSK<3E7nF%}m}mf`8G$T3fF*oy0;mijis*x+NNCH=U[Wg.baV$' );
define( 'NONCE_KEY',        'F[#bi|R2G8YXN-)?cH#CL?kK:UmJt7WaA(eO_eRL?AgtG^1n-.GTpA[qcyMv6qqj' );
define( 'AUTH_SALT',        '?(iy5P|24~P8$0K<bwvwVL^bzTi^_Q-,ap/l9#E$g6V!iV[)NLfe2d~<mTVUm~ f' );
define( 'SECURE_AUTH_SALT', 'N/Z:8YxT2mJB^$42l[8Hj$qA74)G9G[0ik.XLFJcL+bPM_J^$W%;AXQ^p8%==85a' );
define( 'LOGGED_IN_SALT',   '&9#G8zMd|!-Q@7e9o;yuJH0Y%=_%WEUu}e+g,@I)gr~!DZo:h@ib&odgO2|A+DQn' );
define( 'NONCE_SALT',       ':`I}:AAQE~tPCx<UsUyEs/ll|v<B-l6E`lb$d!OFPBWo_zS-*?]N0&`KSxHw eUf' );

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
