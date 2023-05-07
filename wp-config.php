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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio1' );

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
define( 'AUTH_KEY',         '*~:A!/hQb3$Xcd/um+?NDH{{ Tu4-0he2H5tn8F?M[80vr<^ lH#im:XY9FvVl*9' );
define( 'SECURE_AUTH_KEY',  'aj];JUp5~kjh.e&&i~T>-Q ,;CvqJeAMW,}xaGA|P*lnT(I}2)S0}D7RVK]5h_q>' );
define( 'LOGGED_IN_KEY',    'SA.:3F.;3Fx)Pz<,OXDr#:rA mX$]Ml:c?k]J<yK]toQ~3yS(Ht|{w{i!^aAP],a' );
define( 'NONCE_KEY',        'qlD_gLT]@2Sc$5*a.zkvgf~Nb^7to!BA,Q]4FOmen%H.wRLonWOdQeJPlz~d)UCb' );
define( 'AUTH_SALT',        'icD=Oa>C5:#!n6^Y#p6>.M* @jC,gS*6u6&a&!iXGVgxRoSblB|g5I?Yrw;]<Gj9' );
define( 'SECURE_AUTH_SALT', '9lG,_5H4fxbl#Z;G<w@=sBIxbLGT!ufd_TjBR&a5VQXF?g!Y$fkHiLSTx{J(/jIh' );
define( 'LOGGED_IN_SALT',   'y|lu_d%P2IAUa!]65U5FG26XBwvqet8Y,%Cbnzz+LNYZNF:tI6PaI0Ku-)B%uTj;' );
define( 'NONCE_SALT',       '7NqdxGDtSXQ#3u:huB|(YF}<1dT0|>&2<g2OTz|2~BY^|{cK3k1G2G!m7rKcyIrG' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
