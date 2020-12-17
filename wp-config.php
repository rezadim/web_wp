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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'YR2 ?2x*kMQ_&[o>9uWb_Q)mh(z1]5g?iDOha?*$Tn#|[FrF7#b[vnfVu;kWTE97' );
define( 'SECURE_AUTH_KEY',  '1@Eb{c(jQ!}dpxi#jgLhmwd#0]VtH4#0,<w7){RO/u]0Yzm){`?IH90z._=!N}7m' );
define( 'LOGGED_IN_KEY',    ' >7*PC32[)aKAZff8/e^`Ltglhl?Tv_L}kH2{z<6D{667<.loU b-8%O]Y0,hXWR' );
define( 'NONCE_KEY',        'hH%@wI($*ih)y&0jq!g]>GaMwi!^mClCLm;aM!GL:8o&MU]G$$*GZ*ul>K*UI53g' );
define( 'AUTH_SALT',        '^IZpwP%!;kKzBbX$?jQu?XJRPPZEA,]z7rbouG-aQ7xSb/ygIJKECm?0]pPBVS#(' );
define( 'SECURE_AUTH_SALT', 'fr<)Fo{5P|:rqVN5@`x7ZeAr_2-K&R?^ehP00IN)Z.>.vofJ@I;iB@o<T<BWu(ub' );
define( 'LOGGED_IN_SALT',   'HLyOt`89oJP[R>-G_{|k]9xo9<(mWd`2J?zi/1.(t4JXEc#4aE3nMT~w@mt 3B`r' );
define( 'NONCE_SALT',       'M^2qCGvNno7`[nU:y_IDtY5fM@ADw@di&d{`%:+*u?*h;]hn~}<TGB6sM%|EP&XK' );

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
