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
define( 'AUTH_KEY',         'g&4i;9*B#~$poMxl5:0B&5Vhd+Zoas f=AcK#Jms=-$wu=AY9a[z%(O$>(4.Lk`h' );
define( 'SECURE_AUTH_KEY',  '7}Se@Mv (K^Ya=4z5QPzitGB[lAh}^M_!V^ IRo[]ezzzV.4WIn^AZwWdx4(&kgL' );
define( 'LOGGED_IN_KEY',    'Ksr$Ub4P/8hFigk_ZHgI>#e7p|R3Bo<Wfr,m>H6/D.?&Z7D5YKB31`rk-2qs^3{)' );
define( 'NONCE_KEY',        ':px:J`^0s,;SkDuB)zI.iCi(<r^,[YR<cVk%OivJF4B6.lf2/F-gXC3%h5!i~03I' );
define( 'AUTH_SALT',        '{?ETIjv}~|1Hk^+(<32;M6SWRJ~f7e(yIbtj,{%R%G<_7FGYV:YZP/9N686=D1]x' );
define( 'SECURE_AUTH_SALT', 'H6  kgPaEFV{R>Agg)k 3B^@7ExDg!4N_j85+`}~jTJ6vh}hY@t*2%.>fo]QLn],' );
define( 'LOGGED_IN_SALT',   'A(G-/*Y]&F![^g [vkq>#*VuYEj>qmEl^<> 45gj@VMX.qw5#?:TO,t_Ad< aq1|' );
define( 'NONCE_SALT',       '&LG=Ibe# EK<^?cC*m$0;HJAp1;[w#%C!fd,{b>cUmb}]|*`l[KXC,fT D76#r~m' );

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
