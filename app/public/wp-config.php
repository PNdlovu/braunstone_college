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
define('AUTH_KEY',         'ozgBLV/JBu0YG5hpJVv3HFbgApsq6Eb6cxZK1s3fWzMdx9s7QyDcSWwztflpDic7RfOyPQleqTB7YqFWNVn1Eg==');
define('SECURE_AUTH_KEY',  'mdhX2HnOEe3HVgcGqZAGtY7Li0Zr6RdotlFrpidWxzQdsps8uycAYIMo0ZcUspTPJ9mHx6z/tJdRINSRn9YBaQ==');
define('LOGGED_IN_KEY',    'PfCqoQaBLZcGlSMRfr4JY0x2KzehJzAwF8ATQR3W8191cyh/TeYwk+KN73u6fiXTkztV9QVvt+q3T6RJ53gqbg==');
define('NONCE_KEY',        'YEs+NZ/x7fWmjAZ219lMPI0CUC+N+6qhd2CQLFRyBNo2Mh9elj9M1ZVfYbSfDoFsYGslaZZSikDbEh1u32ARDQ==');
define('AUTH_SALT',        'mwuU6w4P8QZHBwakeNul9/KEmI/Mc1q7tNrHhk1V6k7cDgpqzlulrRZO5TMGbP78g3T3WjJuSMv/8Pnu6dLJ7w==');
define('SECURE_AUTH_SALT', 'KgxyqMjvXFiw14bPVIzGhCN0NVPKWaPlUgumAeDe6GcodpvgAxdHkWn2D+/sXH8WUzLJElAOJoJn5YKZbZ94cg==');
define('LOGGED_IN_SALT',   'PL/tGyAc1j7SkHO5ZcViJ/rP5fwvW3ivklySEcI6y6Znce2wvkYIcgZVLVdCNojRplgK1S7BivDB4tpPrO27Aw==');
define('NONCE_SALT',       'jJCQ/ky6DT1DadwctfK+luiUhg+VF1sfzjerD8j9/4L8gJFL4PC7Nn613rRiN9mz42JXWVbHNigGHPxVL74Pow==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
