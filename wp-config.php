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
define( 'DB_NAME', 'Planty' );

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
define( 'AUTH_KEY',         'cUfimgIDqyh7tCrhiRXi91cBTAQRYVEKTGcUg8Ch8rfyki3oz3xTueS9AON2byMI' );
define( 'SECURE_AUTH_KEY',  'cnuJwQKPCUjTAq4smyDU8UD6LEXszE9fLp7tMxulAGJFUnohEgpCDupOto8WhDzI' );
define( 'LOGGED_IN_KEY',    'WcZBug3lp2bVytNEPZSAVOlJjDOpxKhXkfnU9qOr354cblJdfI6yuRqEnwvyUWiG' );
define( 'NONCE_KEY',        '87kdh205djZeEAkBb7aA61tYQaCXlcoBtlZ5nqFnr21sWxiZXR6WVG38RRIWae3m' );
define( 'AUTH_SALT',        'kO3Tsq7Z6gc8wV7bYC1Yp4c5xPc5BRbY2VOJ2mHqQkth7vKSARKNhSlVBDz78ebE' );
define( 'SECURE_AUTH_SALT', 'GHqUE5gZevm1el3T3bCcstRr5aG68wjYDWDYDZI5gqxYmhznV7E3cS6wzzveuRg6' );
define( 'LOGGED_IN_SALT',   '04R02EYBwHHFgqGtrXSwXwho7VwP1Nr0up6Mrqi6GBanSm3d5UuHQYUahOiJVEvp' );
define( 'NONCE_SALT',       'R42XBqpTf0b7sgc3sZzPCyqatMAdvHV9ELaHpoq49DXlIzu3Iuw0MYeEWv4xRePK' );

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
