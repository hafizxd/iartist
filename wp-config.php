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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iartist' );

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
define( 'AUTH_KEY',         'S1@2SZt{Qk,Y.SoZ87rTxj#uoFPWwV;xONpHz67{{d(Vw:h:m>9o*p@q,X4LO*F@' );
define( 'SECURE_AUTH_KEY',  'F[j1;pe?Nv GwJ`Lx/k`)mSFT{086mIX^Q )DwiaTy)&*D^Ab1bR E{SG3ETCkv(' );
define( 'LOGGED_IN_KEY',    'Xs!VKc6VOxdExb8X8{.0D.nN,7ZoAv};I):M|&{$kgk^fp392i5nh:}2I#+2)Y;_' );
define( 'NONCE_KEY',        'ot7oTqvw 5?*Xq,,0eu15+vMQF{vYa WZlo/)#9*FI}*(Hc+2H|.bNh++;oK>/(N' );
define( 'AUTH_SALT',        'xq+)Kw?w=o?2$!L>V5t=IgK&Rrb/9/z=Z9unt:Tul:~vtA,CRoq?{=U)ZhqBLqmI' );
define( 'SECURE_AUTH_SALT', 'BP!etKY<kE0.q4MPL:=U:@9Un$w8/%1E`}|P$bbz)eS[ yFhZ=v_3-5&!w,E!(9s' );
define( 'LOGGED_IN_SALT',   'csB5T7#x*8J>Lrd0[Vm7/,Z8}3]d8 7v@/`(*_-&Y)aX@%G{s}U2_n&|/DN-S)hl' );
define( 'NONCE_SALT',       'mIgv)r!+17H>+?@63DYeG#9J3N}[2 db+-/Ip6OO^KrST@`sJQ7V]}_/?.OiD`OS' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
