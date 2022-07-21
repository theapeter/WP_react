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
define( 'DB_NAME', 'react' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R}@.rG[biu^-P>!Pp}-|<_h-g;J&#AKKQ#[B<oMy!8$Hj=>hfOTQ?*PU]qBRwKuU' );
define( 'SECURE_AUTH_KEY',  'T}{X=:A0F@)#}*DD[,=x8~z1|5nwsgZa:?U#lWxnD*Ay^|HNsW+oTQ1UEI{:G(n1' );
define( 'LOGGED_IN_KEY',    '+yUipx)/tE]mE.03&G^9X0 )?#hYp1b{%30+dZyuHbz)-QOr#,co6# PY v/FR}/' );
define( 'NONCE_KEY',        '<y<%8-y.ba9(slu6<Z~IQ;#l,qrB}x45^cHQ)M(g}58*1Ym%D/=^n3CIJi}S*-1&' );
define( 'AUTH_SALT',        'l`]j?^^Gi,qVE9yI}:#.^ X:z$0y(9N [K1.XDH3[]>Swo}0RTGwGh?95[LYmk1s' );
define( 'SECURE_AUTH_SALT', '}#,:9f,;i4ono&Nr!WLXBAZHW5)xPN!Sa%7_dWMA89cB2ou#6Y_ fJyCi7O/x!sB' );
define( 'LOGGED_IN_SALT',   '5wulnlk|z;RGYPFbyMYbLTG/?0cW/6)RqpjwbvGv:3e.guvHl4P! Pz(h$jY3-O_' );
define( 'NONCE_SALT',       'zx J[WwpgNhS)Vs=V-|+$7TXbPH8QMnRL}Xu[ZC2/xV`H%d(NYMV@AyoJvDbFaHg' );

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
