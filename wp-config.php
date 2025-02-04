<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_38200464_wp530' );

/** Database username */
define( 'DB_USER', '38200464_1' );

/** Database password */
define( 'DB_PASSWORD', '1Sp[7S1p.f' );

/** Database hostname */
define( 'DB_HOST', 'sql111.byetcluster.com' );

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
define( 'AUTH_KEY',         'mc5ngblwma125exncemu7zjndmcn2e92zqbz1iz3puqmt99jkeepvwmounfskyf9' );
define( 'SECURE_AUTH_KEY',  'h4iwyykt9gfa7xj85whvdrjuntvoegyxzobv8pxxpraqzwbq4o7siqnduwkmxonn' );
define( 'LOGGED_IN_KEY',    'af9fjdevgjgqlu1trk8wgb798hhmxhxu8e2oh2hngzsohaxo60onox5qsqf3moim' );
define( 'NONCE_KEY',        'mjyrbgvcxu2kbv9tthdemudtokxly4cjwrp6w5vtd5q1abixmiy6w4zlfhpctl4s' );
define( 'AUTH_SALT',        'nb7iwsmlsil59t3umdguoji4ezxga0elvxokrekpzqgvbcuz4lqauqilbiukb5s4' );
define( 'SECURE_AUTH_SALT', 'oha5lzk0tttre0tr2y1zccpgpbrwfsmbw8txwcbwpxvhfdn5ccm3btgrjd3mjlqj' );
define( 'LOGGED_IN_SALT',   'g7wqpfel8vhdmczztuhrwewlr0qgpw5urcbe3qt5whrdusqununa3tas3bvx85zm' );
define( 'NONCE_SALT',       'salchflyglzgtlr85sz8pqvoso7t454mzeesw1yhknp4uegnbfqyltolzqxdicbn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpa7_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
