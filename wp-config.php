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
define('DB_NAME', 'chera4nm_wp726');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'litmus4me');

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
define('AUTH_KEY',         'dq0ruvju7bmw1f64zgll7mhxdqswjcu4qpvqi02wamc0ri8joanqhn3hnoisrgyo');
define('SECURE_AUTH_KEY',  'nlnqbcmzb7btujs6l9x4jumchdhbg7m2zhrmsq46onbypkomtyabqi8oa0a1mygt');
define('LOGGED_IN_KEY',    'kuq5uhlw4hshd7vg6hmdqh7i3f4nuzbk0fakvslclaeiimk350qb9whqfgwi1mou');
define('NONCE_KEY',        'iwwu7equ3cwh5m8u3dj4pzyfvet2wiqel66o3p6nbam4r0elu3x8onali3z7eja1');
define('AUTH_SALT',        'minrvirmkwhyitodyiqeehltxjcdckjqcuyjcbjtcywnx0vznfdopmpmsnsdndno');
define('SECURE_AUTH_SALT', 'el0p90u8s4gomvaoicyrmtfozaduh7ipixej19xvtwzf8vy8odvafwloqjfvwjtb');
define('LOGGED_IN_SALT',   '1hyrxt572eak0q1tuufzzmmmjbxs0pkhpicefy3dw4izfvswbb8xkrdi5bypbeyl');
define('NONCE_SALT',       'qsjlnup6nfz7q6ntckcwxjcbbql1tljkoaiozbakgy60zrdlx4wfthhujintybii');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpiq_';

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
