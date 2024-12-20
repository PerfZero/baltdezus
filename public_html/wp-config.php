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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zordenl3_wp5' );

/** Database username */
define( 'DB_USER', 'zordenl3_wp5' );

/** Database password */
define( 'DB_PASSWORD', '5t&2*9Hm%' );

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
define( 'AUTH_KEY',         'Q=yYF3(8~j6o,KABO3 ?PcHjPCw(vGb4s0_FR2)$q5?(g4p>oZbeS3dd^hjm[NK^' );
define( 'SECURE_AUTH_KEY',  'd@j&<-9y[EM>]:5.nHuj C=d,5dtpN=btK{RFQ43<S,Ix&)TF9u5=kkCs~?~`jgb' );
define( 'LOGGED_IN_KEY',    '1L<4^j2%80{ZK*=mna2X>RqBmt;UR`a/Qcr9UdRt*(&L@>G3F88*FV*LWvJ;#fm3' );
define( 'NONCE_KEY',        'lAh1I6!SOp^|%&dkQfxuGuiyFOYRNL^BI,CbW;i:zHzJ<&wv>SqlZodgq2uC_mtX' );
define( 'AUTH_SALT',        '$+[ L.}aZSg0Xr 4`oh`.ZxV:D& Sq7(%<.lOo!r1v;+v7W(]W?9RWjM8**NpI:)' );
define( 'SECURE_AUTH_SALT', ' ]|$!tkc-DJ2zjF?Phn:B+Q,,~FrerV)8%AG#jowT2!,F;deR&+-.r<[9A.[bBz!' );
define( 'LOGGED_IN_SALT',   'k?N(OSU1}Ynv4PMdGMAF|Gh4{=O](rpix| Jf2S2un5#<0%^,E-^LQh<Z=+SLiXz' );
define( 'NONCE_SALT',       '8F9nf~`o=JnihZkmF~1-o8T[|GPekmpO*d,SJgId692|9Z,(2o}7wI0{4;A=[h}z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
