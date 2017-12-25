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

// ** Increasing the size of the ram memory for wordpress ** //
define( 'WP_MEMORY_LIMIT', '256M' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'ephorblog');

/** MySQL database password */
define('DB_PASSWORD', '!Bl0g3ph0r53c*!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '64M');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(ly@K5,kT{m?ej+k G0@?w|>P7A&qMv%b3.PRg1jII&+69LiAm[q|67tdjoYA.ID');
define('SECURE_AUTH_KEY',  '+L,tc,ln[RPl#eatji)|-mbC;|b[rlx{>(#9g!SjG-s<uGG gWk(3t9J8ZXx1+RC');
define('LOGGED_IN_KEY',    '#NipRDHIL9B2:H={iD2MV2A[8|@>k HgO>1YUV|A^KI+j|l7H{``WRy>t i;a5-j');
define('NONCE_KEY',        'YL[rqFf{KKT,1e:z ly?O`o2CfwDmMxn1KXQ<iSesF/@(-}YoM_+/NU6{V.pb]-W');
define('AUTH_SALT',        '1z341vO#+Ll<|E4?`]RP>,?*WRiWm?N#+Vh<S~#lqUbsunk0[ mu.V9^|UoDdnP$');
define('SECURE_AUTH_SALT', ',_tB8O(Z~zea+,G}Z7ygKlT3aj0adz$arnX!|Mtf{|x:<%3Exu?AvK%l.5nP-!oi');
define('LOGGED_IN_SALT',   '`s6I%919lVFi(9mw8-?TTZ,7co!NK(>Fqt{}x%/hR(+>--C;##OL.c-GJ+%Me_Di');
define('NONCE_SALT',       '_y|u&93s6qg|j>&O#X4BwcHP*zApASt$zS$g)T%-&=]Q0YY 7+s 3)nkIu0LVSc.');

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
define('FS_METHOD','direct');
