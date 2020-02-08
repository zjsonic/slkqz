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
define( 'DB_NAME', 'slkqz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e%oklA259775' );

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
define( 'AUTH_KEY',         'rICwL/$-}W6j5DJJ%P1{~<z!m)_W;5bAO*$}9?8<=r_ao[IN;j=]~cNPnh{V /R.' );
define( 'SECURE_AUTH_KEY',  'qG wEYdQ[-2MG]YrLE*XIjC=$slp`AM7uV%*tBgN0`5.K$V//JbBDx8Du/ts$%-p' );
define( 'LOGGED_IN_KEY',    'Wg,U1 tL%yT^K.?yy%R#n?q@ZA-k%-#V1jSAF[Vq#6K6Lg9/Nvh4A HJn0B[AF7i' );
define( 'NONCE_KEY',        'a${uaL*~L{a?TBmJi]kddh]#kURFHW@Z:G.);W5-#ss[I<#wc7`)U,}7 ZTLi2Id' );
define( 'AUTH_SALT',        'U;t-P^`4%bxVAz/uWTut,s@G`vQuJ[k-I1qSUf?7Gw.qxA(LB)!ZHv6jQxk.AGKK' );
define( 'SECURE_AUTH_SALT', '`t-]M`r7!B5`3M:zMsJ2T1/] +8/[<c+4mAu8_]A|bnG:XOVUc94^zd9(w+Tf7Fn' );
define( 'LOGGED_IN_SALT',   '3=(yw->=y1 F?),dx6lEeE] $OS>1#yE[VeJ)w?{^WAZGiyib;l<ls$9%FIo uwI' );
define( 'NONCE_SALT',       'QMQy~xg?C:+VV9Li^F c7Js5kmPt{=&9y[lG%Bs|y[Kcuxq!Gvmdq.+R_b>MWkAk' );

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

