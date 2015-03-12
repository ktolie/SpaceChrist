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
define( 'WPCACHEHOME', '/home3/kyle/public_html/spacechrist-staging/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'wp_spacechrist');

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
define('AUTH_KEY',         'LH!9jKs<>V<|Go^j7aVt>\`>O56NH)DU2R?zjuz|?Q^-mLIy<)gEAdS<t3Nra<isHm?6y');
define('SECURE_AUTH_KEY',  '7S#4?P9c^~iYzC8QedjYGmR125ozftN@1@R@RGXf=;#6-=6VhLz\`f!;J*7^Y');
define('LOGGED_IN_KEY',    'zZ#M|dIm\`IQ0n94^2WI-Ch-8y(ZGXN53BL5p2zHJL(LNdyh4NBFRtb)ozWPeZ@52Q:');
define('NONCE_KEY',        'h/kUf(ea*Ohxr9AykObbuz^KbY$_el)a;EyGq9erDxqW(bBcq#qcX<8Fm-GM$G;dS0~x=yqd7');
define('AUTH_SALT',        '<ct/<juJ>T|E^2TsGr7os__$7zzCdzh40wu7DJt$pd1ADzY*PD5*/oyk_^~KB=k~qCPw$j<S*oD<0zC\`X3AUNN=');
define('SECURE_AUTH_SALT', '>VXb6O>Bx(LQ\`:7vH8<$\`d-1LlAvh4@3q0eZ*r@V-!dyxSVn*66hv$X;ll@?q7V*-E1eLDG_cD_');
define('LOGGED_IN_SALT',   'R:!hodz)cK^QSM8sHsY^wNbtM::Eo0|f@<Wz2#J:Ih#asnua8prjYKtjx)k<|@c5@Z08Z0If_(cm');
define('NONCE_SALT',       'fYw3(T2i*<lp^fIO=/$\`u08t8GL5h42^0\`MuI$qvwWwxm@RuX~;cxc2LW(vFO2byV');

/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
