<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ksoolweek' );

/** MySQL database username */
define( 'DB_USER', 'ksoolweek' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xcrew1!@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C>>ILG1:>>Ki8[eoKp%w20j-;LuKj.zb#].:,^u|ZMZL&z4mG9$UplPl,)y0AKFo' );
define( 'SECURE_AUTH_KEY',  'enzXVfE91|&U2d%pL$feNzb3QiUc{4 P3d0[v!GN5c8{vVk&dn)WI::*8A=@?RvV' );
define( 'LOGGED_IN_KEY',    't0d7w8x}A@d/>Z:/6r.Z-|&D/JwINN{;x: o;IwNGS|JQ]zYdD;p6X#r{b7@JS%3' );
define( 'NONCE_KEY',        '}!F(O#~aE#/4 $#@fJ)beIVgG2c6o]4V)f$%R~{d)7qviVkq3~sw0pdGwgdu}IK3' );
define( 'AUTH_SALT',        ':L&9cSXA4LHnH5S;N-bfdk4#aNzcU5rkTSCB.rB%6]Q.]k(xG^{mQ)z;fh+WptHM' );
define( 'SECURE_AUTH_SALT', '1?J`M(4sw1]@Cq:8Zu5}jQ]}t.RF+L~jbz}4R$):9CsSQ{V/0B~&M*bRD.3XNpoB' );
define( 'LOGGED_IN_SALT',   'HQ:]Aa[l+G6=sXjQDJUJaVCjvCjNx:p.ys,z{GE/O!Qr~KxYP17-t_&;wGphUs]d' );
define( 'NONCE_SALT',       '`.$%K;/a+kH-9NQ/f:6j|A0)d[Tx(QbC#)x%C[/ZFZ+kj`uZr](L9.L&kf>aW:}4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
/* custom security setting */
define('DISALLOW_FILE_EDIT',true);
define('WP_POST_REVISIONS',7);
define('IMAGE_EDIT_OVERWRITE',true);
define('DISABLE_WP_CRON',true);
define('EMPTY_TRASH_DAYS',7);
