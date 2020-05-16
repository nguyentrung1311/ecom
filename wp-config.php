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
define('DB_NAME', 'ecom');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PwTD<}R*qXipOo+B5bAdzF+bfqh&UQSsR:44.Om;*hUC0/fuDFk[l4cJ+Z-%iDk0');
define('SECURE_AUTH_KEY',  'o[:*NarAkuGOO4wl@?sf7&OyKQTms,u+&nXlO@g7T!mtN6+)wui!U2O74)^?QC#d');
define('LOGGED_IN_KEY',    ' |.ch Cx@y5&NtZjVP99*.CZk9<K$u1`8wu;}M&Rv1NYA9jimSft-;a.OT/8CFt,');
define('NONCE_KEY',        '|QD3.DUMH7LH|SNNIrb>5ht_pzX][! -H~Ioo;t04q6V9iH90.jN8I%oOzKd&)5K');
define('AUTH_SALT',        'km-bC7tb04Qxj-0s/3#nC^70fd)io3></RJhXT:YlD`Qbo<+MAh]Op?u39*yyCBK');
define('SECURE_AUTH_SALT', '@qeU2TGDAy@?e[Tu}mu<s<hVS*:L{/,JI9H88rMKc fcjD=fKLKE!SZ*iVEkd^ot');
define('LOGGED_IN_SALT',   '=q630w[m?}CR!K*OzPc0]yORx5G`>^QW(@*bh#eaX( U4%}l2gNU)qrNM*BMWtJJ');
define('NONCE_SALT',       'PgnRrPw2)Q/D]x*hP?;QoIya~>,G`vctcq2pse|B,4]la^y8y^MA*P5FJl48sAvF');

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
