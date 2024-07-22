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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chains_ropes_anchors' );

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
define( 'AUTH_KEY',         'rxS(P/5)hmwLR$?)RT2~l8HV[)t/eM:yJwHDKv[9.7HyH+TAthFH^4*Ahw3tWOV)' );
define( 'SECURE_AUTH_KEY',  'F_B^`+7`q2l52uDPSUmzHvNc74ku~=,b2<9vRryGTpT{~V%^$q4tQh2ITx$TrH,i' );
define( 'LOGGED_IN_KEY',    'CY;mYO%)3=dsv?hM-!:^|;`?@uBc5{uJDA43,gS%DJLeNjLlG6?Z9)GPnF2h&p) ' );
define( 'NONCE_KEY',        'P~b2-ZSbY$z*R/a7@;_x`)ri,p0oA.HIT!>%YL*m#d*]F >O~zOHiLiHIxcFPUx^' );
define( 'AUTH_SALT',        'A-=teYsbHL`x&<&V&^%P3y)=AXLrizWN6Ar+`)Xv2?eUrmIXgc~C3hQ*O%tCY4 I' );
define( 'SECURE_AUTH_SALT', '!p$VS|f t$lm+f;cO(v?Zi6?@Sx6 2*Bh:3+I@Rq <H9-(?1q7e4rxh@63|col:p' );
define( 'LOGGED_IN_SALT',   'm;*#n3f$@6~dXY}TkX-ht*JEN)3.!$VxGYvoV]>VAjlW9#u4L>yJ%`h:a{ANJmR4' );
define( 'NONCE_SALT',       'h?lzj$7;4kk->`kfQMK3.Eo+QrVLi?Y]K/}qI%^snhp|!82i?g!*7@Q9*;^?yT;b' );

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
