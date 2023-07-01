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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '{MY]-{re<  zya^^w]4T$+*I;y]y[Ax|^>YDV]n|LPQ3R8)aWm)[1=R-=mp8&hvV' );
define( 'SECURE_AUTH_KEY',  'H^~*Fl_~Kh#uB+HcyL dq7dOITU1z)=]3#Q_`;2ylNx=_j5/DAZP7g=/6XPsGQ*E' );
define( 'LOGGED_IN_KEY',    '2/jX>7$tLwPFGx^A.-ZIL,%Wgf&`-HJbsf*o4T~B]}l[]b,ll=tLQ%~`$j!ZZoQ-' );
define( 'NONCE_KEY',        '3*ku1a+BNRK&w/78RF#fDXp^NLHlC >su`9a>Q!hrI#I7sac>j>Yz_tuni{|gtYa' );
define( 'AUTH_SALT',        'hK B-it?EnGe$4BBa5GN%!aS bC{.z9[Sx B01pGT:F/y.4%0T3c8j`L8p~*t zx' );
define( 'SECURE_AUTH_SALT', '+_>^djXtU_`s_cXInbm:UTKT(2qR[-0[v~8JB4=]aT $Hmwb<J@u@!F^u1^~^kS9' );
define( 'LOGGED_IN_SALT',   '<@ 1$ae1-X,%r`!YF*k<>eLfPu~|1)YWu)I1ZQSB}`|xrxt(c<yy[JF+5D,zR!*b' );
define( 'NONCE_SALT',       'Q3# ]@AZ@6^rxjGu~@_`odFbj]]Wx,YA1Ix :h]na$#[)d:Mnv.X5<Q}{l]%xtvs' );

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
