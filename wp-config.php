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
define( 'DB_NAME', 'wp_exam' );

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
define( 'AUTH_KEY',         '=v,X>T^?:!nr8eKw)3 /?tMv$$I/m<)J*f!miz<G85ZgtjpdW_u|{O1z:;`id*lO' );
define( 'SECURE_AUTH_KEY',  'LuYb*G<cbFXuMA;ZB9T_z{<is!Q.cGT~ C&lK>6&3Q5m1BcV[.$+ TF)g-#w+hgo' );
define( 'LOGGED_IN_KEY',    'ee-6G=u+DZTtL9tKOH<ER4h+xrhO)gT]!u@o]8$[/t=8a`Z-S[>Z_`D57Q@=Ujze' );
define( 'NONCE_KEY',        'z,jH}8!+8k{IPW3{k46m8~ vV*v6d<yGQ:zqLe^KupleM>.&]*[u:<[U6AbM.RJO' );
define( 'AUTH_SALT',        ';`cQ1U5*DqqN]xS~KYw[X2//<,,<u6!/74O~b01IJAdg(/fzol~m7B!H4JbS#R1T' );
define( 'SECURE_AUTH_SALT', '}&#YWHx{waLRyZ&X+@R#]D%BzUEpk#T}qtJRnn) sw|C_K`mxRX$Zkc} >KRcu:(' );
define( 'LOGGED_IN_SALT',   'qZ]tcdd/3JLE$9a,J3|IYF+F#;z:+-4%jS {Evf/{^^/**E$K]JZ/fAq`,&c<R*]' );
define( 'NONCE_SALT',       'ccff(X^V,ToG%3Yk~2~^Kqz./)R-oUEw&)Bj)_R/uBm/%8$K?V=dfJrqw($7<.op' );

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
