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
// MtSQL settings aren't used in this project, it uses a local SQLite file

/** The name of the database for WordPress */
define( 'DB_NAME', 'sues-garden' );

/** MySQL database username */
define( 'DB_USER', 'sue-wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'mJZBl/|}mk<|q6IguGDdsIvt%M0+MuAr&2|H`^+0V|}t1L*56#gm>O~i{xTh:~V#');
define('SECURE_AUTH_KEY',  'oDvzb_=$33o?pnr*}-}X62oQ}&1{,<z,8QzU`-#Ddz&_nGzd3d|^K^VLK)F+ies$');
define('LOGGED_IN_KEY',    'Ig_A&DM)A,}?~1#}I^v7v+QXAEUv+nkfX}Bp*@FB(*,k6JhZhm?N%<zq6gB+V[/#');
define('NONCE_KEY',        '):{jYs`leuU[.kk}b_PjY7WI:D=]ap$y~3nE}v4Trm}nQr@MiX;Ft_xZH7[Z:k=F');
define('AUTH_SALT',        'h{yDDI ;hS-*f=4+XGW{~C8>[sY2?@lJU#Zf>Orjddy6ov>;TU5Xd@@du./q<Y8A');
define('SECURE_AUTH_SALT', 'GTk}A%t,c4pyx/FXSs}F{y;KIDA|W;cfOd}zcV7+Z5bP]iN|ofeW)7po-(#NZAMV');
define('LOGGED_IN_SALT',   'dm]u<@iRcXqhCd+<-`^h|ghz6rYk,~XI&(g_QgFwv94MLLck-Sm~ybfb7,v?9DH`');
define('NONCE_SALT',       '#AnzH-@ID-cY+mRf@55V)WcU{BIa>|X$~(1c])$zv>~ImoR^jErAlVO_1Bt}kSq%');

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

define('WP_HOME', 'http://localhost:3000');
define('WP_SITEURL', 'http://localhost:3000');
// define('WP_HOME', 'http://wordpress.local:3000');
// define('WP_SITEURL', 'http://wordpress.local:3000');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
