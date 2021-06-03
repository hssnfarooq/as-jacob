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
define( 'AUTH_KEY',         'b~Ud|d{G3D_RNAn*^O8)An%oIkm+99[_8s?U*}7,fbP,O4L_v,h#m>/^s59GO]cK' );
define( 'SECURE_AUTH_KEY',  ';V83o70y~<ob{tb5cK{fh+w!Q`7!gEj4S0o/Q|SM&-HSYe4y l;DYM{d7Cce[Vd/' );
define( 'LOGGED_IN_KEY',    '3V(d W)Xs4e3X6ASrhv Vlj#g$v>3ZKM l[f<@s_}yS>@Buj1S=+$}X_k{1GS|Tm' );
define( 'NONCE_KEY',        '*]Qw+1X.yf[RyGnD3b1UF1n6(M>Wu @S*/dl1he-?Vg_mv1*#}q.pU`De*F8t&Z6' );
define( 'AUTH_SALT',        '}Z)/m|lro@h!7zf+gepvnM:i^BX)85w|>>;IJ1K/5&.o7(.t99-x*Y8H[1Aox,xs' );
define( 'SECURE_AUTH_SALT', '0@P0m+3- 490$mDR?=6^7AmjD8?{rp;Qc>!VBb&[0x!.x](C553_Rzc=.uLW^=E;' );
define( 'LOGGED_IN_SALT',   'e8~)r{|q_cy# U9g_)GG*Ec|9V[Mg:OC[i%{8e`grhj{lBLV02Ju]|nEV=t*+K=?' );
define( 'NONCE_SALT',       '-^cI=raTyE(:}JdMd%&-k;)OU3ImDEmbIt]#|sHMgey2(>E`8Pg8t>q7%0kldP1:' );

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
