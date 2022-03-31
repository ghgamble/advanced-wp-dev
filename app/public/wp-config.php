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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'mFgsQID2vLFqCV6LLxfm8BJhdrYjcq/YhGYHFOHfF2MMgcSlAzQbuKoDbA8iWnZasDVPzfXZkf23SZj/UB0tOA==');
define('SECURE_AUTH_KEY',  'N4KI3k/64Te9zUCI8NKB1hLgzn09xfedldHO7bR3t3tdf2ZTtwg4BWt2yZGfKyPlZ6NUZuOvwCfGN7fw3E0OxQ==');
define('LOGGED_IN_KEY',    'PThEvxav+8nfpq9s11ZyeYLn0dkWq+ADTB/ODSkJaw6bYHcPuM9gj/E2r48q0wuHjS/F57rXYCzwYFf/vjabtg==');
define('NONCE_KEY',        'ZZga22nKDl1fWePPwNF+gsFQpLwSBv0z/ZRFanQWRzEb2fGXTxiG4fwCLQw4cMiSqjkH0ZpaE1753goFgjd6zg==');
define('AUTH_SALT',        'hMCF2KishsP8x78tDUZLBFcub9WPjkPmZSaYrebTahGtEZ0moO6nFljKPyEvn1csz/VJ3Ye19qFUwyzB3fR3RQ==');
define('SECURE_AUTH_SALT', '/17XnsV4uSk/dcVP7fP6tB8x8Q+3Ke//5M8DdOtI7LGRyQ3fYCjsuBhWIMkXlyamAYdjKmZBucTiE+kWrVMdtA==');
define('LOGGED_IN_SALT',   'T9Fgp+uih7SOrmg3ou1v/kk8EPtuWJp1IDXbZkg0b7ktnb9gTfVTGc06JcAYESth2DyqZOPx2YQXx9BCP1kVWQ==');
define('NONCE_SALT',       'V9JF63/6dRLSR8nAwkOveijUtl87FHc9BgAMRT59eE7vjTINH3T2QDsDO9wPYALsVv5i8zwctwpzC+fiI89Xaw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
