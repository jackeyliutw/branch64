<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'branch64_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*l#ci58abySjV *GpGB$ai,qXT[43zH`bB @im0k;~ZI?tD,4)-0:%AlZ}bDs9`.' );
define( 'SECURE_AUTH_KEY',  '7NhL%J]1xC85g%eH{|bI=owMW!2R(brtfK(7]P|(fZf5Bz|d6@:M94|b6g?q;fp}' );
define( 'LOGGED_IN_KEY',    'HYFsg{`aQ1w[tY*bqB,~v/B}eh.Yx8Ny&}]w*GJh49,1TOwU$H>L+bJ-:m&OY9RN' );
define( 'NONCE_KEY',        'Lj|4/%3Xs9SgSD8(+*ae7{T`jKNdHO=W3]Yuyw%IF]fvRWo{|Edq;f;abRUk@FR+' );
define( 'AUTH_SALT',        'j1L^Bd9w3}MNnRGRip>$n-Iye+Hs_g vzCs5w*RQxx?1.`:t~Q}Vdu&X@G}o>:{_' );
define( 'SECURE_AUTH_SALT', '?L Mzq1sH?1|Qn}4pp%l;EFu7Oai&_LGa_L=J!MNGK^ufy[jAb/yuC)@cJ6[8BOP' );
define( 'LOGGED_IN_SALT',   '6FrQI{T5xkLyDFNQ+tMB3Enc0X:tXB$v%iDU?GRx=29S&X<n/BzQTWMy.|xRLixM' );
define( 'NONCE_SALT',       'k7dNwT}{{Wy0b%G(cZ___h^<D&nQvGA%0[aEMi:|c#b.1B$ja~/wPi5/f}b0`ed=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
