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
define('DB_NAME', '32837multi');

/** MySQL database username */
define('DB_USER', '32837multi');

/** MySQL database password */
define('DB_PASSWORD', 'pw4ictlab');

/** MySQL hostname */
define('DB_HOST', 'sql10.pcextreme.nl');

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
define('AUTH_KEY',         'rW7n^tvx;prf-RiQBYe{!prB<1Y`=(bdtP,:8ChA&,9!D-/=eM+iaf]JNl-2b8sj');
define('SECURE_AUTH_KEY',  ')zTRmu7gHhmZuF*h} `@|ch0,O@;la50Yc:6Y*2b>Ay7B`Xt$77jWQK{m-z;l Y6');
define('LOGGED_IN_KEY',    '9EtYl<zxT,`z~dmq`j[<!(D]!(650ysHZQ/k7{HdAIP4kb#{1+9p#aBD2H}u5y#w');
define('NONCE_KEY',        '0{_(3o$|#[@%$qPZIKdL0uqo-{aBO7}*a5 wiL)fwepYr<_WJc+!;p4oF,GA+$h/');
define('AUTH_SALT',        ';[Vt9(NCIn;vNwKmmVVz4}I?OZ-(k=b<?DA!*Rs8iZT{Lk$nioxRfp%OGUK:A)x!');
define('SECURE_AUTH_SALT', '35o]Q{Ec+`D$$&Q}P?edoLpG}z]Po+5 .7LkFU)zARHO]X]6P&eZ`^<qHJN*h763');
define('LOGGED_IN_SALT',   'hvzW[fy{TTu0]~D?(jBX82`NPi-uNe9VYSGh>+!W>^.|i@N.GEXToj]YPA!&m.v;');
define('NONCE_SALT',       'V!2B;e$HX[*%k-I[ by:cD|e n@*Rd%7#Gm2+tFL6q=sY K;6Fen>$R?xC>:7;bs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ictlabtutorials_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'nl');

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
