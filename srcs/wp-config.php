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
define( 'DB_NAME', 'app_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'p|3-Qq,-Om!Wp+WMdMVC/|(Fp1K7O(9*&4ox6EPXj[(zh$S KG(Sh/ASJ!T[r4HS');
define('SECURE_AUTH_KEY',  'uEtXsoq0k^Q`KC#=x@5`Q|F):#(cy-!SAd]q]A9Q8cf]7~ V-^h0uXm*1|4GLQR|');
define('LOGGED_IN_KEY',    '&;B4vk;iXnkP-y)i_~8jhQT4&jH%bm?w}[K.XV%P^,,GO+e{+pH%T8-x@CsFCm<M');
define('NONCE_KEY',        '^a*^`>p}|g<}__V6X2PIW/l-ms0qH8p@KsLuI*$Hy=6bRf)Sl)X+36P]8+JEI/k1');
define('AUTH_SALT',        '0 /c[),gnWXOL1]MrD^HxNN!G>d(+VYN5#vX||Py-kUNk&4+`SNYq-IVMJ|}>f_]');
define('SECURE_AUTH_SALT', 'o}|BF[@K^ElPM4WXPnjxP2(mp:9nuwru%GsWt&K4aT)_y43z@)Je^?!LPL6>C<sv');
define('LOGGED_IN_SALT',   'Un_-?%G4+J*asS]y|U e#z:#0.!4Ox./ZUv+mum&hQzk/y-QWy)TCeEq9LU di+U');
define('NONCE_SALT',       'eS|G+$pqERVQ9pcpyG-F/Q?^oU~e9BG%A)ISR[>59(eudSYILgmPR-s|Db`4JB|x');

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