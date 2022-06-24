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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'business_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5,N1~~ ]G#1U)p*BX=/i-SjtbE4#4&lLvCdZIsN(Uarj/j^^M2@=F]Th?}lC>:Sk' );
define( 'SECURE_AUTH_KEY',  'd95|w:fw9.$Ub;Ogd?L~kgzY^l3[*A`?^Wjl~zc^Kr(XeISEae&[*Bf]M|{K:Jq}' );
define( 'LOGGED_IN_KEY',    'z#I3O[`&t/nN9*]`x24fdUtHhp3uw<J^m(#MF1:O1`9zbS*g{KOl88W2GK#5xePw' );
define( 'NONCE_KEY',        'CFZ4GL53FADFz. el]Lpt{?8>(:p;/VQwDN/Jwl7UpQ#CK_fMteuJnMJ-v|M,y0R' );
define( 'AUTH_SALT',        '{9B0,u4||uUG4!lyP3C=$JO=k9F/xdodhFKJ6zCqP!AcGAKp!*>_ c}@~9ZB:;aU' );
define( 'SECURE_AUTH_SALT', 'fsHN,WU):k2$y6|acbLe4o@[#BbgD}LezFoMB;eo*%S9>]ElY&(<.^w}x)~OG2Iz' );
define( 'LOGGED_IN_SALT',   'mKH;>%q[3?yY}JWeL(C$bHt*HnP%!BCV=r*,vL;s$Kq]FxOULb%O%1A!eh-cI+4]' );
define( 'NONCE_SALT',       '1D}%`=5Jw]j`:cEn~BIczpz9MmXf8Hf3={.3VV(WzsdGRQ$CT!%8dS)H2/6v%YMp' );

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
