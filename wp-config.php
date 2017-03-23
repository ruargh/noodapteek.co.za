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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'noodapteek_wp');
}
if (!defined('DB_USER')) {
//	define('DB_USER', 'noodapteek_u');
define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
//	define('DB_PASSWORD', 'v_zm2!U_T3W%kqLa');
define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_u.sv-P-R+]~w]--5K-,>)1--+^=J@5 z}!78%ldwZkui)5^IF-Eh5]S+G9wj3qU');
define('SECURE_AUTH_KEY',  '5xO^+`yBq<Kv]?JoF M.rD.+Ym9+H|k*,7|G[jlf, Ocy}}]VY`VV=9J0Cz5Z;k}');
define('LOGGED_IN_KEY',    'z!*~H&Xy6|cajk~-dnyyHhI) A,FNMj-$q@hV^<_s6yk<& qx3x,T5I}6|u5zdC$');
define('NONCE_KEY',        '1IeOH([(]6;!y:kr,xcat_8+|,wSI(+P%20f9]6AAFrTM_S1xx<{>+V[+U0i/kVF');
define('AUTH_SALT',        'C+9R~2K~Ah[FAp5h#e{|!(-Mh/FFTQ+Cm{7=#AqKA-ke+u/r|6KB+CRjSuT!9FzY');
define('SECURE_AUTH_SALT', '`{P|]d{~^-;GE)@O+w_k.7K;kUsk,$du~{$]q-$e%s&x._4pBtmQ|#|PK..4-d[x');
define('LOGGED_IN_SALT',   '$8>E:9h+A8N-y*x-.&!TB!8<HtY#JOj%!-08o_CS|&3jC@H_agfAyG ]NJ78u_.+');
define('NONCE_SALT',       '5-iTCnKl!9g-mi2B k8[cwwr81Wv;TAkqEHELb:IHB9[?Oyb,x@K$$u0xQB}P+hr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	//define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
    define('WP_SITEURL', 'http://localhost/noodapteek.co.za/wp');
}
if (!defined('WP_HOME')) {
	//define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
    define('WP_HOME',    'http://localhost/noodapteek.co.za/');
}
if (!defined('WP_CONTENT_DIR')) {
	//define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
    define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
}
if (!defined('WP_CONTENT_URL')) {
	//define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
    define('WP_CONTENT_URL', 'http://localhost/noodapteek.co.za/wp-content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
