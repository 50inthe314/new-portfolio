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
define('DB_NAME', 'intheco1_50inthe314_v3');

/** MySQL database username */
define('DB_USER', 'intheco1_50ver3');

/** MySQL database password */
define('DB_PASSWORD', 'IuFd1UWP7mci');

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
 define('AUTH_KEY',         'B-!gxIy>TH B%e&_lI9j*-.VQI953hH/$fImr?<;Uq=ge7>HeV9^Iep|H$;3+Wu<');
 define('SECURE_AUTH_KEY',  '.K>U-@||w*aew|IL#)/rdQ#! :F5|HdhxA$2Hybm{U[.>#o~tr$No*%I~f: #5jO');
 define('LOGGED_IN_KEY',    '[?B<&_g%8[>B@8zTw2Q$$6.uff|d7.8:,tJb:OQNwCAM]:RDu*5@_iuyV;kzSs*F');
 define('NONCE_KEY',        '?2/U.Q(wQ6h39|f8Yp* 4!EE`Eu(@$K+:%V%!$*8RPd}d0-u_BWa9%M=ZZMH@cb1');
 define('AUTH_SALT',        'RyOv=69}VempxxX<5u04n#@2[)@=_Y=VjISyCxRW0K/&qPQ!dOnt/#8}lI YE~lu');
 define('SECURE_AUTH_SALT', 'W)?-ImSC+L`C}}3ka=^8c(@MgP6y``c!;Dx--Oe#;wKUA7h=-g.v-.S}a8vM<sz6');
 define('LOGGED_IN_SALT',   '*Bok2Ny+9Uw4S^)Jy}/-c--:Ty!<hGEj&*+9KvZ7Hs|`e2Srn);+Sy!^b1V,A&-v');
 define('NONCE_SALT',       '+D1l+7|!2K1v%AC} kUCfC@Y$9`XD^5uYn&yrmN9x~9EV{S<v 0GJ(MrJ3!?R=|!');

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
