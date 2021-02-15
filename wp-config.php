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
define( 'DB_NAME', 'production' );

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
define( 'AUTH_KEY',         '?skEW4V3q;ky#;hU<K<JhaG&/eGv]Dl<|!w]a}+jHz`C$QKlRH%pg__<w`wELN|T' );
define( 'SECURE_AUTH_KEY',  'L2gAcd)F06Y)59Rm2I-1$QwS2.`XjZOo]b:AvrSCPl}__ry{Gu:INAWT2?; @^F`' );
define( 'LOGGED_IN_KEY',    'RPH,.uM#zQ@*@V?8r=J6s*%dkA[XW7b5)ox8j*p1u}DSMmg#_aW$%~UfYQ(9f_G}' );
define( 'NONCE_KEY',        'y01>b{^]Mf__q^H,.0:`w(RdxM%q<?(=B*y_2*vAIFfbxa5>wh 7W)!u 2M*bsp@' );
define( 'AUTH_SALT',        'r_m241Pew63>mbP mOa.JIp-<UeR8u{7ZNmkc1I)$xGFA-(`Gu),Ot,$L0`t oy*' );
define( 'SECURE_AUTH_SALT', 'p3%OInU*:pbf4q<njdxh=tRHl#xd.)ltXM+Ur:lN+1qsHZ!~W=a1nNrI<yKd} CM' );
define( 'LOGGED_IN_SALT',   ']J/odwY#itY.#DhXE+1/)fC6JWX][~orX`fwv:l@M+k%}wB!eq>f13J}$!i0itk7' );
define( 'NONCE_SALT',       'R@~yiO4A$t3S.tCW|o(Ryt^;mOJSV-8_xC`PxYgl B$u$Gm-*AX&s46s_o]M!c~o' );

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
