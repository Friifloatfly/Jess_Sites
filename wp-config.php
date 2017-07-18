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
define('DB_NAME', 'Jess_DB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'qx.(J}Mc>x4@M>T_*X3/Zn,`|-ixy5*UVsEP8B@k5nUG Oyi)$GA?2JxI!cT(4W[');
define('SECURE_AUTH_KEY',  'AjOBPQ!>c-nkNXfWM)`1KLnCKMFb49wS>.pC:bs?pYyjZq&I3X5QP&7_o8;+>(6T');
define('LOGGED_IN_KEY',    ' $1S3.QOnZR8dW8zF_6H4BsMSU+Mm<d5/STv-pvLa4=PfdPApcP&G%EoxN]s.rbg');
define('NONCE_KEY',        'm V#jgJEw)#z>)))(z)jy~frn |=0*52Ch/8~jD wQUsPMw,cE1:wG@LZo!iqy6[');
define('AUTH_SALT',        'm@u,@)utt``9nugi*=VgNbUQPpRd&v]*=yx/Rj?WBHOPv7_JB+ai!@NshBmlu[q1');
define('SECURE_AUTH_SALT', 'e+%%^]QpjlNPrw@t{8~pS7tH2]D<;GRM&>G1:6y(Z8nZ9VVj;jiSW[!Ebkbx:~uo');
define('LOGGED_IN_SALT',   'Pcb9n%7[1u|E4;yi?K|$um11TIX ^)HjsfLuTf#VVh@k@fd9Et@f2cWps)-`8TA&');
define('NONCE_SALT',       'ST.JTLDE(p!3G~t*aJcF]mS%4U%~&8=`&3x3C#RR17?s&^|@#7<u,0mK0[R@H`*_');

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
