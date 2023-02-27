<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'khalid' );

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
define( 'AUTH_KEY',         'K*Ha]pE^D+.sar2TUSx0J/bIo3 E{$iL;WPyyR!kKL<r0JY@ UfI@vwR:RZQ81/A' );
define( 'SECURE_AUTH_KEY',  'PeOa$^!j|0 $XdO$wEIc{iLB_y R3#Xg%cHUjtTy2A +3T#}lxR]=ezg3-;$vu-a' );
define( 'LOGGED_IN_KEY',    'qMaA?;EpF5oBlAR8E3kopJP7v.~NChLHF|Y|t4[)8q$9_*+.Yx$,a5m7N2&WkZRS' );
define( 'NONCE_KEY',        'm%E~_EP~Ct;zxP^WcNk?!UBz _iIRN36|`C:/t[vxqdnw*sJBmf-<zwh26)mG|>[' );
define( 'AUTH_SALT',        '9@KNdQO>($TTTMH^nG^RAYh#}4g R8{3>QHh1,mhS+s@n|8^)*hG(($da,7[ufv4' );
define( 'SECURE_AUTH_SALT', '|(I.SCP~NwYyUdj.Gj1D~^`c7JK~GqZ@Sqg/tbx *9>Gl^ Uq3Nh]94`|BglcTe3' );
define( 'LOGGED_IN_SALT',   '9wv(-8*.%AyK>BS*~}PYYQ2-]S=JOO]?Wh78]Bs!Vo)xD%RS4rnd:{>m;9dc)<o$' );
define( 'NONCE_SALT',       'pmw[((7!lIPqL^;$?6O2@L031&@9j[$jQQaE4eY;3Dg{wyZPw kw,og2W;p^w/KM' );

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
