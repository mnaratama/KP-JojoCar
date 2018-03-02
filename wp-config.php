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
define('DB_NAME', 'WP');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Telkom2017');

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
define('AUTH_KEY',         'qIU$v`o&;+1Y~&0o=^0O,CUurwcWgXY?Xm@{fpu rCecK&_>&*6O^V_9m63Iqz^o');
define('SECURE_AUTH_KEY',  'jj+}M-I>UZyCI^K!ShEQ}eS9i9!.alF]5-boS%jg!!z^B$w*h`;-z7K[JLE<}%Vy');
define('LOGGED_IN_KEY',    '~+q=C,.Pq+Z$.2)t:sCW_T96s*r!ZJ?Iwq:I|o1(GEE27_Q#W18L&a(VR[6*_PfD');
define('NONCE_KEY',        'AuSC{Z1&lGjKFMOcTZikH%K8X.@`xSnDP[ctb vdb69@L}S{T5nVC:j*^X&3h~,$');
define('AUTH_SALT',        'JPNAxrhjm.I;KAT.dpQW:V,1<,ft.%)%oOQGwY[p3LKT;X<NWLBu|.-*(7IV`p_*');
define('SECURE_AUTH_SALT', ':oJ*)L]x{|djAWMlPhSL!B*kP~I&Vqm6*, =#lSBN![tB&!uL<o;v3**:O,gO3A+');
define('LOGGED_IN_SALT',   'LlY25?vOJaUKAg~V^1H4= }`z#{lW n}6Up^UUUeSGV&se}$]&.u::dqua?wCjy0');
define('NONCE_SALT',       '&A:%MUr SnkWV<72[*cW%{8*U%X/,+uN9kTBzvJBj>t=]$zwnPT3qO[#2rrZG8Kh');

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
