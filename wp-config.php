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
define('AUTH_KEY',         'V4TpInaJ/3abzz0PvzY9y6CrOPby9jefDBmJselWIf3+FMnVBAyDOolZVDfP3hhTw+X9VTIg7RE0GkkSrSsSRA==');
define('SECURE_AUTH_KEY',  'n4llqxDFZjK9+2QfYDflj8YZH9P3/Q+vWE8ZmFFx7ZPO9F3+NT+Tg4bRVXf1N0vOs6fT5qmilXuK7w4f2mQ5WA==');
define('LOGGED_IN_KEY',    'rZwikymPWPfVpYAuJIZyf/u4v8cTtLVS4DFXBKc6T9WDEfsebZR1P5JQ3eGzcmgt2Lu0lqbRNwBKHmDMyAfamw==');
define('NONCE_KEY',        'cFq5D83J1BIh2nRuLdizaye5pEavMyiSWtXCl3A3yrzW9QHWPihC1mwtlgWW+XuvwNt64fDaa0uV9dGvZECryA==');
define('AUTH_SALT',        'Kc1HiGjMP04xv99IgavI1cK2hgasvt/EE0+M4PBDh8YAazOR3GdLZlhWbReEjuTjWcT0rGVxTLEc1DaOTbx67g==');
define('SECURE_AUTH_SALT', 'ynqN9PPeEGFYQiPYPRsmgvP+L6nOanRsTHqZzpicE/5MxuqzrjFpiEzN5hhJsD8Lkom4t4HF6iGtTQg24xcq0w==');
define('LOGGED_IN_SALT',   'p9kJz0Gj0xHvFdRYA3FT/FKxOkbX+cRpO62cmraKmNVkRGGRvTqNa/WjIP0nlbveCP67wYQKZjm/Tw7hzzC5Pw==');
define('NONCE_SALT',       'I8zl+D3FABEplmC4LkqGbedRFleCiZMVEIhHux/4RI+jolRdzMilHRw4m8HPhDAF1SUDlD93Z2nSaXVGVASpgQ==');

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
