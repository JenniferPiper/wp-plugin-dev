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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_plugin_dev' );

/** MySQL database username */
define( 'DB_USER', 'wp_plugin_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hqmptuyFT6hofuhU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '|D#.22!E{z/iN89Ut6*m9hMY%E#85*apu Y`A^!`r8TT&8$GnANz88I}12wfc$.Q' );
define( 'SECURE_AUTH_KEY',  'N$i;[XI~%*8U@Vv2rb:uuYh)5(d+%DAn3c~tV5Ta>L+[T)G4)SxG,`(Mp|wvfbNA' );
define( 'LOGGED_IN_KEY',    'Ig-v_nL1{^&qqW:>m[skB5#S5+3WdvJSO}u.jZt0sVUfp}o,0EaM$Yc+2-G&Cj:w' );
define( 'NONCE_KEY',        '~Dh1R|X080H<I5DO:GDgET)-SRmE],#-DFYHl<*PK`7|zK<}{*h9&-Q^j[IR5ATw' );
define( 'AUTH_SALT',        '>!OT6VL|Cd*Gli>:-HF]J7>}@k-(}dm!BYFD|))3yF0:G7OH62Sg@8F9lUJRPew1' );
define( 'SECURE_AUTH_SALT', ',CL-8-~W)`mEju=o5fsXXo7fz?0{B,EiCS5Vzuy}niwqX.)Y+9rmKs_rS)oI>^Z&' );
define( 'LOGGED_IN_SALT',   ',XJ#2 m?Th01B)_uD4s$IP89vHqqY%Fc-yJe<(fogWc-%68 [w!5xcwcKcmv|T^s' );
define( 'NONCE_SALT',       'i~Ee7dgjOs*4V:<fiIR;IvkhN~=z0/@W| :@HGwD}HcN+w[##?wld0*_hq$X7TN1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
