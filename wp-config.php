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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jFvk/BlbpI2yqj9kAVSabO8VAjnFOxpn3V7yREqnp5tx8suRIWgNKTR8d82rMWI5iHDlO7x2bIFNYXdVORu6jw==');
define('SECURE_AUTH_KEY',  'YoruVzsRQcdfd/FcPzg2qiS+0OOKBPFiQOIyH2uhT26b/NSSGlQtm0JYAGvgI95rFDkvKImPeXkF5w5UARRgqA==');
define('LOGGED_IN_KEY',    'IE9jxX0d6lLtQM0TSk6PJNCXCYOHOaB2WKYxxyLbBwD56qtH44UEMtfkdxZSsFmCLzMFKg6AR268w8qX5/HxTQ==');
define('NONCE_KEY',        'DUDvxGZRpPdm2/fklaqX+SwLyScE4Rn5p6A54d/Olcga7Ng8nl/6WJK84BWqLQzGYl/dz46OkJRUif3QFghRNw==');
define('AUTH_SALT',        'pFHJlLw4yT+TawzF9c4PQqw/wZVlHm1zAYST+yfuByUdgx5M2sboeKCLOpaj0AvgW+RirifQag4lRr0l3NDarQ==');
define('SECURE_AUTH_SALT', '6xamtLZalxpU31j0xWUE1vqioM865aG1D8R+Zzo/8bzuMop5aioyxRLqrDs2TN4lz75NobNyZYebq0Qoj/dxZQ==');
define('LOGGED_IN_SALT',   'miXVuGD3fK+G/7PwAdo4DlXgHevo/cuyeGNtZIzmz2xRjUtScPMk7EUg8MT1Oh1osn1noiFnuxLQ7QBwl2Xxlw==');
define('NONCE_SALT',       'lyNSpxZi2NLpp3v1nKvEYvHGDyLvGBoXv1zB8BlHCYF1I/uhnAu+NRaI34MP/+Xv/72JPpWv6L/L1GhrBhfZzw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* 
That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
