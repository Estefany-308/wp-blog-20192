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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '65a6cd7c6e36b8d9a308a5f9c5047593c3631eaa803fa2d6' );

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
define( 'AUTH_KEY',         '}gq+<COyo=Dq|LATFu},~[{EBn6qBDe5|(!Fi7RWm&1b0);K!!MyObhXi^OqD@Eq' );
define( 'SECURE_AUTH_KEY',  '%[^<bX$Fh,/S=J.,IF-)39#_wN7zlQ%SwWb2C/I(D|yubvB:i%4MAvT]Yuc-_bgr' );
define( 'LOGGED_IN_KEY',    'GyZNG!dnm8 R&6F_%E0uw&3{A7t_8jp:ZX7KDB8hK0K9H Fg>>OI$P)P|jkc;t5?' );
define( 'NONCE_KEY',        'MDBVzpv%OXMqFZ5-h>%4H.4_`N3,6 lKlX4o1?>(>9g/1:#&Sp6HS|3]+>F`i$y;' );
define( 'AUTH_SALT',        'QCSQ*,:6d>pn*e/f.MND]_kr?6UA+mBO&~b=`l3h];%v81.5Y[fSf{&;;)PU?b<X' );
define( 'SECURE_AUTH_SALT', '$+B!:<V_I}VW14yxP+hsF2/bv|f2U- &t}IvmP)G79`zQ#8k-nK9#j(-8XTmz+mO' );
define( 'LOGGED_IN_SALT',   '_XL0? : ,k;Z7k8^nm6t}*md+!ON21[]3p8i{>fMhDEIGgbDWJ2coGC8DS?2iK%M' );
define( 'NONCE_SALT',       'f AVWS1X[wt~d`}wF{u98[2}OW$_2gr|&V@1vH<;md)^p`}##Ti@F3KO:`Fxv$G,' );

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
