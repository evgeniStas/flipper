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
define('DB_NAME', 'flipper');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '09021994'); // dd429glk

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
define('AUTH_KEY',         'Yi7,jX{wX5EnxjM;@j~H{_P;]R!^T$4uo[bb*@0RfI4{W%M5+W2}D8)|0#x<k<mV');
define('SECURE_AUTH_KEY',  ' ]9N]?4/- 9@o5]gZ?<J!l0%%$R$>Pj,ci.5,1DV+(2$LjObn% Mo,[;qL4}yM5x');
define('LOGGED_IN_KEY',    'm%Zjw!t$p+Z{?;;.!RwI*EL)YeQ}0=*u.yq{jU7VY{a?g {Mq-elD-Gp joFs<(b');
define('NONCE_KEY',        'b^Q*HA,j)`7Cj63pbXYXS$VNjL.XKFYL!;BKAUT,g=O@/*Mnyhn`;sbzS-}( xzF');
define('AUTH_SALT',        ' #4YmgMB$01q}obWKi?CE/n0Ftmiz,qV{R v[yQ-<Y9WD~aBeI:;Z+DN*nb6g$Fk');
define('SECURE_AUTH_SALT', '{N#.U|ZQB{Vu%SKrbyQ=;;R;oXs_4Kvn`w&5Wo!J5~/[,rbfbi:~{*6J{zJG0rd{');
define('LOGGED_IN_SALT',   'S9@:T[^t1%Ws3w.wIG{$<f{Jv LSr}P#D5!*RA^xW*q!#5B}2$-yGoFOe|e$Da}Q');
define('NONCE_SALT',       'oU;9*rIv x^TY6-I2,jXUJw<#J^N?d4URV+_P}3z`dP7rxnAT6[`[M0wvl.+Vg$z');

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
