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
define( 'DB_NAME', 'saad' );

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
define( 'AUTH_KEY',         'A& FOKPU)Yg3uu5:y$5c<]|!PBg@9tZQepSOtOP6ub?j9Z[$YR5<!;p *TS;{/@u' );
define( 'SECURE_AUTH_KEY',  '!2lHoPKO^lnuw,2nazy( V^XW*gTC+P6KqX jegmK_r.z7z#X8L*jjyWZ|KMlv@o' );
define( 'LOGGED_IN_KEY',    '8C>s4qNi%NfUh8fWKj0`bDKbAt}m>p}1DeL]t%PTboDJSfE67-p~9FAw=%gR3tkt' );
define( 'NONCE_KEY',        'Zx&qiR=W[hB<ea{P+SHzi1?X:%,&K8ud/fO?60iSCFzx5ZzB$HsvS%4L~9-lHtO,' );
define( 'AUTH_SALT',        '5hRPh0a^B$1d26mUpLXR2H)_}*i/syfQBD2,Mcn(b([BuO`:/m%gCq|~*Xvj:O^h' );
define( 'SECURE_AUTH_SALT', 'z;wVy F9?2x*2L|5`~A^JWTTfNZq6IdrE+|F)cELaZ0,=WrKf]|5@[kh;+d7e2%e' );
define( 'LOGGED_IN_SALT',   'vv(/-&$K ?Jk,^[TQ^<i|% dmV#>mhjS~;ZGwMpX[HvOZ.&#|IiJI0SD5A^1gfg ' );
define( 'NONCE_SALT',       'a,Po`8;QNjB#%fd?1<kHOMRjNluoMc`I/y6xMNN.&CsL|Q35_*A#$`p#6]>etnq:' );

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
