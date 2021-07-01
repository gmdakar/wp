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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '$:.^PSDKm+mAE1b z}?P4JPLJs7}_@bk(ixEx2LG>ZPCCIuSR2)Ef@UfBbeh?R0C' );
define( 'SECURE_AUTH_KEY',  '(/.w!Or@qF6e0^T]Y=ffb)EbRX$!blTPPMRwUW<Y%Ee_}2_[mUcj|ihCVa!P<=kz' );
define( 'LOGGED_IN_KEY',    'gFTvq@R:=*!s,YZJV|t#sAyATKz4{n{&&XBf4>${f8#=5,[yj*x$ho0w=QpL!T!T' );
define( 'NONCE_KEY',        'a8=~3R+cXY&T;9 S@T/y&&IRGaTQ(@:7dTwk$^F;K2<!Q4}O.S;1/l ;.6MG XB/' );
define( 'AUTH_SALT',        'sa<82?Jb]F=+..-kSoV^*Lk/e_b3tKDROVYvOm;+5MPjrrJ`_%+9cc< 1?6uMY#8' );
define( 'SECURE_AUTH_SALT', '.*tb9{3.B[rrO!loeWt:P`!Db-zIPV:|1?M~Y?HD(g-crr;38|#d1rx9~wI~-n@7' );
define( 'LOGGED_IN_SALT',   'e*K[@c28`Txxs^& (X_CZLr$9E/z2W>,pkFTE%#udE6wxDlHsT2NWGES|.qHp?_o' );
define( 'NONCE_SALT',       'l Gfq+6B0|SfA*/XM: &bY;h<{;4ix O(8/,8<TP Gm(p5-OdIU<KwOOJp_F&S1z' );

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
