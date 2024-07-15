<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'db_spvcshop' );

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

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'J~*8}!/)ZT(*i6LXo7~3P06NHFyvpcR)0CR(}2luw;?)[V?*.g{6ga!1jCF/oh*9' );
define( 'SECURE_AUTH_KEY',  '[M4Pk)?x/cf5^N,+gY!~9MjFKU:$f%jQ-Mb~[X}6e8p,QPJ~jeEE^d.QTf^b(ySl' );
define( 'LOGGED_IN_KEY',    '.0S#rifx6E(dWc~25Fc=#8V+OyPB1^-rp/* 7hm&:E47Jf-JVon,hnJsW32 Nchg' );
define( 'NONCE_KEY',        'Eh5<,[+{2gJW3}f|n!0&viu,e{.gY+@YE]3M.db08%r:)l0!~N =,Ex1W=S#SE^#' );
define( 'AUTH_SALT',        'NSE!!I:5,$RY^>V8 l?fd*)ryOD}Ek%qBj)%RG4>L:l`8(FmjSxONEhdW.,-4$c1' );
define( 'SECURE_AUTH_SALT', '+wsRyneL_A9=E6[3:75QO:Ab=2|M_M[@zm}cW3,]B3ICCi}5pa3[vrm0J?u|6|HM' );
define( 'LOGGED_IN_SALT',   '?!l411.x3)yMv=^n8e/d5E4*!TFOqkleQv37&Dk&rH8=0?Y9$2*Q0XuXb&EIO6ei' );
define( 'NONCE_SALT',       'l6_x~%o.o$Z}t.O;-$<mXMEU:$~.J6`>N-0ZoH[}XTj&L$oxgs9 8CQf9&TC]_)f' );

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
