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
define( 'DB_NAME', 'Mission-Belge' );

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
define( 'AUTH_KEY',         'o4L9BC0XBxRtGbVkymAgICYuObK6kg6m5zs6etabZJUTJ7dTL7bKKGrDfJg8rtwL' );
define( 'SECURE_AUTH_KEY',  'zjuF3ylpdbyrB79x990euMRrx4H0HsY7EkWMHLxrH5ZHqr4Sy9ytZzw6UZaRSzmd' );
define( 'LOGGED_IN_KEY',    'KMWdvjrNEQwF82eCoYww2M6XCozl8BiF6dvxLhBaJ9LDrF4cmSWZVRJUYAmKadE7' );
define( 'NONCE_KEY',        'hrPlXiL3bnmIDyLlXB16RscM2wTQqKPUqgUUjM71okr1MHnNoVkcVu2hJcSGSRKZ' );
define( 'AUTH_SALT',        'SMpCcAMHPcZXHwLjq4Bp1SvkJVNuEiHAzhIiEaZ75e0xXgrDiE3nKQHmYFCbYWC9' );
define( 'SECURE_AUTH_SALT', 'HsjD17FzyDVrN2SCtnL9RnKfYF9JxLBzPeuPqbpTP4bloEH9Lw259legM1xwOezN' );
define( 'LOGGED_IN_SALT',   'AgXxQdg8Gn63MYYd1ulMjFluci4AQ9uMHC9Sk135wbA1k7E48TyvaX7wenR06PVB' );
define( 'NONCE_SALT',       'm4ZmzgnaLSGvmR5gJMinZ7Rx13OqtPF3hwv3JUZSd05swTIdPnCcVB1qyrOxsz6C' );

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
