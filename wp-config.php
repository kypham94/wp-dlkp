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
define('WP_CACHE', true);

define('DB_NAME', 'dulich');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', 'Anhky1011');
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
define('AUTH_KEY',         '21lpv`G_A(oC(~Mx4H2,Y,G-U0xR_6yTmh<lw1k= #d_letzdc&F~}(VAS)Cb/aF');
define('SECURE_AUTH_KEY',  'jZr6g1u(cGsA%T7x`}qz@_K)ca%`JOgn_.QI8wIJ#u,>k`<hTYKbS73s|uw%o)(|');
define('LOGGED_IN_KEY',    'NI=$}:7CJ&hrQf]G<Nh.N (*VL?6<JG[s-<wR+YHK~2;<0/gf! fpHh`!@jQ$2r+');
define('NONCE_KEY',        '$]!HOc+K^D6>,ICPvO]PdZ(:8P}mDL$W<#.]~nJcBMj]0F=~>=)%i-tbLm65(Is^');
define('AUTH_SALT',        'IkOgIf<RcIU5?Py+qC@aXj<sQkU4{tuM(6HW}Rspv(gCKsnLokKSdo}Sy@-):q}e');
define('SECURE_AUTH_SALT', 'IeEd+iw/7>/HEcXx+dr8h4{0$t_BOl+/nI>NYnOvDm(r5 >OZe02LgT0T.HVUbAN');
define('LOGGED_IN_SALT',   '~oWgh.NCwCrT*GLeFGk?8,V9?Vo/9%$SeXveQ,HF.^eo&Zo]p=F ckyzCy2A9rS4');
define('NONCE_SALT',       'x,H{`K8rdNz45L>+HZ:n`@JYro+_$}b`Cgi_(L5rO@[Vl JFME`sZ;1-8o1MIm+u');
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
