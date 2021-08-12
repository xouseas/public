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
define('AUTH_KEY',         'j6T1TOg18L6/0YnERiQivoeH7J0OTfliB9m4CeXsUJwOsuUgnBg/tqR5BcSWURY00hCWTitTmoWmnlI8YMYbBA==');
define('SECURE_AUTH_KEY',  'zrvwkAmPpSzvnBVzZPJmyMszKy5vOyjkV92cedGdtfQHZASFI1mvaEEd1EVteWkArsbxkRwt++dZeS9t54Bz9A==');
define('LOGGED_IN_KEY',    'WAgtRnE20az2hNZE6EZ85ovyj/iWq1Ax9Kzehv+QminaK1x52ssuX/LJJDUZfmv+CsrTZSRgD7Nhmf9xNH96oQ==');
define('NONCE_KEY',        'Mf1aKB2QID7BMVP09iiijBrNzcIvvwSrchO5SyZ94CstM1EYCE92EyLk6W9l8qwTE+YuJFfMHU4G9g6dbhlGKw==');
define('AUTH_SALT',        'mGv1Fw1nsIimP7cO43PeMbS0Qear+j3YVNLopN2efv4ZcaYygMzkhNJGueVHjJkomIGb48xBrZHTExppk3rVyA==');
define('SECURE_AUTH_SALT', 'EaN28EeHDgHf+irThIf8JrE/T9NKJcqi8yRNKJ3CHi48XxCp3ephFl5I98IAIlAT64wl9yfzNRVh8wUUVHTOXA==');
define('LOGGED_IN_SALT',   '/F+cFir7qlQuXCg016gvCL9yUHqPI2EOpoVn51fE6Z6Y625EYVM2P7J8RwpyfYjIwPjMKFuijFKGzoc7I9n1jg==');
define('NONCE_SALT',       'qZu3ckspkmOiG0vBVieYHxfBxAcW7mawIuwJYxfywfs9ryFxL9HjGSVvqoPxN+bJJDpOaI0ymE5PgbhRl4WcZA==');

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
