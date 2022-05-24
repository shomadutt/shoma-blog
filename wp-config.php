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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoma-blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'h7gGWV8W3LOsTTE1MOzl0FSb34VlzBMc6lB6iz6Sx2jc4ha2RNAkt4EfVJqZsMxl' );
define( 'SECURE_AUTH_KEY',  'ZHPN2gALdjDw40UZGY7QveF2nBdCSC8vJ1uLr1wvHwfC2CPQLOeNyeG7DwsJz0J8' );
define( 'LOGGED_IN_KEY',    'EOh6qPgadcmOvburSHYsE4lPxUNJdYItjzBoekeqDmECyMv2JrXbdeVBwopP8prW' );
define( 'NONCE_KEY',        '6ux8LK7TItDIBF2DEvQ1HRptwaYcQryKn9JSiT5TipoNaaWS9AUEWTfA9HyxWbm5' );
define( 'AUTH_SALT',        'BbLD4krZ6JEuFPJEcy6uTg45kbsWm1LpSHZpclEB4WnXnj3UlsxKAfEZl0nTNgNa' );
define( 'SECURE_AUTH_SALT', 'sJk665dWHyah6aeTFHzuemrC0WKZU61wIEOCIflnVve85zVZVZqMxPZgQLdruItF' );
define( 'LOGGED_IN_SALT',   'Czjf7ioYQVB2cH6mEUzc2cIID5PQZcUTHsFZaxYmOCjZWuAfT3MzA3d6OHfT3o1r' );
define( 'NONCE_SALT',       'vuZlo7YVi3uCgre3vKWXxgfDLSNSoKle6aM0yX1cchcBtr1ylcrmiII4Haoijtfz' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
