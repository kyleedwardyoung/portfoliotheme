<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'hello123');

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
define('AUTH_KEY',         'V}Cj/LV{8>OnhkJ3#T;Q2.GzfO|6?}o%`I1i:su0|ZaSeRi=E7/GGmTz2%+{!0pb');
define('SECURE_AUTH_KEY',  'Pj7ar2ps7_9O[ufelsV Ykde%?N0XCh^jR.g~E2H]~Z!N(Uzc-r,`G!@(G^W!0x%');
define('LOGGED_IN_KEY',    'Td&8aw^6)//@+?%<)[Q/32S^=$.x }qVPL]:94{N!Gr|97(%LI(in#-!sky)8DfJ');
define('NONCE_KEY',        ']s3|9W18uhu{ZH*8A,9?;-nQFzV6(H6ytMK_w@FRpF${:Y,Xt)A7$1,yL.h&Jgbl');
define('AUTH_SALT',        'JM ^dUj[71i[n|$z5|M-23AXRGj=wHq^)6zd/0lUL-3~!~oVfo=M.I|pY)D(4/T*');
define('SECURE_AUTH_SALT', 'J<p;yT$kyz}1xn&9s/b/x#J<_yW3i~iFK,C#e>o*)M3+T$-$dSHM8. QW41*E!*T');
define('LOGGED_IN_SALT',   '|ZexX**RLX4_Wib6B2DzVy;c=|gq<z((4d.;{J&gEyw0|$BFNxaHaui,W<(L77k]');
define('NONCE_SALT',       'v~+<_e8OnQxK+oetTV)2|$|(xCJ.3Qn1 hnf%XKHSrGUM{F032O!+;5ZkzlbuGr)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
