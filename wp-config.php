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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~nr6%?JV6ZM)3t*.bdD.m-^F@|bD;-zTu-k;!P7V/>2#XYh4w|Ij{$~}_oSQ{OF@');
define('SECURE_AUTH_KEY',  '>&#AquH-rTj.j>26bTko?`%5qEh:*i8%Y=(n_!9b[y?D,<sSXY}}8c5Z]-M1?2?^');
define('LOGGED_IN_KEY',    'K/^Oa:U~3Jm*jT^;~JtF4`B-v3 @I=i<,#r1X*{g@(%/Nm3xQ9IFh Kp82)zm*)=');
define('NONCE_KEY',        ')k 365_KxX^Tyk[Hk3=l((blk^pQ6>`sQ=,jZS&6![i1QPWA4MLh]Kv|Hw]4+FVb');
define('AUTH_SALT',        '^(o]U4?f:<97-sdWDp`,RZd5nFnz.{O? eN]Ohe;f2s<$$3))i})Gl<3_?FwV?${');
define('SECURE_AUTH_SALT', ')2&INk.0~*!LlLTEOL?Cc1).^h4|jlYjL=l6U:|>WQyLC?7X?(*:2UBGb8A3M8[f');
define('LOGGED_IN_SALT',   'oHu>^Q,7?1PV!w;EZO%_-B$[YY S:-yup*k`>W]Zw0a Snqex%g;Vyp<~)vn:G_^');
define('NONCE_SALT',       'Q[/ek$%t,}weUe9eb2&VT$vmJhy!WYO$4.XH>vaBXO$SblG]OirwCw<dL):?.{l|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

