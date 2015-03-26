<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'master_investor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':-;(9*hV5lX~55l;qeIUYB}~M$_S#=CK0TG]gphs3)QTe$-5afCe|{B^=b_R6-Yy');
define('SECURE_AUTH_KEY',  '_J97e~g}rSMc+~r`!H+*(!O`Vg~8v&Ar2h_NdP~KEd(+`NfbZ~0hIp4hx?<xg^D,');
define('LOGGED_IN_KEY',    'A><g]43nmmLxRGmCfz. 2}H+<->`_=}*FI7Pdc4Hn4{f|QQbokPo::^4lBN^dn{.');
define('NONCE_KEY',        ')m1|13up^]7ff>B]R:EuT4T^+tT2hPUIfV48wXX3I~munJJ=/8c&/j#xi]01`@T@');
define('AUTH_SALT',        'zc|Wi]z=j9+DVmCm>_c9<ruxjX{)>S]%_MsK-iQ=ca`DBTBP70zHU!hQo=8whVj9');
define('SECURE_AUTH_SALT', '=DJha+|#b XxaooZt-E/czT0A`(v/V15iLI;(9w;,6(`V:)CXZ?9&)4f&Y_:|s^h');
define('LOGGED_IN_SALT',   '*+^|g84[<0y#){/zy%g~#j+-:q_^yb_@stC;|Zb?oG#U-!|i-<xN9>{l&yr}ec7|');
define('NONCE_SALT',       'N._)qsaFc.L]@01hu6g^JK&{e-~>bk]X-8L3$eb#K&``yIYp;6;+eKkp( ])KleC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
