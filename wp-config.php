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
define( 'DB_NAME', 'stvartans_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
 define('AUTH_KEY',         'GjP0daBeJifptL;|EjX53qQ]Mmt)JU#F*njs9<3+4Q^N 8~J-7l6+!?1E;Q~BF:V');
 define('SECURE_AUTH_KEY',  'axxP5[`:.-ZXER{GB{6+q-l1:!H&-9ib3 Hh&[E#m)|6F&1n2jA!CV5Zugp(xQc/');
 define('LOGGED_IN_KEY',    'O5I] nJ/W.:fq$O{mGT(EQ]E2KBJIF+MZq<Z-pE$Iq9oWDGy17 v~*sftq<)aGtW');
 define('NONCE_KEY',        'U27Et2FTu6=X+RtM7lO5 &T0QBj|xF~j<R84,|`qE,t+|987:!7pM |va6!9zKZ7');
 define('AUTH_SALT',        'em5#7aa,>A*B&&/+<?|3Gr-_IIvf5^4xKyf1]cLfqM#dF-B3Cuw%-P}1oTkCl1hr');
 define('SECURE_AUTH_SALT', 'yS4/0+A8%9WvNW0S.f!&5 ee [6j`!B2tljMJFoRP*O-EC|+]OIWv`)i{]nX~VD;');
 define('LOGGED_IN_SALT',   '@(xw(+MG&pRd~@[J%C1_p6M!&l-1AE/u,o9!Ttuks=Y9VueFV?R;S33CqLazfE<J');
 define('NONCE_SALT',       'RNRpRn+HI_n]7F|bjO2y61-F)[IVDN2s`R&P8I>b^Y2X*-uH2KEnE^X^w%e yqm~');
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
