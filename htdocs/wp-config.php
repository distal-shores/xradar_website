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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xradar' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fjg(}JuzGVu|:*<H7{k(VsE|0M0?3>Yc-4sWyh-[LlgY/Ji4QE_z6~1U1<O|QIF|');
define('SECURE_AUTH_KEY',  '-?^me3?3PE5QRM#1R`FA}I:(h)L+hn(Bz3<fSqqAXHYq[>iM[x(-$SoqZz[)feC;');
define('LOGGED_IN_KEY',    '0dq5+*0%+x@t#QF:{h8-N4n.$w#?~Apv-5/sr|(?1K$~Ku?)8q|<3e-k}|mba->V');
define('NONCE_KEY',        '+g ~SV}uxhbG<vb7LB~;k?zr-+>||J{zEk ,-q[zZp<8wq$D,)iC|r]a1kEAN{]-');
define('AUTH_SALT',        'B--+)/:zt[3SC._f|NW502uvP3@~;L`[#u|L$@3I$(/F~1l-zG{u#} -WTQ7r1lN');
define('SECURE_AUTH_SALT', '.^t(13h:tle@Xy;N:pTc$`r.Hi0AAALFG9YZyZ%1EQM+jQ7@Qg89>?5,)#!GLD|g');
define('LOGGED_IN_SALT',   '1=i9)3p8bDa`Y{U53f28C]*zu,>NlpX+6IpJlWn^- i bIm-Xdz+#b6Vjx$DqKqo');
define('NONCE_SALT',       'wv>ZM+PU_gPsuf3,my5/(kMK4Jm? el/sGd|*15d59^<wgLU28-!oZI-t5=t-},.');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'JETPACK_DEV_DEBUG', true );
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(xradar.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
