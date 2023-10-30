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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bexruz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'DrEI[N!,&ukM<#{oWC:_4D(E8rTtW3I)F0d?<xa8OPZ`pARZgXd[@_^I3RR5`BB5' );
define( 'SECURE_AUTH_KEY',  '5fc4__qesTK<HM!+%H7Vh/$jhpxDZSE@TM_+T?$i~EqJ6Je@Pj|$Y8dU2T?K6#6y' );
define( 'LOGGED_IN_KEY',    'LANzjV29m>Qr67E/>A(HqWu.S2%ZUB>b:t<i0j>_X~1:~Njg l4*agO6G;P#uo2g' );
define( 'NONCE_KEY',        'N5>Kga$q_F?FVm_u!<;|Drx:hNI=K; qf[}H_Tk+u2/6d`rU77B<plv^5iiL5w3H' );
define( 'AUTH_SALT',        '?omZ(ve5p>qo10H7-9PbR>liXPP|HqKTp&wg@sI~,wQ=9hcGN;S$>*R-|?_8OIMO' );
define( 'SECURE_AUTH_SALT', 'dQV@Vy`P8)y^0)tVZw*KFf,H?/Tz[WrS?vv~3`>F1}j8I2A.0}pNxu.+F%*C,u_e' );
define( 'LOGGED_IN_SALT',   'flg`oP(C9]GQC3&:gkPhz<sq>J~;Q2C=uCXzyO-V:8b9L02 rHp2}KYD((?(D||D' );
define( 'NONCE_SALT',       'E D[Rs2o~C)?jF=CTQ.h%2tA;FqTj]F)Y[h/[v;% uX]V+GVb^Z R,KVh=rnLx%(' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
