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
define( 'DB_NAME', 'sm_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '&O7x]Qc`m>k`iz%.)I7Sa;>j+sdfle|f?Sb/aCo8om9ws$_2qP)vNFX-)yHpC-]|');
define('SECURE_AUTH_KEY',  'KH9oa)[rb9,7Zp#PW;D_PlM/|.+Fucm!s]:~]U~O9f}.4cIs}(Tz ;aM`B:f.uTI');
define('LOGGED_IN_KEY',    'uGH`G)gGGxEPf,V)J6.ilK..Gz6-#}v-ZOD$p.^oj#Il[Q74Na,+=Gmd,r4KV3RY');
define('NONCE_KEY',        'n1O;?g>-%K:G:F*_H>T1#l2JD*m8lbF+4r#gI,ee`J*9c*;~<|b2ZEQLQD8Ln-6P');
define('AUTH_SALT',        'V8AoQBxbF-hBMjJC-ViOv87!B|)5#cOP20o3c~06z3n)379=Ryr{-A7So/f=Sm8v');
define('SECURE_AUTH_SALT', 'dnn|_I]Ke[sXu]sW^63Yz5m&@&lH$mL5/9dcpW-dSgE(W12m*:swufljAS0|K4os');
define('LOGGED_IN_SALT',   '{qJX{e6[qmr9.^,TmBbc1oScy:w-44o6,mv(W7>7%n]PKV[h&+ 8_$5m;jM-5oZ1');
define('NONCE_SALT',       '.wKNYK%K /`x#*Y.9)Q}^`3=`-zYtmb>A+i!ay|sl`,O^-q_OX#<L(kcF;4oQ!:d');

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
define( 'FORCE_SSL_ADMIN' , true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
