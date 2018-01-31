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
define('DB_NAME', 'nawaal_db');

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
define('AUTH_KEY',         '5j;?t@$;Ag/-Ly}3Y.nNlNs=_NC6>(_EJ Q)f@Nt|.#v+}v3#ez4x)!F)}/84IM/');
define('SECURE_AUTH_KEY',  'H)g__jrMp6n%H[;Uhi IM<Jo a[E$kinM2;ssDx~Jz]c8zZUz(-JQ;[cppvSk~0B');
define('LOGGED_IN_KEY',    'b9s>(aKmY^,XtvjmtB/+PW``7qi{gs9WJN&($CrEKjj!5^jOmjzFbIZ|5`gZ< WH');
define('NONCE_KEY',        'PEv1T@Nhu$MNM%{-nVfY2,p]LCmb*]j`#w7wB-[UW){>]#)P)x$w~ya08KT{7S^0');
define('AUTH_SALT',        'o(;ns9}`fi=;j%`h2%Q+B~%tVK7vt;083h^~&!pCYq&>*9fXl}#Cnj+kXj1hS1=l');
define('SECURE_AUTH_SALT', '08GCX6_~Ms~Q;sz`C_o%uRl:S!:F8;n<o[fgTQ-Q1kTr]e.wsN?uvv2Ell2e?}qc');
define('LOGGED_IN_SALT',   'FE@~9RrbY)OItydO2c7cWaq-|^@#^5YOq#7dSaaT.u~^FIFk)J9B;2;K!D4>=u3M');
define('NONCE_SALT',       'r(S7]#CPTi~2)-}n Nfuo<c?Aev[L2yXgja2NhrU!(A-RTWg,=i`l_g2h;cj1-Ds');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'nawaal_';

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
