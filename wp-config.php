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
define( 'DB_NAME', 'adverts' );

/** Database username */
define( 'DB_USER', 'username' );

/** Database password */
define( 'DB_PASSWORD', '.hcNc3LB4Tjtt/R6' );

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
define( 'AUTH_KEY',         'x>#Hm}K)w_ja7T;!yq;=F:vc$kq?Ps[Fj>ne2w#hro^dtDWwJlZ/ .UMiJGlBYZ;' );
define( 'SECURE_AUTH_KEY',  'SQ|ool)R&[|2[a/X3BK(WzmbE4_JfK]`hax-BgOAyaXZNx+Hj*cR:2W5(scDf?k)' );
define( 'LOGGED_IN_KEY',    'WdzJfh,K7WVPF]frPs-jxmp+U5y;s#2:t+-pwSRr=K2 ,TR^((|u%V>e5nniv7g<' );
define( 'NONCE_KEY',        '?px}VPX1iHlTxaInEdz(o1:;I_:z% }a]$e$KvXYf:5BChXjVJHJc/i< ,T~ 6nB' );
define( 'AUTH_SALT',        'y{b%e(Hg,P(Usz,MmVWw.S^B&/9@|0I-YoDw7DsTH)+CUdjPP5A,K^q64jrHtH)3' );
define( 'SECURE_AUTH_SALT', 'l{#1#b<4fsyC3-.D1w}}Kgc0w7X0kdn5vBdg6IB5>c}KG*-yWb:VzPU$W;BD7D,3' );
define( 'LOGGED_IN_SALT',   'F-j~+P.gDiDB^2k68;ob6^/#hQW]5Yk}vmu[*JA?LdqBAYI5JQABM:{5H%mjyN2_' );
define( 'NONCE_SALT',       'S%k,*eONy:S8xCNb&+qk>}h6chm$bY#`uM|/VZBU1!od@R$])[`DRO|^61A7z1,3' );

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
