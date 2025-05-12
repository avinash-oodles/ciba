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
define( 'DB_NAME', 'ciba' );

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
define( 'AUTH_KEY',         'b1mMsvUI`)WAF=Ube7%W/G`0Zm~i2oACJ([eZ!q;h1yuoW0),Qpt4no0<q/.Y58A' );
define( 'SECURE_AUTH_KEY',  '()[VVfpz~z,X7`}|`AOfb1j-#tU8}E0Z6v`4!_;j#d{d*_~0.j&jn1F1?lPYT+qI' );
define( 'LOGGED_IN_KEY',    'cH-aJ4p$ueK&_5SC5eFInlpRh`!-pi?idpXrwM91X9A#NoV,;:5%/P6-8mhS~fsj' );
define( 'NONCE_KEY',        '2)i9t&Hn2[xb9l5a$P@!|v~._i0u3=CkTzg YM<O.pP &!Vl:^L|V~G2-NS4}V@!' );
define( 'AUTH_SALT',        '%gL!SZ9JjAOkRj,/$KriabX8XRzUj_:F<rOc{?o)WuYXkGDP9<qwbpiS,^G{[%RR' );
define( 'SECURE_AUTH_SALT', 'mPotyaH=o[Z.S,QH-,B)Bbeh;# F17iMy21plDh9~T69qw,@V`yX!(*$?]1j2:_`' );
define( 'LOGGED_IN_SALT',   'X+meN;!vSf7)ALxJI~>!~(Pt>@3XTh~U`=cun=%56</MncQYxOCPpf)A8]YwqAE0' );
define( 'NONCE_SALT',       '>|CLT/E(VAb?`FeO=hz*tY]CfC0B;5t[-i]X~m6Dd*`>74Vdmzk^hQmSCIQfWTpi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
