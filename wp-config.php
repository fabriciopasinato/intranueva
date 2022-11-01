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
define( 'DB_USER', 'fabri' );

/** Database password */
define( 'DB_PASSWORD', 'fabri420823' );

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
define( 'AUTH_KEY',         'Cky(:PkGCMov(5@fp6<|_Fz=MMahGfl3aO{%7zPEPyTt7Ifm6Xd+}bXuz@b|]A4F' );
define( 'SECURE_AUTH_KEY',  'Vel_HmTR:bv%;HBjKIlRS)cA?g#e;`<e]4K#.h9&d3UH (Si]V?A_!6<@m)/3#=H' );
define( 'LOGGED_IN_KEY',    '#ifRvRN>|(u VMc`4sHpety2THVD?xy]]lIxRCZMP GXt3{)dd6M+q^.#F/`kU1X' );
define( 'NONCE_KEY',        'G^kuyuPtO@[D!NcIMp+zd{j &m+WE`4=GCb8kZRo|iluoz.V4)Q<V+xD[O[DQpZt' );
define( 'AUTH_SALT',        'FI/_g;~)5a3x>GDKXqCgv`jr4U-m$il$k4!p::hwxvW$6E.7#}2MR|EXsOiE7WVd' );
define( 'SECURE_AUTH_SALT', 'dVKXik_-a8YeKTax]PcBtF!H;OVm&V43KUCU;~oYhl 0{h -8wUUg)>&of.Xx8Sg' );
define( 'LOGGED_IN_SALT',   'w+oMMf=CjdON{A}io|Zb0eCL.5zy9TD]|a`,Q;Pf4 X|tnz&-%yX`t]v1QX(}j+3' );
define( 'NONCE_SALT',       'imxds<6bG8h9]v_1}bLzT Yg7A;CuMSc4Fo$hJbH:;VU%M$R=uPP8BnP^LX44d.H' );

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
