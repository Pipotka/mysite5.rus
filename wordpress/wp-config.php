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
define( 'DB_NAME', 'my_bd5' );

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
define( 'AUTH_KEY',         'SU:y^vI{MIxJ.RU[+(f_mjs$$kKp!bVEaqd8/r|[4(6=d! $g^#``#6XD_mMJd1b' );
define( 'SECURE_AUTH_KEY',  '8X:3LGXi+U[{K!M>Eer_qQL{XoR_->)mQ-b3a!A?(,V$M@-qnkxCq|vkyuQs|9DD' );
define( 'LOGGED_IN_KEY',    ';Vf9W3339=fU?S7AX@3=y-%yHMlg1_.qYop]18Pu.<&Zn3~blc(!#(r,-D7lDw~n' );
define( 'NONCE_KEY',        '$*ga]lzhFg4Df1jl77E}75|7p16P`,EA?OW5Bk@.iJ<x}ocPO%j!)VkA,CA{mV.-' );
define( 'AUTH_SALT',        'wtp#nm.hn({P9kA9t}xG7<]]2U{na(ovaC*w}1eT#vWv$YPsU;w{TjzJQ<F$4FKT' );
define( 'SECURE_AUTH_SALT', ',E[J&zO)e@;`^M!)<EwQ<@U%D*nBAKT2V)cs&cu>4^3sV:nz#DcUQlXEOkDJXWZo' );
define( 'LOGGED_IN_SALT',   '>dpUhS~?x(TpS@y{T^J!dFte~QNuc[tG%Smv^Us}}cmwS-8 `Mh}BPf ;PBTU`e,' );
define( 'NONCE_SALT',       'J:/P6/`)X3-tFspuVO7:!lr-5>{h5G%KKi?wv)Px%YUyMZJWxZ*EJ_cS^}Yimwn]' );

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
