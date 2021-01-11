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
define('DB_NAME', 'medicine_website');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ud]ojvqadqb*~V,F% 8`l]@,+HYL-.Hfo/f]5xXCAda|CAt34krn|J0Is XRpu{e');
define('SECURE_AUTH_KEY',  'aih6i{9Revr~-UEkB?qkTfVzr*PhP:(C0;lgMCO(V|SC0,|k9<nMv2pM^vk/#^uE');
define('LOGGED_IN_KEY',    '>Jgw 26&srJ$Ml;[J6dL*_|4V]iUV@+$;$<781RFHZ1-5.@$.XQ7os mPd_w}+H|');
define('NONCE_KEY',        'W1iDn<KJg?R[gUOo{*O%YTU2Z+I?rj/:nm.tbf15iS|D$w;A.R8glK?1y(C15!pF');
define('AUTH_SALT',        'Z>2N{aqs57|v8*VvWm>h<H|o|J$4Lq.!X1$mEhA2l;5{(F<IJ/Ac2Nk%-OavaW+I');
define('SECURE_AUTH_SALT', '*!~+au#d=5gZN|CJF%,a$R2~#jC.]kVRIL;4H#`4szPl#?U@l>}!;WX|84<fR6 H');
define('LOGGED_IN_SALT',   'vsl-}H<V8>Vwl_@p3S?MLw{iGm mu/Tj!|UtrIw.:C[&&KM>Tqi+<+A/Wa8R:&$B');
define('NONCE_SALT',       'P0p5j n>_{S&SwvhDG]PGuT$H3k3%xUSz|Y,wi3R3M}bw*|?Y#-~2-YxRAv:Wo9S');

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

define('FS_METHOD', 'direct');
