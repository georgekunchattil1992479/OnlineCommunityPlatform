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
define( 'DB_NAME', 'wp_online-community-platform' );

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
define( 'AUTH_KEY',         'j3ZI;}j(U}h{W=+RXqAji?}sozU~~As^i%tg2A2rCrn#gGb4[u?XYH97<B|0jUCu' );
define( 'SECURE_AUTH_KEY',  '1uE2J_3r7bcZT=r++qMXrl~tR3tQd>Vg<Hm(e^P&M`{+,!AI23VSD8C aon%Y@l?' );
define( 'LOGGED_IN_KEY',    'c)M=I)6bv:f:@Y5~`mWJ^Z=8Q*1T+Wa~!c=S?F[Y|O4?iGZcl7?f;X=6P/07O<k3' );
define( 'NONCE_KEY',        'o`8[m7eX[g#nfsC#5OQiKN(Fld4gz&5lj~*je1X}E#7>culn@j+?.hXa2<`k/)fG' );
define( 'AUTH_SALT',        'sWMrd(@GJh>VXHkS?[8mRA@_42=C#lh33:+k=4v=iTU,kyyP3|?Xh#d(6J<u.w#t' );
define( 'SECURE_AUTH_SALT', 'j`tgRJ[0N&qdHKV`u(=7mi+`k6t#=vbd0xanD]e@(r-@c+%Gp=hEFDZgft);EilX' );
define( 'LOGGED_IN_SALT',   '(B+c?]46>oj&X,;L8ocgT*&po(~E[?0{,o&{{/%K{amV2zg>f7Q5@oX`XHSRleqn' );
define( 'NONCE_SALT',       '8GbahGW?Y+w=Vh4U_yu5/c]6>ziMJGZyn}z.OOUL=Zga>LX29/WTGucL~^Yg=,jO' );

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
