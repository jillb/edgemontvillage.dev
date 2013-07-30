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
define('DB_NAME', 'evillage_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Watersalt12');

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
define('AUTH_KEY',         '3wnX0t>r.pX@>#Y<+P6%$Fkfu[T@d?O`e|?/HG/5(#Gm-7;O+5-$N_ExAzIesn+H');
define('SECURE_AUTH_KEY',  '@O;aotI]2zL;-(;*CJb#cw]N-*;*)nc9Qo.p6+G)h4@n.*fia>/yB2QUQSD`,.Q4');
define('LOGGED_IN_KEY',    '2&{)tf@%i=EL|se. p97sG WyYQdbCJT1HLI:jTVu5Dbr?o{HC<Aq!fW]SoUqNqn');
define('NONCE_KEY',        'mLQ?0dSU<M&13<z)Xz-UUx_B|SU+!r3B]ofY(>DB5_B%;1*8lxyr[MD(u^Fq,|73');
define('AUTH_SALT',        'Q:et{?)%f54QQIB9A-|7X-v/HCa;-W,:9U:/H++h;_C4ne&61)8KXA-p^6YiO[?&');
define('SECURE_AUTH_SALT', 'Sqk+<w+-70CpiYoOX{N)8Fqj-7I}pep6[y?e2Saikkp}ye2.G!{djcd-l(U2T1u&');
define('LOGGED_IN_SALT',   'V-_F+gRRhJ%WgmsmW.:+Crz&W2T`Ln1^$^BEVq;+-}]:|!Wz6Seq(>^+~{@+v-;[');
define('NONCE_SALT',       '@{-MN/j#E.BNVfBtWJYJ3A&wY4pBPY2&$js3y KRXh-n$=T;oeeV;uDlgv5PU+Cp');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ev_';

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
