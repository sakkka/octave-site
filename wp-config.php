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
define('DB_NAME', 'octave-wp');

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
define('AUTH_KEY',         'V_e3&ndFfu+5*}1A-$wv3.C ,/57]iE<4Yi&,hG0;:<#(3NF16W,,v%HG< 6d$ *');
define('SECURE_AUTH_KEY',  'sK<o$M(#NP{vc^4;v_+ %-t4<uP1>~QOV1pw&iDQ>Vy+7Wx$!)Rd,<0]D=h4$)tr');
define('LOGGED_IN_KEY',    'EQU(m%[=4qY5(y?%2/dogPbp6;ge~E-;*%omL`<W<5]3,*7d18Ia&jlV*w?1gTsk');
define('NONCE_KEY',        'y<n^(&c7W)}MP3nqB,}96rBdINz:PDe#P_;1|^f`5lT(*k;fqdv=}qWly8moaNE ');
define('AUTH_SALT',        '0!5:z(h.wHo4zUi{BycflpJ`f]9=7VE X,RJ($W|U>9WfJ_|e )+!NgQJ1+GQ6-@');
define('SECURE_AUTH_SALT', '>C)-6/>G)-`3T ?(_t 1@E8z Y^yy5Y#yvw_.&/?Eb@yRp<E;j23;WWfx0W*LKb@');
define('LOGGED_IN_SALT',   '3<C,+L0xG0YnN*nR%e]XK;VB-@}V*~P)D1W/!}|z|DN3%8RTy$zouV&BaO1{FLd*');
define('NONCE_SALT',       ';rGkf.;[r^Y%<CX}oQc<s*cr0{e1{Yjto0iulN*w!IT]dZ>:f)^6}dV-L&orvx}&');

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
