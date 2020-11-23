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
define( 'DB_NAME', 'technobeater_db' );

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
define( 'AUTH_KEY',         'PQ7.sG08n/<B$P )NG?*{>5WN1Evb !+y0?fn?)bU%V$fQHuia<!/V=@Z*0URJ*.' );
define( 'SECURE_AUTH_KEY',  ';XNBx3A%**4UXn%Ig!;0Ga{ogwz0BaJ0QbNAkKCz;p1s?%jsA0%wk$f^OmWEKc`Y' );
define( 'LOGGED_IN_KEY',    '3+ND^Q1Z[j5QSx)2&/D h_EX*IRm&R+Ws4$vz%.FGH`mk0YSs69$x0y?xSfN9JJ3' );
define( 'NONCE_KEY',        'k^#@ld=vPa0DY>v*`1r`*&**SVCu]r$%$2F.A0%vUK!BP^{W))H8B,~GDSn:PR9p' );
define( 'AUTH_SALT',        '.(@KQE]3S%Jjj:WP)>X+@Hr? t#AWS^r %JW%!AGO3%Ug3PhM@1MHc)C`Wv>c@[k' );
define( 'SECURE_AUTH_SALT', 'OOu~+z@Rq2q6<Ew4mhPmW*r/8%,]7oX%{0}g`*/L[F4Hgw-%0$?[nD~IhYY z_w:' );
define( 'LOGGED_IN_SALT',   'IL5?*k#|U#j)r80):8WP-F99]oA6vEujK+9N7Mq;d[0di-+*^4wM-fe&P^h~`y:0' );
define( 'NONCE_SALT',       'te!;nJh.:gaV4GN- 2Yvq@&4<M+@hgcL2i%CdLgXC<+o_y{Imc>#Y88+Mo$n;{0u' );

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
