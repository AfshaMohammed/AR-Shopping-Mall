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
define('DB_NAME', 'MySite');

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
define('AUTH_KEY',         '}karPw|*?.+H9kD~bB *ZFTeR2DM-s;n?MVAq|Kzm]DF&[e&!p~#6=5sxo-i!4qp');
define('SECURE_AUTH_KEY',  'Ag7ry&6M*~6Cba/niH{`v$gaS16!+ad+_:M=#&A[_Q$4N;UO]65A5G0FwO?klvAL');
define('LOGGED_IN_KEY',    'RuQ%Zj@J{YSa]]J1N#WTh_o{C{5|=(J@Q*MSWf<jrYHgZ}7JvL,;xng/zEH${Dfg');
define('NONCE_KEY',        'oDhBGSj^FB=YP__~+{N0J0HhL+G[BBthDPo!WjiVh@lY{;ukXC;a)SBe,a1%?&}]');
define('AUTH_SALT',        ';%i>;__Zb_(e-H?8ZB?PtK*V9ip`r/5;y9iFB}>=X&MK=kt~XXd3dzd2HBd*d]w+');
define('SECURE_AUTH_SALT', '%]x=+c*&)t*j6&#2(}D@^1n>dn$F+[3@nt={ErS%4XzecRg</e|yg*#5ktlHP_  ');
define('LOGGED_IN_SALT',   '8n8Ts9*qdZ%n6tv|^8^-Lr^~5]!Lf~qp9,}T)r4T HN=)*qS&}PLu(D1`!:ms.id');
define('NONCE_SALT',       'AL?hb.D8UrW)hFUj}LbUg5C,e&;sV?jRJNeAQLy[7{wcmC/pC#8)/<{8CMscP,T0');

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
