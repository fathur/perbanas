<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'perbanas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'dgKNAI>-W[%}PXR%:Y,hlX%Fo+4z-at|z]d:Y0 =[%pasE-8WcVc--f7(7oHU:$,');
define('SECURE_AUTH_KEY',  'nPy1#|9L(&HD_KZ9,/>&5.&2hF:~l]PE-YGKk|[P8fkN~ul7-+kP`2vO#16LHQvN');
define('LOGGED_IN_KEY',    'ETayji}-+:8O!S)`44{]|8I>7=|g;CI@-}DQM9-Z?aa.]LE0z1(l-|$MEJr@G47d');
define('NONCE_KEY',        'k@:lvPYim>_OOw`z4/<0}wiogZpI0M7($S(GGU,-BzC#-&_uzTs*PPu2){+e2|^k');
define('AUTH_SALT',        'uSwT^<h6n-bwR@*GnUm-oXv$U6E (c[Z!5za9nyfiByX&&+LLKmK@m(a{#)}Ha7j');
define('SECURE_AUTH_SALT', 't<1NA+f9y,F*>LL3v^A&_d.Zk)%}?Yn{x/;(*nNT&MjM:@N8klpjXB25iz(8HUS6');
define('LOGGED_IN_SALT',   ';2Ug)He{W{8QtOG&g~r8c,(w?PapX+(|y vZ?ws <0XOGq}B)1+0hy.[&w6r3>+:');
define('NONCE_SALT',       ')EWR`[28+Ob`$iy_|@[WJc2WPYPc~;^?g-fVF+7^rpr5(o7[^%E%tH[thW`paMt#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pb_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
