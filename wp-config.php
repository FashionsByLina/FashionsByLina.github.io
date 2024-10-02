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
define( 'DB_NAME', 'fashionsbylinagithubio_db' );

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
define( 'AUTH_KEY',         'yVC{r-fW;wrG9t1I+W*nYLt]Ux}|XqQ%^Noro!^~>~<Rxm}C[8]>FE:tL3%dAC[V' );
define( 'SECURE_AUTH_KEY',  'wTFPZ4-n*D+L2I!20.Z~M5WBjJ_-tXQ)/G0OI5 l;%K~9:.F^B4cEJEgTZ.)c+J5' );
define( 'LOGGED_IN_KEY',    'LXg!E(Y} 3<wzCQ1!Oqsns/QXykNJ~#hWAzsIqU*8n$`-3BrD=.2tzW2%jvD4*GR' );
define( 'NONCE_KEY',        'nMCiH9g>N };2_$N]8`Y|}pJ/oo? _ +.A:sz60k/:??nb88LJZonK1rm_)(S(c$' );
define( 'AUTH_SALT',        '@%Us[ORcNF[ym#4FZrN]y4i[IIa9%c2fOh7&&nspoR:)Qd842Y8l:iS/9PJ-N[sh' );
define( 'SECURE_AUTH_SALT', '|MwZ}U!Mws$1Qb,IEeER.-WH^!]9P{[= (iv^KtJrOMeH,a_}H^z+UkyG3j^s~]/' );
define( 'LOGGED_IN_SALT',   'V<b TZ^*+L[fEh2Kg )NN_QWtK}tGmkDm|MT8fx{_q]mL[4rgytCK8GNaK6p v;s' );
define( 'NONCE_SALT',       'D;3E^Q2y9ZkTCuPLwDRtXcMmI#ua@q)&?KY)nh#2Z::qJ+d$<eYOR^sj0#DB=}&3' );

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
