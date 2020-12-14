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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webhostwp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nuwansql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(q7 8 /UdVwLu$N(@6<(yC5RY?%.:Z{cD2S4KKbY}PE8GqQ?mlEhQ`zp{jaJ#sFI' );
define( 'SECURE_AUTH_KEY',  '4t,jhB&Jzoo@p;CSI6i:{!If(Xou)>ScsI}Lye#[vGu3z7{0*y1o/u`@y(TaV{s^' );
define( 'LOGGED_IN_KEY',    '8&p+_*pPMB?)MjsVnj)m?2s@7)j>0z.Vfext!Lax].,Nec&5Ret*(b,dJ<N0^YU>' );
define( 'NONCE_KEY',        'QrQv?{w]&=`qrdj:C*1aW.yrqBS^AX;i;]7_ktmA N9Secl45N->U>W7uFW=+7%t' );
define( 'AUTH_SALT',        '=!v&Z&aQ]C>_?637M=h4%F.}Hs!V`9qI#hF4R=kPyTv}NDo+u4EA/ntoTO-d?<i2' );
define( 'SECURE_AUTH_SALT', 'AAmh;:!(n2*6Uik!pRS1jHGOCXH#Y%|F*)cJ7T!~*tKsJ?Ql5^H]!/fg,V}#G=(n' );
define( 'LOGGED_IN_SALT',   'O#y3#H]{i,_Ms2p`?OCWD&Dy5YeY&8#GDzwQ7@tJXJ~?wrpoEKO]we7NE1Lz-Ybz' );
define( 'NONCE_SALT',       'F m3Br=6CawAY<>&DpR=Ob)iukb-v^MHGNazV,SnayVvyDyISCLUpY[@:a]xWzWM' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
