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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'GEmA}qS5p9`/?ulG/``@J$b7Y_~>Bem1U?f5;,lVOx1yU@N2dLf~qbkVG%4t2zCM');
define('SECURE_AUTH_KEY',  '7(}@%A@we}TNN9]8tdcYsGRG!|L9q4Op^##qqfIEi=euJ7NlX8bsPOynHowDTU[6');
define('LOGGED_IN_KEY',    '1s?H$mmmn4)<7%]p-;3 x@wq<]r2=Y5TmbJ0_Z0iVHfgpw{(fOVqKr,mB{>)OJRi');
define('NONCE_KEY',        'T!,&Hx$We&hm$>iJiit>M=Si,JRmR+;|jZ^-ZjQiVZK@9&^E7z7Mi?>]`F26GKCH');
define('AUTH_SALT',        'Tn5yo!+)?0TekPb1T2@Q3q&B_w$MN.CKk(6ReamF5I0Y3u.Q,S9Cs6Ykn_47?FU%');
define('SECURE_AUTH_SALT', '7g*?,?W+5l-ls}o#zGx?jBHr@OVrz&iPI3YHH:43iD_[4xZ)2CJzHd=|_S}1<RQk');
define('LOGGED_IN_SALT',   '=Fi7zDB!,v8U;OT~;N7_AH(GYU*{IpZi~ca^{|$o,u>a{RZQ3BuivXk|/YW)PR=h');
define('NONCE_SALT',       'z%dgS?tfgmiXJ7d=@LAA:RfOjfo|TG_PiV;x#.Z<r+y;oCJx]umeu`p!s~Dij?s=');

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
define('WP_MEMORY_LIMIT', '256M');
require_once(ABSPATH . 'wp-settings.php');
