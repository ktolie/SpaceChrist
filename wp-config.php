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
define('DB_NAME', 'wp_gromf');

/** MySQL database username */
define('DB_USER', 'ktolie');

/** MySQL database password */
define('DB_PASSWORD', 'Guitar11');

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
define('AUTH_KEY',         'jg>b]@<2W2P(X-cmzU|&@CkYWg3oNW|o|GdJCCPn_v(Eq01:ZK3WfWUoQf)2e_^]');
define('SECURE_AUTH_KEY',  'a/7p6ZuvtZd (1W3FDBG *9_)b_ick)+FHJGZ-{sL9/6P5D2s+3=J6a-MfiDd~9#');
define('LOGGED_IN_KEY',    '.8tQX<tZ[B>iQS.]-BgTA+X1-E0|$u]e<| NmcizH2Vf9I:RFwBt)pMic+H`#6bs');
define('NONCE_KEY',        'd.$?[5g9;9H|O%Z.Vab-DAl/Ut.lU/1^isP*4/zt!&]Q*%KeR+an&ASLvSC^I~pE');
define('AUTH_SALT',        '~/ex9|{WjV[=T#?m|8O=B9Y4wilx-G|oXL)eO0[wv }u~bIthpU*f^=4L~g,-S6g');
define('SECURE_AUTH_SALT', '3eVS7nXF/dJr:f D(2s<47n^;I+%c]?|?_tXu}{+nMB)P?ds!1n#U^[=4<|3;iud');
define('LOGGED_IN_SALT',   'R4uI}^|wWN5]i&?LXw[;)%&<5@HECpq0^`uxXgJ-4%(}<-S|W-`76qe!n&W.]%+4');
define('NONCE_SALT',       'rdtV6$RI*A11>uu>}j4 @QUTjt|*{>1J{zr#rSuws0|R[y$7u2orXaYetW1*s#1}');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
