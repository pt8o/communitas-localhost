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
define('DB_NAME', 'wp_communitas');

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
define('AUTH_KEY',         'QF95WhBSzG[?!YUSIb_AihNS= 36mo,s[cv|j-@1tR/F]Px54=eKAZnG,@]B,]u!');
define('SECURE_AUTH_KEY',  'WYr{0wL^X=C4=:s}3JpS.7k=nVn&f*Yfjzxc.iNh7~w>:VIWW}$dob`Nds!O,{-1');
define('LOGGED_IN_KEY',    '.Ejl%/rt/doy}ztJvIagdF,?V6 kn(pgIp,]cvc7#okal^$1eO0bq;3,gczdWW%%');
define('NONCE_KEY',        ':GTHUE  Su;]v2z}](<Nu~I6c>H5jFbwNp(gx9:eN;H6Ozd-6!CmGXGSUHquK7eh');
define('AUTH_SALT',        'BKt_KfK_AP83=0~L!DdyC)5.[G]ms)~Y$c=r)dJl9#P`h,{P=U[.1C{IDv:O$: z');
define('SECURE_AUTH_SALT', '}R#Sp3c6+F*??j*Qcf>)G=Oog!%OQdi&+J!CYop#u7d@8Io[}V5jQ;e-; 4RU@M+');
define('LOGGED_IN_SALT',   '=J`W`BW@;|Pa+01^~m0_PT)q#iqADm*>/yyBN.>BG]Mi=ca8#-TYLFg?#gnIkbf1');
define('NONCE_SALT',       'K]8 o.AaO:WnRq:nZ3kAF.zdnxMKX7~|Y##f`6SPm8o{`lK3.#3o5kzT<yrOOV#f');

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

