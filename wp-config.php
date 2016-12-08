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
define('DB_NAME', 'wp_ima');

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
define('AUTH_KEY',         'CKpp>(WiQD8#z[^r`5(x71BJlLEr[f8oEi5%-AWDD)]D-j1X#7s5_=SFu%07|gse');
define('SECURE_AUTH_KEY',  '/JJ9_Dy;GuS@)V@4Cq&`o|BV/uNm8l,>IQl^sb<lGw?,iCbqM#$Lmk18F8NNFVOJ');
define('LOGGED_IN_KEY',    ',eF6XW<kMKN_0<E!=,hb9+N>,, Q`MEANntMv[/DG%i~2c&N[}~$*<C1f?w[=[Ca');
define('NONCE_KEY',        'by8UOG`0cV#.F&S4HCnz}1u?|)f`9EkR*,E$|69G{J,0k$y%(jNo}z*M/lj]+ zs');
define('AUTH_SALT',        'H$y]m+a%gH{]sE?I4*|t8R|q,3Z;- fUku[rQ])pA3lu>AJgR:*) Q}6/np[2Nm,');
define('SECURE_AUTH_SALT', 'fZaZFOCWt9B:HkU7xaMH]ik4&.RZR.#1xL2rZM4=6:>]%8sYG[0L]t7WFg`pGwuR');
define('LOGGED_IN_SALT',   ';b!Ap)R{Zt(V9n}AJ(ZqsC4Z3UB~a@yV_l-=I@>N[-6l6*ftz-,=QMTg={(H#|+e');
define('NONCE_SALT',       '*aKISEI-:{U?nOOql9,O`:Hj+e`UL0++cF e)V{T %kN{$EPZ+% ry,DAS&V*T*K');

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
