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
define('DB_NAME', 'quananca3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'L74LC+rZ Je2;CBN`Hs(pC6!g|DhrH>tny;kOOi.21JkQJH;~uYp[~r6 m8R30sd');
define('SECURE_AUTH_KEY',  '2%0CK:)WWtG.lzpx+_qmK;|M5IL&]m0%+/K`2,Z2!  H$j^5jQlM<I0F3vh%kjAh');
define('LOGGED_IN_KEY',    'YGYcp?J2,%8=}o0zSOgM8?x/vG[0;v<^&U?xi7*1kd,xo(gSO<}5BF$U:s~nKLc ');
define('NONCE_KEY',        '2knI]6]t{>.iKr;TJW.10W[a10zFaM_+58!tsbGQ^BYl7;IrHERHnw=Oobwx1.[n');
define('AUTH_SALT',        'u=5fCf/jLTy/3q+7,SvbzKQ-JT6H=KAu@d+(}#OU-{3d34^F>Tb`DP> vluM,b6T');
define('SECURE_AUTH_SALT', '-*s%o44-iqB?-LD:v(X2]aS!+mlakt,I-69R8YalBzkTTXg4``H=c%dt.Vx!`=<t');
define('LOGGED_IN_SALT',   'PLR .XNQEnl2Vc#wx)7sgeWWv2]&I(4ULtWXyv(+I(IB.!a&qp@N5b+05{-|E}0z');
define('NONCE_SALT',       'F6Qz+~$F3<S1>:N:36*Jt~N.a!eKw|,_rtBw1FTx:tQ$)+.wfn6g-#Ex)b#a$<nu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mp_';

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
