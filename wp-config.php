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
define('DB_NAME', 'paypal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin@123');

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
define('AUTH_KEY',         'QKVXOGn2bAv$<Q+.g,CulP ~OM/dc{{cT&N/]X5X@ ;l_gv;06|Sy~&j.QK{5;&K');
define('SECURE_AUTH_KEY',  '&/$S^K/xdhvY8*%_-XY+bk+WXyP!!5Y@FAkseq[M(b;gEn.5.i,-4+5!k^NT:2Zz');
define('LOGGED_IN_KEY',    'k6#-*_u5DVG@b|cR|Bp{x#1f q.?r:f^+gV!k_bM%eA-,+k*M<849W#|1yRYiP+n');
define('NONCE_KEY',        'H!)<<8O|TrY<2FOSl8KpS|fNf/E69Hc<-qDDH8#9|.Z1( #%nwaz2|(/:I,0)HDh');
define('AUTH_SALT',        'Ukj[WSTn)WL2H+-]h.RTVf&3p~C/-{ga+4,[A@6?e```G$I|2rtnpf_ZSMZ-}-7f');
define('SECURE_AUTH_SALT', 'd?X<IJahlj-UZX@e-LD3OV s-8^EHZcBzk@:{sz$G)+4fJsL_6Qn]ZkL#/5^a?sK');
define('LOGGED_IN_SALT',   'N%#?YR]TEoa@%aG,I#,it)7i}-Rk+iPQ^-<o_M6s%W,MB3*BRUZ-f?It`?=5m8 K');
define('NONCE_SALT',       'E|O(_)|0^?iH+t~`7A#y.RiHJWW^x[O,:m5v:jGR_Jq1U:H-MQlpg1!jtzIY+G/M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'web2x_';

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
