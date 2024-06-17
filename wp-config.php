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
define( 'DB_NAME', 'space-english' );

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
define( 'AUTH_KEY',         '(Xcplt`dD.4+}!HmNM-gt!2q)?NQG/!9FzfDt@3FsYg/fL:,:~QBq;=_/5S[,bLG' );
define( 'SECURE_AUTH_KEY',  'o>9$?Y_i_G2*w[TtF76`P>&la4taOm@vjoY,M/wWZ:sVV$`?t-_c1i0w~r%hF}R5' );
define( 'LOGGED_IN_KEY',    'U+NI;<!l+k/y)=cyj=KCb_5efa=I >cbgc_e1p$8G +6CDn28$4yh<EzCi5&%Qt]' );
define( 'NONCE_KEY',        '^Rr!4fAoF|1B#XjD)!X.Q<fdzAlo=P%LLR*69~J&|*Uuze>l20$r01VL37h5yyJz' );
define( 'AUTH_SALT',        '%eFD_~-UQBp7-jHr:uLePfK.`BT:8 dPIykJzF[teGAg9pT6*T|9<9saW}LQs^Fq' );
define( 'SECURE_AUTH_SALT', 'SF_mdh!}*bVl(C} ?-+cA.~|j/S(Q5EPji(iorYn0] #mhI08[4159umlR+ISao:' );
define( 'LOGGED_IN_SALT',   '-YbNTtSTg #FB&Xtw[k=IBxLN(vFbyLzR_*zG#]didI-n{bR ?X>Gb;$G3}4K)`v' );
define( 'NONCE_SALT',       'ROj8s2]svrki&<vKR6f Qppp*.}9}j)^Ya=N Vly<KF7=E%|#=.v;`G>`9R$2Lr_' );

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
