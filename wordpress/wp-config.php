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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Badr@2001' );

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
define( 'AUTH_KEY',         '<?;{?VftaY$en#s)!h+:,fCWX+=E81mRFoYLRgpq Q HLsRfV4I/Th8m6QNJZvNm' );
define( 'SECURE_AUTH_KEY',  '{zeQ,dLc(?;4S$^gQ6J_/.jK]e$vB+bH@BnP^NzPA7+!`<3R{pJd9#TL2Eu8&v*?' );
define( 'LOGGED_IN_KEY',    '(]-OKRBk#[UiAYsRo$kk/mYkf7(#cR#)^ Wc#O-x-j[S@He50x}M..g*Qf*(wHXm' );
define( 'NONCE_KEY',        '[H(SmAT_0_SbP>rt6L6jO,XhE_rMn<},,-s=mf4AR}(N-4HJ7|x_eDl=!2<7?b23' );
define( 'AUTH_SALT',        'rj .,6}ZD;tb]PNavz3sl0U=HU}a f:q,fvph^<d[JoBw6I72/WAe0dpuIYWoK)P' );
define( 'SECURE_AUTH_SALT', 't/eX8Pf8j^6RqaMpCV]m](Po3Z!}ApvwUJOX^%Q=B`XD)AGK7-EQ{ac0#n.rvV-b' );
define( 'LOGGED_IN_SALT',   'LJs+=+M`VV:O}1)LMtn &98c]I4gN4j;ZFD*1!DW,.E1+&,O-?2cuQONVIZ*u7$0' );
define( 'NONCE_SALT',       'kz+^k^Y`2Pf)U`JV`*(-tXpLst[6Xl iI vPgQi_<P60#ez!;1^[1d,eU=h//x:/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecommerce';

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
