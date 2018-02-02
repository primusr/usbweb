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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         ';T$]_ysE%+ymjU|g~+Y8(5WVhE$1xFa20Yj&^O+c0 F;kc*Mrm0kOmO)^mw%,Vdj');
define('SECURE_AUTH_KEY',  ' RhHa]<mP;N,JY{.wR90uBEnqQB*]t59o[y64l-)M.^;3qCvqVrg#}Hd3Dedwu0F');
define('LOGGED_IN_KEY',    '3k(b*~Xq`h-mhtB=W[C*xU}8]ERFs20ya)FKn+o5i@FHr&_07T>`q0P:/5$Be:zF');
define('NONCE_KEY',        '%M*aELSWpUFo 5G[N_3`[O(/QcLtVhMLQd/[_dXDvvyA^Zu$ony&zsLEHMgD*B0j');
define('AUTH_SALT',        '}o)5+LXk@uD{cm<uH++((HAk2O6#NjZ(j2ZTQb-Os.{g73_5$f`~]%BKtro7 (V2');
define('SECURE_AUTH_SALT', '06J[0yt3;z:vKu=`&uJysZ_Sf58Zf?fnd?M-lWqUTM@kX4I3}o)pX|epR9CYh|j/');
define('LOGGED_IN_SALT',   '(xpiAZh12D@5,o[vlh,6c}Ikx.yCj^Hld-g{}ecm12`V=,jD}6*H$M _7,l/Dm1!');
define('NONCE_SALT',       '_HZv!#yG7a_zpq<vV,|fZ3tm}0_+(4!EU+O*Gtxk:Zdm~?c.<Y=^$FeX,XCzf`Do');

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
