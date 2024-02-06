<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://playground.wordpress.net/scope:0.7778764058459464');
define('WP_SITEURL','https://playground.wordpress.net/scope:0.7778764058459464');
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
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
define( 'AUTH_KEY','i-fbmKD72(TP,MFk-g-Y=f=>b7a7-@k<znWFP-@$');
define( 'SECURE_AUTH_KEY','t#zTK1G>tI/4m+T)eSOs0IbDNOs[q=6]ZnO)n+<E');
define( 'LOGGED_IN_KEY','5>$Oq#l8e]_PBMZj)yQ*bjr#RSMA7%XWn+nbfgYf');
define( 'NONCE_KEY','@ntUZ]70]QE@4owKze.2.R,.>*Hu/p@Ous3W]1I1');
define( 'AUTH_SALT','l@.Z$#<_2ksEJ?sF-n>+bUr%#_h,>+-twTk6Zb(N');
define( 'SECURE_AUTH_SALT','%*W.0q7BNo[^qo/+I&6kbkCMT]eUtd.Bw_5Dzuev');
define( 'LOGGED_IN_SALT','Y//@Cv>K39@%Vp8tMg$k4BKV#kC5s8&CGZeQMXRS');
define( 'NONCE_SALT','t.H-V9R7eh/2<%bjNbjt3P*tL/mz)peARYHRL!Sb');

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
 function wp_new_blog_notification(...$args){} 