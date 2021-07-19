<?php
// BEGIN A2 CONFIG
define('DISALLOW_FILE_EDIT', true);
// END A2 CONFIG
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache




/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rossupho_ross');

/** MySQL database username */
define('DB_USER', 'rossupho_ross');

/** MySQL database password */
define('DB_PASSWORD', '3.S5P8r6m[');

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
define('AUTH_KEY',         '6nawpdd1b4iecv0kl93tyqh91xanrd8qfye5lgehh7qowgnwjt1alwnmh9667myk');
define('SECURE_AUTH_KEY',  't7evcnspbhfy1qge60yiedecg5mhl2qw2qukxhjfrnjmkgezqwmylggo7osxbdzh');
define('LOGGED_IN_KEY',    'zehrb2ruvqpyhzzr3bwniitnvxrwmji9zkf6rfcxiwomtppvhvyj26cin6xc323j');
define('NONCE_KEY',        'uolryuymib3mdkjdkknasguqeh54j9xvxxsxoyegelcd8uericvl4ndcnjmdzri2');
define('AUTH_SALT',        'tco3donhv5nchvgqd6rn6ca3hq0pf8chis928vovegudbq90f6exuzdcbgen8hra');
define('SECURE_AUTH_SALT', 'cp0prajxfhcjuecvv3a15ngpi8gt6sx7lg5xbg3u04sxcve7psy3yso7bei8hfkn');
define('LOGGED_IN_SALT',   '6nkysavmnn4ys2uw0ifgsoq1vev4clsdd9jwgjeabwkxyj8fvglwmd0rypchylq3');
define('NONCE_SALT',       'rtw5nfnnhpwi8babqysyhmtcfuiywkpa0jctyhstpwhpkk2pmt5ng2p870kkz8qy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'c0g_';

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
