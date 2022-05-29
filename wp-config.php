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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         '(/i8cbM#bb]MZyq+UpCh(E>/#K:l8j!2VmiXuVH`DC?6RD5r4/~.`+!aF$<qTgPl' );
define( 'SECURE_AUTH_KEY',  'I5F^>]NV7J/kmgUAd:|zJeluruWPYO&jGh|UL)qHF:**HFRF: D!PQ%nah7W$}O2' );
define( 'LOGGED_IN_KEY',    'R>!L=D>^sk{,dBTKfB[/d=.`_J]Zi7D2s4<|T&LW0cz.];NC~&TbBd[?RhZ+rT}~' );
define( 'NONCE_KEY',        'K!:@@f:ia0xH!w,U$BXo^6P$jU|@1wwmBY?7[/ O:)2Erqs/xlg]W_>.Z_Wb{PCA' );
define( 'AUTH_SALT',        'M=E1<@t<KEjayAyo3z(v=HejI*j^3YG4RK^j-?ebMGL[F7j>-S3?DYg!o|4tqeJj' );
define( 'SECURE_AUTH_SALT', '-z*sK*Y%>@57GA9|HlQ!u_c[{9&67P>yAHM7MIh$yQ4& 1|Pr{DJ,`JC7<+g/Qu6' );
define( 'LOGGED_IN_SALT',   '}H%.C<5d&)Q ~,uHd9[dcSj-2<N9^Y(sr6e#UbsZaWUA;tWB :9aYLnc*REo-V+=' );
define( 'NONCE_SALT',       'MUpDV3%%-D<sW~Ldu2s.}7VnquU+<?bw3pn:csR`8FS:Y%0Ss^ H+0VU,y?pJ4xh' );

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
