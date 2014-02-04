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
define('DB_NAME', 'wordpress2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%w*EybbXUn=uN)2n^=c|BBHUBdPu$4aI3-G6c?<psk}za)MKg4_-oK#GeZo@3K89');
define('SECURE_AUTH_KEY',  '4,C?b1s6_WZU%,x+bQ)++FMfAXB_w>[e/%}$xOt/Bt%@NW(MI`FxNr_Y37eCUX0N');
define('LOGGED_IN_KEY',    'E6<X>nDlk]wDMg67)owKnH#3Vj3PsRF,tWPG|SO?!5GsR<&M+V9^1k=9$@3XE#Q|');
define('NONCE_KEY',        'EiuZBk}GuY&1R5df =m;aB*{B>:q/;2.iDoj-6}z*`]Ccv{BVYa$r$8$ZfOScxf/');
define('AUTH_SALT',        'Ru]9]*g?dOj6;{=eK*#xJ(.tl4vz!:)U3TLI4/q7vs0V/]F5$y$<AR9:P0T(*Q-m');
define('SECURE_AUTH_SALT', '14^lc)pT&wjOXn;YI=uc>?=P{+a!p/~Avv/xa8=i`V_/k-yXMhcRm<~M2rItX`4L');
define('LOGGED_IN_SALT',   'SxFY5]89ZH&<$QC0K;6/)?)vBukV7PLA+Z1|9iw9 kaGK)1pu~Nwj2(&<N$ttVLH');
define('NONCE_SALT',       '<h5E|7x@K``=?U~81m+x?Dwk.EnFL0mg>LpRf#qe5&!wlhg[0%(]`^[ahlAIEp.N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp2_';

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
