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
define('DB_NAME', 'abababb_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'fatsheep');

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
define('AUTH_KEY',         'S^Ry{mT/#FAZCD876+hJ:5B.hfI[.jL=0iY|N3%1(D-hHzK{W6Ov<IG~|CAh$#1-');
define('SECURE_AUTH_KEY',  'X1K=Vr&RKOwFtm.eGRBle:,a)i:Nwh$#W.frfjLEP(?:9p,kZx{zI#!#wX+_agtr');
define('LOGGED_IN_KEY',    'g0-}V[2$@(J;`ReSPg2pb|tHUnD^qY@@dr[iUZCyB8XXQ9e?(vZ]&Psb+:LYub2k');
define('NONCE_KEY',        '}=G>)UV5M,3{zbgaw AHtw.{rvlfl6-Pkt?kAS0Zn|Q]4#XJ5qp-rF,4X*?(puRc');
define('AUTH_SALT',        'zXoPKL&Zs6!6Yt9gg2gk+[(K1.& ,[W>bzl;u]V$AfUS]R``;0xvZ==6_;W.]sR8');
define('SECURE_AUTH_SALT', 'c}O>mNqLrX=mNX0z?+K?P0e;}MbyU[*vO~TE!IDTsYDIRSSBvJT-IrV:CR3]X1/m');
define('LOGGED_IN_SALT',   'y,k2}lT-=T8{Xz}f)bjNl7]Sqh,r*]W |z}W;R)@z!HV}YU5J>,,7kJ*!_$t%U]R');
define('NONCE_SALT',       '%0hSQ :w]_>[+D?n+OLTb D9lV*ZkQ2!R,SxNx$^;+|yB9>h5r4_>xig}i;XD&kR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'abbwp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
