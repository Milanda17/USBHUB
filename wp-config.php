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
define( 'DB_NAME', 'shop_db' );

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
define( 'AUTH_KEY',         'Exjm_1~^<$@31H{$Vu|zS.-$nLX-4[qd,n5vC2qu2uXOh_LACxW=TT$x{+S$/O`z' );
define( 'SECURE_AUTH_KEY',  'C{`$8:@~m5%&W?v/HIh2:7;u2[}#o{`92,!{n1ymjEd;:pGM&v##utG>^(?1i-@Q' );
define( 'LOGGED_IN_KEY',    '*[$Y#oIJO)Qivy)H{f}NU5:1v70X.Q#AFXt#x2tfBkReuK)IlJ[>fkua_Rz#-uoC' );
define( 'NONCE_KEY',        '%t%ma*VkC_lB^FB5Au@z@5DxY?=Vu4,mmIHg;Z8jI5*I|{[G?DUlvn!&r((81gdw' );
define( 'AUTH_SALT',        'Q]6uwf,>$=k@JBlEc9nn3:fYe/r&U9#6.P4a~*q+6KqXo_5s66@:@Y,LR0ulm;`R' );
define( 'SECURE_AUTH_SALT', '4:eivh/UI+1zc,!&|zB*Bbh`}ae-~00=d_9j=~(yQ;/%Y.q~._:*[w}Ys7GPQD]l' );
define( 'LOGGED_IN_SALT',   '?G>]Zd+al1,?DPlJz3NX)QPVvai?AD+i-9g;2lcs?uYfSByQ]Ef&Wjm&pnq$Exq~' );
define( 'NONCE_SALT',       'x^)>UwK_-E9EfpKFWV!6&Vek/##r}J>-u<)psQ=qp7Xh]}>Nr?t;kIcj!rM}9cT}' );

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
