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
define( 'WPCACHEHOME', '/home3/kyle/public_html/portfolio/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_CACHE', true); //Added by WP-Cache Manager
define('DB_NAME', 'kyle_wrdp7');

/** MySQL database username */
define('DB_USER', 'kyle_wrdp7');

/** MySQL database password */
define('DB_PASSWORD', 'o76b4aU2CxEf46');

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
define('AUTH_KEY',         'htC>:I=7-L:lW<?KC>VfT@2<7@uwHezJxb1I!a95wDF5UTA;3VsT>c|OXqm9wF_62A\`L3_JL9?Im');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    'zRZrCxkjbiGwJdw0VqZjq/f@Ll#P\`MkA(u?AjG/Ja2Gn-NCy*1-6q/lo3a1kn7NT(Ec;rn(VNMv');
define('NONCE_KEY',        'a!OGd~dHi_\`NKnNmM@*esdi6~)UV(9WhCkB(=2?l6~~n4cu3B^|6JFoH@$dA!PwU<na;PRTG82!py');
define('AUTH_SALT',        '-=aW6R~X^4AllwMa|Xsz7EIaG(5v:<9al7tVOD$1;JcDu4h~*!F?m!JfP9f^ILn0*\`ftA');
define('SECURE_AUTH_SALT', 'vBpS7^fEMc:lMI*Z~(kF@;)KB<<;>n*tSb|DMFHR1ho#$9MZBM#lKLe>6AQwYtUg5M4OoJy@zGtEV:vQy');
define('LOGGED_IN_SALT',   '~gn#<jl4itXD7j!LdJj)Aoz2#*(Fd#F!n;IFkdCAcDbFUY1>sX~Iz1D#cEG|i=cQQ#p');
define('NONCE_SALT',       'v:LbDE\`MePM!dH~fu@=s)dhtBCVtAgNIS;xhz_upL|ze-9XKzui?Ox?qrTTR$LloDage4b71VfL\`35s(/X');

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
