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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|sr*egZwP#T-``R)W7+s/_FI^tA`@FjK0poS`5WVuG13>zP{ABxMt9r`)nQl+N6q' );
define( 'SECURE_AUTH_KEY',  'V1ypJ?z1*w%i>L[Nh n2L=x?b|piZ9IWq0f4v|B%FyCggn+Pu0z0FD8341bS/KoF' );
define( 'LOGGED_IN_KEY',    '}}wKe1yKjq]{TU(5:)p4Pj[EJBQb2>s+8?VvjIyzlSm8cxr6:7ZG-qrM8aEEga|}' );
define( 'NONCE_KEY',        'P!--Fy`cR^d`jjOIdGq3{Q`x^rX$4Gg>qPyc/EpRmP_[&JZb=[3;6*r4?!ev3=`<' );
define( 'AUTH_SALT',        '|*OpVV?O0I@|w[:rv;ebZ,W{v;X3_ {8)y,N3n|1nS1_vz7se*2{|_3x]3n>b*#>' );
define( 'SECURE_AUTH_SALT', '$sZ=H`N}2YZ?4rGP?)T,0+iW&I/qn5W:JcwB7rp*8A,W!jVEA7L}WwH,W;a<~V4w' );
define( 'LOGGED_IN_SALT',   'U8&2[M$Qja+x:iyvaQAz>p-] sb@$-}in}R6im<aP:Yhv[P?6#HM-X_z,|s|Nt Q' );
define( 'NONCE_SALT',       'rUQ6O/J5l/hK(%DTBXC%GLB[l#CI-RfHm DL{@N6*pwY-b({Y*$~)HV&)G}ZH,}b' );

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
