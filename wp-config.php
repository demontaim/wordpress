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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '@Csas1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '!&Y/E 8#WHyGJ;^Q4+ks>-*PZEK9{>dcf(GR]oNIsv%]8.W~NiCXL-rgO0#mb|?o');
define('SECURE_AUTH_KEY',  '>OE3f3^;yVrSah ~h.?|<^I_+=p5_o/pIC36q47bo!~Sti>B4;-^Xsc=LRR6}XI{');
define('LOGGED_IN_KEY',    '7af1W.(jZxD8]3I)ESNU@r?CscuqM]cX*F:Q/T7~p2l,|93yej-c*#f+9V8m_{yk');
define('NONCE_KEY',        'o{[,l~)f>Sy{0A*9umz&Jco=*1~:?5${*G]U=*k(A&@P+ f(FUof z/q`R-HVUts');
define('AUTH_SALT',        'GgHwZZuu.%wjNeF=Rwjj`XB>M6`v|m=O;r<A#rL*|=J3Ed[z|2U-o:VsM-yW+&pB');
define('SECURE_AUTH_SALT', '?9| Mhq2RB~t]-6UpI7yb+1M=3`^Y+v+?qBPC)2~a]? :g),X^<2A{0phjZOop1q');
define('LOGGED_IN_SALT',   '2ZkT+$]-SNIQ6?a7kyLgjSD=VD,xsvKOgdCAj]/~-K*K:yZL}FrN76Ja|H$8k+b_');
define('NONCE_SALT',       ';c[A@|kCQ#y+EB`H(d!-b?kZ8^`9[NRyyq`D_|n3>cAaO4GTTnkXV|J1k1cB]nTu');
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
