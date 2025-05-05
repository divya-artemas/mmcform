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
define( 'DB_NAME', 'mmcform-live' );

/** Database username */
define( 'DB_USER', 'mmcform-liveuser' );

/** Database password */
define( 'DB_PASSWORD', 'e5m7-C)ib*Bf' );

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
define( 'AUTH_KEY',         'Tx%qBdQE rCL6}p8Ww-;X.n2MKS?}kb+BQd~lYV>$5OAlF94j,O`!^rH[8Tc}Ck;' );
define( 'SECURE_AUTH_KEY',  'z<rBT,&<2y^e77dZh${:B1`(mv})(yFa6JXz_T!y5%:l$LQ 2oCazom+G4*$4Vw4' );
define( 'LOGGED_IN_KEY',    '2N(XigJ#BCJmBnu6.^h%/VW_{ojokccTw#j|j*,]a_bv=c.D&~Q)?BA^hY>m^Ol9' );
define( 'NONCE_KEY',        'Pw%<5d8lV,rv^BMY5urPC4OM!>[Z)cBG.Pe^W6/;(}lGFv@rD7ANRBTuI[M]p[?$' );
define( 'AUTH_SALT',        'yj2ne(EC9).x4Q~|[.HF#9:zMQk/zW=qTIoCZnt:j^>C_)>@>ue:{@BNM(bH(&C@' );
define( 'SECURE_AUTH_SALT', 'z:+kVx*&#8i,KK4?fn]<1#*Gj?ql v :z&YZ[@Oa*g8-Q[?Z|@ue}YKMKB,]ogbb' );
define( 'LOGGED_IN_SALT',   'op|L6aC%).~=Vo6d-f_NvI-C0w=fMumXTO6``Xrp{E@HdTmPj7p)xWjt1tnM|&wj' );
define( 'NONCE_SALT',       'H_BXlxXeyHS!+[;[LZTvAw._ =79*`#,{|3l7Otx=&yWXW8&2xAy~Z0soX7wzXZ^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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

define('WP_DEBUG_LOG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';