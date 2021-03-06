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
define( 'DB_NAME', 'wp_seba' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'TutY(_KQ#=[B)8 $o~.=C+h-{^p9Yr2W@FHU#{,Cp8>bjl>&*mv!GD{6jKxn;k[X' );
define( 'SECURE_AUTH_KEY',  'LkNSnN9rrF|=|r60VYaDnq3=ED&8|8EgN2NZ },U-6@><D?q^{s>,5ZG~Jsx.cUE' );
define( 'LOGGED_IN_KEY',    'qsaA)A5(~>!;Hh24,_-3jC5h@d(Ts(j;5eb{SZo]n!L;!Q1#5z`~QGj{3P^(#x6{' );
define( 'NONCE_KEY',        'p&AjZwPn5W^T1&gjB4qh*rvEv1+FR?Q6Knh4:4q_-gPIr9ow5i !y{w@|/wgFv)A' );
define( 'AUTH_SALT',        '*}L{~D0E?#=.S=sxgB^,yO).13sMo6#Q%L}fTo2ezF=55j)>C>+L5D)FMcptP~lD' );
define( 'SECURE_AUTH_SALT', 'sz1X.J~L4P`/x)+X/ZaPB d2]s1mI2>MRY&z:M5k%{Vyb7qF6UPbQEno|])K@ga#' );
define( 'LOGGED_IN_SALT',   '1aK-E%Pk{0^>]GLk>|_z$u}~pn>u*3cMkiF|<o9PUe9,G,Xr21j@LjrjtUYFx*)o' );
define( 'NONCE_SALT',       '3JKUt]l2nfN)/ ncy}O6ic1nvSTKK&Sh-<p~fOH<-WotZhV?!fj2*y<[]MD}<pG|' );

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
