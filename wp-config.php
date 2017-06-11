<?php
/*1fa7b*/
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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'volidb');

/** MySQL database username */
define('DB_USER', 'volidb');

/** MySQL database password */
define('DB_PASSWORD', 'volidb1234');

/** MySQL hostname */
define('DB_HOST', 'volidb.ciupho8ltvvi.ap-southeast-2.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '<0)3>4t(:0p+iGM9szzJ_~RsG_+*U*nJ_tdEMf|`T:Ck>bQROF36D$X#5C_Zp:e@');
define('SECURE_AUTH_KEY',  '-}uz;QN$x$N~I]PKm8y^IO;]Hji5H9$KZ4z94;Gl$G%0<`<Z8Jd?x+!O.jnF)/yf');
define('LOGGED_IN_KEY',    '@TV)~r}8w5^+:dH*(8cs<GQpW^<eBh2R9!236-3peuzQ*Yla! e7PLqn,yw (*4n');
define('NONCE_KEY',        'Uy~xg*~QuhkI,+,@];02KDzpDXtc_V~>P?klS-oF+e*$|-0&Llw2*&z3A?!i?),=');
define('AUTH_SALT',        'yhq]rF~B@p$]/e7L5vFssOV6Eiz.Sm0X]PO0_9)bQqb@^YM^-=jCQImqpS*Oq.&?');
define('SECURE_AUTH_SALT', '~fyCsK7@+@~u%W[UuhA)@b:q^Z44U)5h4y{KHoR[QAeOHX[!C$O8Ly9y33Z/p|Qh');
define('LOGGED_IN_SALT',   'QCS TJn.) _7mHsH[1))q VUi_k??kw@MS)4h.phiiBJ?/^yEQu8~q)i>*LQ[E#l');
define('NONCE_SALT',       '%0Z!W2ybN[=HfrtzF,5.^g]e#e&Ei!Tu<0Rh_/zR=ZJ>n|M_@>B,o![:>dutqv^y');

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


