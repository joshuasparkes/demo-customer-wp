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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'VU]QOh&.k.|fpV)~@D8yRDzDYr(J]_>g$`*F>6`>SmGZ);jkU3s8y2?G;6FzQ>]{' );
define( 'SECURE_AUTH_KEY',   'h<jwL_o{Ay9XIm&z%n?vg=`&Q9H70*<)P^=JE/K-/!_z&#N%y>3;pr7UBs6nX9PV' );
define( 'LOGGED_IN_KEY',     'yB4YaKNH)WM@@`z@?Q!9$WGDkTK*wVF7GiTQQ?NcLb<#_T{$!o0/_$;G}?tL)I>i' );
define( 'NONCE_KEY',         'v;;7J9(T#sfkw/ i#&{TM>UIn-fpdl]QGu4rXs,#;|5K+^9k<QYl2&^1S7Vx4R]2' );
define( 'AUTH_SALT',         'f7* 1Mk/J4WVO* b%JX5xQ+$wDtf<?HcGf)V{LMc_;.2eyBY-)H%~E_OJlqvO8vI' );
define( 'SECURE_AUTH_SALT',  'g@%Jl$8Lg8$d}h7TjMxQB$~o.[Inj!j%b&pB1RHhkH9B9!NV_EE&Lk~u{ATwzz$)' );
define( 'LOGGED_IN_SALT',    ' pe0)_|^|}BkuJ$y$RC^z*nl]^h/HJ3xW!flcx 8<(ndYyZlu?F%-AbsO^]p0ehL' );
define( 'NONCE_SALT',        'NVw5#LFlz0>$:|:{K>_+qOLn*p/KY/xpsapMbVK-<Tl}mI2PRwQ/n8R;i&7$=qBb' );
define( 'WP_CACHE_KEY_SALT', 'DLO<$OLP0#$E/VzSe 2H%hfA6WjzAMlJ.VT#|tR+BZ:0n&}d#r#e; cx+yX,N)]I' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
