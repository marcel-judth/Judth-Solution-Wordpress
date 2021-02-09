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
define( 'DB_NAME', 'db5r8e39s3phg3' );

/** MySQL database username */
define( 'DB_USER', 'u6bjzk9bd9hnb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'n+{1)71)1Gx4' );

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
define( 'AUTH_KEY',         'z}ec~a[~BK.Ffv7F6}xbLj4>p~~K>;g$b-_S%,&~hV_[Mm=3b WZ4`.K|>$Y*Ya]' );
define( 'SECURE_AUTH_KEY',  '?~3qj<wR`6#iVH2@fryyX&EiK$AL0M7;g^pMS/eE|,-IHJV3)Gg`#}AI&88prrD0' );
define( 'LOGGED_IN_KEY',    '=|NDK.7HShA*.~;sSHXQDGH3^O[jz$.wf TPD[/JX!in:dzQi5l!*x>Ze>S9}LK+' );
define( 'NONCE_KEY',        ' >P?%:EI50Zbee>kL*)1[wwr!c.D?6]yikOf$W?9K]O##ToVX!)>9LIwA~PP$i^{' );
define( 'AUTH_SALT',        'Sk+5?415iu&^^o%x.R6C6Rc!T5;@1E2a-GDC|wPL=c[| wnma%~VYG-Q)}~U5!9V' );
define( 'SECURE_AUTH_SALT', 'jDASpN29y(h Yy;}F2oYs_np~QZs~n2gO|v7tK2)akDo-j)`ZOtOy`Y>&~q{*5c%' );
define( 'LOGGED_IN_SALT',   'B*nvDC?VH4-V-%_W95rbk99g{ANk`:rPYD@X-PUS?6%4Pl`|75Z_$Wk~&rELHC*u' );
define( 'NONCE_SALT',       '0 qF,Mi!|.ZWgVm`iNDF;0WS/SdkC*54I0r6/`;]Z9`ZZ5`H+yQ#iA]AFLV&-(mE' );
define( 'WP_HOME', 'https://judthsolutions.com' );
define( 'WP_SITEURL', 'https://judthsolutions.com' );
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
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
