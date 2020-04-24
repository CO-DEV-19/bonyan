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
define( 'DB_NAME', 'bonyan' );

/** MySQL database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         'j=U,/7V-CRh8Q)@D&79D`NqQrFWqwR1l/7|mo7VBP6=2:a/V6&/_&C4U%s7Ucql}' );
define( 'SECURE_AUTH_KEY',  '3?u?>K4:Ti?J<kHlmaI48Py<!lvBk~t6FlmapBR^*b:gMM4UlR@X9@(MS%x~$]),' );
define( 'LOGGED_IN_KEY',    '_-oI]~V8A-cg P16i3,5eX4f@6%lb8>z|Y|R_/,KC:zz]4PEs!UBlLJDGM#DKNX.' );
define( 'NONCE_KEY',        'z1(Q$D3VIC aHC{-?b]%&LDg>N!G ZZoqblE1y@E%&)92<Y|yK?5ZfrLv~M1Df_g' );
define( 'AUTH_SALT',        'jj~TY^+RDJS>()0[s3|WEo1Z!y ;N][MCti*&P#yz[_sU<e!-9j0u;+wRn E)D8n' );
define( 'SECURE_AUTH_SALT', 'W2X/O5V?;OzT}SS=iAO]d:K9n|P+v_++SN@H}T]rFTKzhuvi>q9iP4q4<Ta2SvS|' );
define( 'LOGGED_IN_SALT',   'Kerl(%BhoBH,5da%F#jl%c8vP<,L2>W|s*RQN,l4>A30?Zxr4YP+v$AZ|n{s(%wX' );
define( 'NONCE_SALT',       ' JR%Q,$/i~2f=f!b(DB6+X~%0_=CQ{L[9]JC}]KWR:s]qgeD_(4L-7?^4vqS8^Oz' );

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
