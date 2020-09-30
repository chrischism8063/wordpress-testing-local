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
define( 'DB_NAME', 'wordpress-testing-local' );

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
define( 'AUTH_KEY',         't ap(dR^!,}Z`2Ur<FsUcg.Cu-)FbKc( >:6/tt_0|Xop}rA)3aAs%YU0ooDy:dC' );
define( 'SECURE_AUTH_KEY',  's3xOev1{fL!`(I,a/hqpRD:L9A2_1#pRZsIOJpAJ;:+QAHsnj?Qv;Q`UzrgC!7{[' );
define( 'LOGGED_IN_KEY',    'SL%l%d#W7|Scc0ri45(&8gC.uZg>q[)|u;|gMq6N}[}AFpVcAG(vXJ)7//6o|p9<' );
define( 'NONCE_KEY',        'jcB#3]a,I&DJok<IOv2m$o/IsT$4([zJ4Buu^)iQ51a3:Q`_ZWF-{?p<Pe.~asEY' );
define( 'AUTH_SALT',        ',7zWxCi0I]EmvfmsWG6kC/Ry-1[KU ygmV(!twLK}4U%8^L7+j`#q)#:`e*FPd7m' );
define( 'SECURE_AUTH_SALT', '}cs/xcEyjBp$FH=:<GXI| l(Y.EvmUjDY3J*i}e5TRYif)Vn0I$F Ja->$|V|l<|' );
define( 'LOGGED_IN_SALT',   '{Qa$ls<XLt|GHo7$2sj2P8j*cI OLy?p^v;En)E)-,==oGaQ7ioPER<Xfl4}X*=[' );
define( 'NONCE_SALT',       'qp>W7<WsfCIL{2d0;BK9NXF!$VpL[DHD4iUX(l7<Nvv~kkg9N!xiYs/[Y@Hzkj0M' );

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
