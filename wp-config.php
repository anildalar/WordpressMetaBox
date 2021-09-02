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
define( 'DB_NAME', 'wordpress3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '*C$@>$8sOcKF_e-|Q3+uDVd?+pr#Mub9p%yHe?D#[J)#n*r&Jy/mt4! l?$jyV._' );
define( 'SECURE_AUTH_KEY',  'S3$l,j}wOsVNd>+6EYD.`N?psgMCu;%oZm+3?q9`PR>Ft@saC1pR?7J8SW,nzdeu' );
define( 'LOGGED_IN_KEY',    '~RJXpb;oh/#3wU) ?pRPrF]zd&iwISrHc:p([Tf6>/Pe[R.P+`Rb$G#TI!V]bJOp' );
define( 'NONCE_KEY',        '{dcq3t2En<?acsa;Pd9#`iq=906?7N)(C+0#?Z49dg/8cs.oWQ<-2byv}RT5_e(d' );
define( 'AUTH_SALT',        '9/|Suh)e5Z6E&K}vXnkRALvrnH&(oH5iI~wCdV%# z}DOVMp@:|Dxkt1K0z%m`]_' );
define( 'SECURE_AUTH_SALT', 'D(UzI_YUjo[L1WR7ozw6^b7j&H%e4@O7< 6x^J^Cm3b[k)hV$6~)U{+a@$}tan.|' );
define( 'LOGGED_IN_SALT',   'Jh{mCr42/>syq=B&^_tg:&+cED<wf*k6H@NGZ~^U7ux)jA@GOVCzv#2<vyCT%kEQ' );
define( 'NONCE_SALT',       'a-?Yg6M6#JrtJ3mIEHt?;zj`bsq@_%/./=yXrz @EBi^jkhr6Fi3x.ZyV<6riWyF' );

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
