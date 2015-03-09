<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'd01d7f18');

/** MySQL database username */
define('DB_USER', 'd01d7f18');

/** MySQL database password */
define('DB_PASSWORD', 'PeR2Reb8Hsv8QxWn');

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
define('AUTH_KEY',         'f>!4<IY)i?7`!?2c_K8^-gh/:VDz:z}JEo3x$>(=QhL PH#o.GW#A~ban3%.0n$Y');
define('SECURE_AUTH_KEY',  'G-/fEl$#xai0HkIzN|o`C{xZ.]syM}Ia3XDW6-l@Ia)bRz:iuc ,;!-N3dV-Yeq9');
define('LOGGED_IN_KEY',    'zd1]Js-,!>xq0tU(-q(P%U<&Z2|Kmoy5gSj2jH#m!4KV=>O,L$CO:><RfdSJ[S>@');
define('NONCE_KEY',        'PZ*gwXNnzM`eLa6V+DEal+.y8Gk{*,C}`aFODwZDrmv[yO{Qze];m|D-X--ydieS');
define('AUTH_SALT',        '^5y:Szh(f)f~2Y2r-7BOypyBm~H[}~&um$W79P/~#n<w:)g@KQ99!Z(b.$-dox~d');
define('SECURE_AUTH_SALT', 'DhB#Rc(tP.R|~`9nG7Z%_(K3|7<FOHR;^yb1{:A2To6W=&<!YpQQA2.qi_2kp^^0');
define('LOGGED_IN_SALT',   'ZL:C(mgI.?Yhd+xFJz^${2}u)-[d#aU/!>eie1;iBLJ`sXxMkSp%-p8Dy7q)K3t-');
define('NONCE_SALT',       '|,%74|Q-PuV:;b!R~YFlb<PgDoYWE:~#Q[+LlY|}%@pdEN/KU.#v&gYC*HeG!dMS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ftwp_';

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
