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
define('DB_NAME', 'agenceimmo');

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
define('AUTH_KEY',         '~AN&n>wKrZHwk%EL&q&B]u+eEpqb`<9#yXs+oxv9c1Vsr/N5YL|$~az)8,RLCd,J');
define('SECURE_AUTH_KEY',  'xb%<h7KuSGpX~4pw@%?N9EPzRO9/E,CPk&!oga(IUFvQL+hn)VX&cpF?:dl;KhnC');
define('LOGGED_IN_KEY',    'QMtw3Q2N[PaZ d]uRBO;K/^5JA(uv*c[7Hkq<Q6I[S-im5S*=q+Sq |?skwvA`jm');
define('NONCE_KEY',        '5B298Za;4^AXa)[+8:%b/XoC3$E%ek(HY&j!fJ7V@!*^~Ua^gqIsVJ5Dp0&m^45|');
define('AUTH_SALT',        '3T[;@`VIwjKj_w_a~#0N%Hte7:,sk>YGzK0}On]Dv2-9{4<Q@MmQr9r%[HAHX4di');
define('SECURE_AUTH_SALT', '[75ILLM1dYt<3]5^EzSP(5=B.n`q?7CixgH;tlC,Lf_j1.)-SpwMBIq#~{muplH#');
define('LOGGED_IN_SALT',   '?HwNTc).YmVU<4_H0yPvJFupb%3lmDP?O={;dlEDT|I9AeSC|v}Ma~~jf{w/P[C*');
define('NONCE_SALT',       '{C|2)#AD^%q:*X17I%=z+D]W;dcS]eAm#^!*yPVIC`m38!084RH-?JnO|=gc[BN0');

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
