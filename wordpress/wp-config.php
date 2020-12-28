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
define( 'DB_NAME', 'wpproject' );

/** MySQL database username */
define( 'DB_USER', 'wpproject' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shahzaib123' );

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
define( 'AUTH_KEY',         '!E6#J&Z=OPU:EV<~y[oHij>nJ)Fbn`W]:|vhB+mfZln+4KR3bWT1~fX}!e21xve<' );
define( 'SECURE_AUTH_KEY',  'LJ2(w-qjhI*Wb 3^7<=kK rhZjB6Y`!+|x93Ar^;7hT]E;Gno]zPRJpc#cA-o*qS' );
define( 'LOGGED_IN_KEY',    'dLg)~wc%>eAGCA[ WgA(77w:I#~k [0-yuHfH#g@s=dFK%@?Vh]P0?fHZ[%A4A8S' );
define( 'NONCE_KEY',        'Z~DxSU!L1qN5W<pV&j1ZOrkVOp{pp,/C<M;s@CqbI18VTX!*qJd9RbdX`MY`M5*d' );
define( 'AUTH_SALT',        'h_U}WU1kSa?,{XHAY2n!<=?+BoP-S7<`fZ[-JI08Fi=,7Je~`Oj-pp>j|PCkjz p' );
define( 'SECURE_AUTH_SALT', '>G`*,F%mKCVaS^1}2iTvXaHi*GCsp[=lhRw)Ri6+7BowBJq!^qs?9d%;b15/AgK3' );
define( 'LOGGED_IN_SALT',   'j-pEw|>Ww4Z-#[i5C@Q>~=Ca?&$>@JiU8q`)i;M}1B3G/4)TwGl2{5yB<RB8sJtF' );
define( 'NONCE_SALT',       '?R|<{C4b+H{@YYenHqA@ygBm,63J_t]w,N0F&znk2+BWO8GOfUW8p9m~U;7k>3%!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpproject_';

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
