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
define( 'DB_NAME', 'biz' );

/** MySQL database username */
define( 'DB_USER', 'tapsara2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qp5HP7KXlDLYTBjv' );

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
define( 'AUTH_KEY',         'D9=XPiW^i6QjGCTPR )_2L;|]|pwb_ah+,fn#:f;e$kCkt*DA~%)Wa2f,X= 8(Ic' );
define( 'SECURE_AUTH_KEY',  'C1#ZZC=^`*4aF7sJ7v0+`N0}/F.W{Gx[43m,/|C1QrYo1DuY54b8wW:~RZ4o_N_O' );
define( 'LOGGED_IN_KEY',    'J,{Y<nu4k] jd_[>A~*3xLS*XUR (,F4G=|Qi33gPMRVE<4Q#<TBD0p<O}#b2k4{' );
define( 'NONCE_KEY',        '[wuovhPBw|4+D4vLnkbX%`9@7O$bxI} T9{E/T8{c@#}NHRD}sN.o1!GF8~@Cv;M' );
define( 'AUTH_SALT',        '3R;i/{c%H/L+-_:nT$rv ce&; .<Zi`!.|jlSYDp%-64UF)0!VBIy$$1EAK)$:`~' );
define( 'SECURE_AUTH_SALT', 'W-GjtKNQv;]X.*vA@kSCwFX.1yr,Y}78)D4q/z&0?0q&e.m-/i4UwKa@lfVoDCjI' );
define( 'LOGGED_IN_SALT',   'lNA:)pSJ]TOjm(~v)e<Il6|~4lXb<sT3^x1T&F:^FA!]H8@Uq>SB2@5*P&eI!hH ' );
define( 'NONCE_SALT',       's,aE: D;d!O{1oz(aqLD1DU%.O5g!^7I;a~x TR_>ok9^xH`$X*i?JfxVvJ(FzV3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'biz_';

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
