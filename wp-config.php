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
define('DB_NAME', 'leethoma_37wp');

/** MySQL database username */
define('DB_USER', 'leethoma_37wp');

/** MySQL database password */
define('DB_PASSWORD', 'r734xm6356t2xczq');

/** MySQL hostname */
define('DB_HOST', '10.169.0.175');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '6WyaJnEPftwA9OD5sDBeX0cXmbjHcWWVRLRGxFefanU6KZMbZKhwPW2a6KDqkkZ7');
define('SECURE_AUTH_KEY',  'py6hXl3WfkWfihgvWKZTh3KBGzNI1ZhaHrtJ2Kwmo1zFAHm5qt0ysYyrAlfkR9Qm');
define('LOGGED_IN_KEY',    'ndb8kIaRFn21dLOsS6pqEuL8L4wJH4kqx5pfCAMbNcHPrRWf9eKw8681pU5oX7hy');
define('NONCE_KEY',        'mweUidQNdyzc1XT2rypgUSvaUBjkxV2VcAlwogeQPjRWTcmuu0FDsnze2ARcKOXu');
define('AUTH_SALT',        '3EMWpmoTS2zRYceICgD7rV72pBzhwlqXv2Ur7K90dUDGEfbbstYKJa9uvo0mEdXi');
define('SECURE_AUTH_SALT', 'FJFfZF4EXdVnvFvKXxjE7rvjp8QlLkfp90ZNZRFPY9BnGIIHOz0cuhwsKuKrksTL');
define('LOGGED_IN_SALT',   'ByrtZjxFZroM5XSAKTywMaqXSHDvJ84QZP4jsEqDTfpBpeYQAvqBeMJvmGigNfrH');
define('NONCE_SALT',       'gdsznNeQyTXgC1hB610WkBuU18Vm5CkxiV7jwqc8Ii1Wg5lMXfGcA9lFtgDK5Ajp');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bviv_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
