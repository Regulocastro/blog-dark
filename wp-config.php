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
define( 'DB_NAME', 'blog-dark' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!U%bFR|;-(-Jngvkusgsy!m1ljjW!Np+Ve@-::@5%<fneY,@ggtnrTU&q}~Gn2Jk' );
define( 'SECURE_AUTH_KEY',  '^&Q*vqE-|,H<Y.t:Z27*9MWbB,%.)/!1vcJn2>:Q@l4/-MM5_YQ@o;mi;?B>kzug' );
define( 'LOGGED_IN_KEY',    '40)@(v.(tmHoDd&6g3Fiy@Ir&q?<BIh+8@a!=h-U=/B4ZqXD7(#@3:r9MgC!f-32' );
define( 'NONCE_KEY',        'Lh,Wg *.A76wekf${D1d)ui?favv1cS8-;HoHS# 9sdNeJ:EzvHNy(o@uo@b3t?>' );
define( 'AUTH_SALT',        'QFA`1zEu]Gq|yU6hC[##DUn}@7Taa#o!W_)}KHlBV4VN_jT{%-LlXy{XuhEm$J<A' );
define( 'SECURE_AUTH_SALT', '+3_leNJ.%^^ph9`W0@([d_G?^F&rOKj>EKmKC+Xfgvu=4P-Dn*hvykSL~YOqe]A(' );
define( 'LOGGED_IN_SALT',   'R:q]B&Ii7>-)k|NTx*;z7&Dmy3&%=)/Ee]t#Np4B]d?_(#mdDK+sJQ8FYl[HrGZ^' );
define( 'NONCE_SALT',       '.FU7eOkXZ~[q~afN.80DAm&`&T<X$(|pin.L-NRbqiAvB[h>8e[IpekPN?.QvABU' );

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
