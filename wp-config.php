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
define( 'DB_NAME', '2mpress' );

/** MySQL database username */
define( 'DB_USER', '2mpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '2mpress' );

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
define( 'AUTH_KEY',         'Kf2wm~![KE]Wk&sGDR;&f/T-v(kX_++`_m@OuAhTrmvK)H`FQq$E09=@l.T5l|ZI' );
define( 'SECURE_AUTH_KEY',  'Q@Oip95,pp3Y`.dH,S$/hUGtU{weV(iAC)D.xn~Ea]a%SQt{ETpr=b1?#ncJ.uIz' );
define( 'LOGGED_IN_KEY',    'q$Uf3>LR#53H> yi)4TA~J25%kwVrfZ}I *PPdK;v!fx3JvHm+6]]M2GE&}YHH8#' );
define( 'NONCE_KEY',        'FGh:k_ o7@/mQ6S/>oUePKIq,rl>nH&B.un_Ggx)/$)={d$%X9}s!E4#6z_d2)rj' );
define( 'AUTH_SALT',        'vydjmA^@9m|}Rqlf7,#.Va&*d[(ds$x?fL#%Rjc>uA>6g}T38_@/P* sn{.va5iG' );
define( 'SECURE_AUTH_SALT', 'CC}6s~FBsect$.M]$s-B2>>vxJZP#ypI!:N=:|6%p%4SG)j/QYfW/hLA%-J.+-.U' );
define( 'LOGGED_IN_SALT',   'Oe(FB)BpM*m:G?2&2Y:(A+HrkP7`L=ivM-cX|2qXi}ojRc5CVVSI$}N~f(0f`PZ:' );
define( 'NONCE_SALT',       'uG/96LRKk!wf=Jgm|T+:d}&gnceHrk{%-cU,MLX9puwvM%=np;m`Q_NBx+0fZ9Z,' );

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
