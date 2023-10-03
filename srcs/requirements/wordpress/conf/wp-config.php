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
define('AUTH_KEY',         'K$1wSp8r,/<(TV#u-F=22{,+. mm8CnI*@rX+`s<YGF%U@vi}d9kQxn=fE_8:3# ');
define('SECURE_AUTH_KEY',  'JHMi|72Glngwi1H/EkCI8@<*+`[ Ftfds-.*{/eeq7l^*{s$-(}0>^)/@#Ks,HeF');
define('LOGGED_IN_KEY',    '!6S2/u<2*~f=,1)t:,gW]vlUlv^C}<>]O8YUc1JZR#rNMx!LbLmu?fOdO,t2hq[B');
define('NONCE_KEY',        '9#.nuO3RWdRw+v2Z|bfcsn#7`,;l%kC,XSo6cdCIK95Q<WVMCc[E&>jrY9${N99S');
define('AUTH_SALT',        '-.L>|XU_pwvR@zjP)!i/H*u&+z-tDChW,JfNKY+?M}z4=Pq&TA/~ZWFJ&)p99Y$2');
define('SECURE_AUTH_SALT', 'fK})FGqa_aC*LJ8iXeHv*D:j}R0SOL-jwY^s[+HW+YA.y#xmlbeFZHBI||+c+ (8');
define('LOGGED_IN_SALT',   'E9~IRE`^vnXC3Qa0v(1UH*RS~JLv1?.6VR|W0#b bHzb|FseS>y2YEgr&4`HQg(&');
define('NONCE_SALT',       'e$J(2v<u=d|rF$?J^n-[ =$J.[Krm`/ V%}M;wPp%(2x3y-s$})=BGEX_.B+<(mq');
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
