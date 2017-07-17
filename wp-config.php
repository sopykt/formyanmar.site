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
define('DB_NAME', 'wpfmsite');

/** MySQL database username */
define('DB_USER', 'wpfmsiteuser');

/** MySQL database password */
define('DB_PASSWORD', '014369929wpfmsite');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'formyanmar.site');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dpdA409c(=m>{<s ?FHv{&5 [V( +nnI-h|[_z @7Rw>xR?fiqL^r8ZdC x``*F;');
define('SECURE_AUTH_KEY',  't_@1YgS;-EdK =0CP~dkig(P -A]$!e8K}|5~w0[(sFEc7?F>W*yk5Ykhg,#+P29');
define('LOGGED_IN_KEY',    'w:.w/RB#Z}Z:lh6pB7-e./SNR0:6DQ{lJ<d<$mK=Ae8y_4eI_]ha-6MaK^!/{4*S');
define('NONCE_KEY',        ']y1i7VhSxIgaZDfgEu`.D(wDX-N!bD*6`X$~rslFtzK+cCPZ@5%Y|kzp+4S%CWVl');
define('AUTH_SALT',        'MeN++F;6QEgVxE87.qA##b4s9|D<zlh&_0]C7|XLOYk7.|iO5F&Rta{tv..RzpR4');
define('SECURE_AUTH_SALT', 'Nje`4|TwSuGyv|N1i_l|<IcasLSywo@*+8G:4:RZ:ZCjjxw~{GkM_^HM Z8-a]]S');
define('LOGGED_IN_SALT',   '{T~nk~^4`P|65g7sZnA5W`<;>v.3GKX:[S(A6or-L6BqZdi;H<7/W#+^O0D$+{4d');
define('NONCE_SALT',       '|?3,dbK)%!P22Cw-/C_a_LGhkf0:{4G90CQ{j6^%omw_^[uyDd*R*SA-+~%,xp|Q');

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
