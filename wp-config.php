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
define( 'DB_NAME', 'Thrift-Haven' );

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
define( 'AUTH_KEY',         '@-Gs)gi6 =4`_|9(t~a~m0?k;LkexmMK 8^*-&v%)e$N~O]J}acS~cVj*tD{3ECV' );
define( 'SECURE_AUTH_KEY',  'eLs9J|*jCt>9]?zyv9uW7 d!n_j.Z.]%?5oUy>zd@>.UvQ^m&>F_@7 / m{ZRO)-' );
define( 'LOGGED_IN_KEY',    'NuG5R<n`vbFu7udVZw,!cP1`+9*Ypno{w4~:G5c*NxaN@9S48lV3+M[x{m3d;Zd,' );
define( 'NONCE_KEY',        '8NY_%5o;(D)658hl|q|yqj~/h-5rlWTWYBs$s#`^^+hNDtDf2cQ0O@.9? UXVEA$' );
define( 'AUTH_SALT',        'rL{X|{IQ_svovY$ol[nOD>J[NBT-s)nmv| PKx1is{KPMO02m7lT)&/ gISMJ)jB' );
define( 'SECURE_AUTH_SALT', 'Y~i?_pZpKVH:pQl{I8iDO/=zI.]{n?q}9+wy yZyXj2VK9cP|}A_MR*;bEg|rBV;' );
define( 'LOGGED_IN_SALT',   '%p<cxSLM:%]qjuPA4pmYtP{}tRq9f_EhbQ/H]3QPxp;}s0svPqKCZEj01t]M_w{~' );
define( 'NONCE_SALT',       'peowF|DTzGx}[`Tvti.!Eny{,SY<&KpsCW|W5^V!,7;(4o:J}&Om&#sq(oum>b:&' );

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
