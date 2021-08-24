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
define( 'DB_NAME', 'meekstar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ';wX>&x?e>j)Gl%e|RP@x#~todY5A}J5YI6[qI0+HF@T0Q:7!b`#3%B):4iW/2q)8' );
define( 'SECURE_AUTH_KEY',  'ZvRm5U/9WZvra~&IytyJMOj%,]tM#SPsQdeKP%zfE~J@iOBYrys-`( 5_AB?f#{e' );
define( 'LOGGED_IN_KEY',    'q7Qu{U#@STRP( A}Uf>c/szNwZROzV<BUD`TT}L_=c&k]U93,K)W*Rmpx>KrVTmX' );
define( 'NONCE_KEY',        ')*>A346kan`BliG7eNKYQ{4-9Hq<T~5[,Hn31q^yC^w$2oyqRH&%X$D&B-.{2b%T' );
define( 'AUTH_SALT',        'cf?kyQuL<mu.x94ogcn3lH7<t;S<Fh(@LNqT$pX>}t:|;3L|AssnOtatJSFn383I' );
define( 'SECURE_AUTH_SALT', 'lHU -AXWE8~=2eAG`qs_ggnDoG#c<wz1E}DX#J^Nog%@7z#Ee,2-g.P!i+l_pl8H' );
define( 'LOGGED_IN_SALT',   'yrcDK9pp(=L}a6%>.c hz@z.&D/?T6tIWBs})28$,d/iSW4%S.4`d-64H%oO]`w?' );
define( 'NONCE_SALT',       'SjUkE?2snrqc4XFjDOZLL6 :.w*PUo! ?1`r_(+-%x_IqU{!c0n~`~+FY|z~X#Hp' );

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
