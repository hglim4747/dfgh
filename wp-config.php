<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jinl4622_wp179');

/** MySQL database username */
define('DB_USER', 'jinl4622_wp179');

/** MySQL database password */
define('DB_PASSWORD', '69Sq.-3pn0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'biksjtl59ikxyi05xac31pvbstyjggmo1qzyvdrecddesjbrtv25xlu5mye17dmj');
define('SECURE_AUTH_KEY',  'kbmvz5iqntsooajdygme8duadeddhsuv3svhmz7aezujmmv7018hpf67at2u0hdw');
define('LOGGED_IN_KEY',    'bckrbzdej9ufsxdwbkn9mjlnhjqrutgsitot8hycbxpvyptupycn9rmfrvv3uetd');
define('NONCE_KEY',        'iu0mrohvzse6ua9u4x1r6btvbmrrjeygbwaky3rzuorfeb8qgnlq1phiwc7oylri');
define('AUTH_SALT',        'r7ijle1olryvr1a78wejxfft4zya66fp9cxywkxztzrrjewwcumjtlqwf3yy8rse');
define('SECURE_AUTH_SALT', 'mjm63qa0r0lszol4hocainaoht3am75zmdypzusbj6g7i80ill2qeefieeqqxyxn');
define('LOGGED_IN_SALT',   'tbx9lae5l8dmsseu6puxmhxrzwykv0g6djblb7vi96btq7ztzl8vbqbxrbegmbdo');
define('NONCE_SALT',       'uwkrnria3ugp3sauqbrykidnvghlvlzmzmuy0035c50s9tyuf7uohwya2xk0hetv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
