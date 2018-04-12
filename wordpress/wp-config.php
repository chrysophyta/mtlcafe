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
define('DB_NAME', 'wp_mtlcafe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v5hcG7pkUTO_1N37*o^e0pm{.9dQNM[6Yf=$P3hS^;>S;+T[FYsEvWv+<{K[ia:z');
define('SECURE_AUTH_KEY',  '{JpJ_FeuWK}|iKU?IAafPxce(Yc{.$CVACnjP*ZU.PBWSZRwt`D6jabWmrn!>LVi');
define('LOGGED_IN_KEY',    'eIk|Q$qo:>#$ Kzj(Mk|o:~;4)0jO!P~YmpZ4FCRu1P&m2$(#/*b =CW$:#Zx2[l');
define('NONCE_KEY',        'cLf45_x;ayf*W50 +W|J.V,<Q{%xRbe$~liq`?:p=x5&wCV$BZX3swFrmwm[QUHu');
define('AUTH_SALT',        'BLG5}I> VHR4:Jc;us}?#bK}l1F?+{$@gZ#fOJ&+;#]yIkvU]G-`(A.s6UN1bR^h');
define('SECURE_AUTH_SALT', 'bAS+~xz`%<PnOnM93&jz*XyB,Tu3EC(lYo-8/muMro9SrK)I2h|o1642uZH1!&~U');
define('LOGGED_IN_SALT',   ']2:5&%H>0|h8osX.qcEW&YBE.c?({HVSc3^#Ja!o@j]hy12+5p]tx@58H<>P0y8f');
define('NONCE_SALT',       'DHR`|Fr,2f(Jzw)i#BNRR/3OE,0*)Vp8TE2D{9R&)bmIh}oaylmin@jHxMT<Zjl#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
