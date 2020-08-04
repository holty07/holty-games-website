<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wp-holtygames' );

/** MySQL database username */
define( 'DB_USER', 'wp_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '87aV8O2GsQqL' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h2G*nh@)[CKJzE%d|6XQUMndtwe+8d){2_LsK}|&w.s^>$J{!PpQQ/p/|@}&7WS.');
define('SECURE_AUTH_KEY',  'j@}zy9&<nngtfxbs*f<2{#=5,-[^m_nq@ 7X:6E`g%:3vTI#}FOH K7urrP3W=M3');
define('LOGGED_IN_KEY',    'x#LctY1KEBG-:!vmo-mpz-Pbn@NZywM:n}4 Fd<0$;i(8+L<.d2i-mv$l!{&D4V$');
define('NONCE_KEY',        'd T6r~ (v-r@^hFdE(p:B9,f]Ulv;<Z0Q?B8-ko=!6);Do?p~$Fx9+C#.R|X,3-b');
define('AUTH_SALT',        '@Bj  2-X;-XZ0:&r^2];9aUf:]9^3=MP6%5o7}uj?zl/Cv[D%_!rO,{jv2+]cLHB');
define('SECURE_AUTH_SALT', 'ti-.DR39bVU(GA12>)KS>ZA*5ipV)T|#]}A,kL KkFxnEp-j bqui:O)P&N@Cf%I');
define('LOGGED_IN_SALT',   '[fEd[@^2*Jx>c[O;0P-n3Eb|W8e(~lB*&=Y!TUN:e5Pr/>vZZL6_^udcm>f.zE|^');
define('NONCE_SALT',       'qV{ Jr[eY64He.UGabhd^8B&]i:T$}8<G@<Fx1gD%,{SK+W)PA-(W?#GRT=rXZ$5');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
