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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'snishant');

/** MySQL database password */
define('DB_PASSWORD', 'snishant123');

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
define('AUTH_KEY',         'A*?+%zguy+#6ea!&y}J$=-(v91Uu6+lla>|icHmmujDU~yc[!K*xI-V~f#7 7TGc');
define('SECURE_AUTH_KEY',  '`1{z/`HYXj,B(*neEKlm{[ ,k-#N]+gvbsBBhuN~d B8nh<g#Q+#]%r+477`n}K,');
define('LOGGED_IN_KEY',    'mD?vV73BXOsD1Sz.#Fp/XIRaBX1l.2TiQY}SOqw/m s8300Y,u419]dIi S@Hw@f');
define('NONCE_KEY',        'zE38_*Z1QJdH~{h+Unm?e475PIrbvqvkwQFxR0|+0$WOL*7$NgIxu5%~9 cnv$^K');
define('AUTH_SALT',        'Nx7D5]hL5_Vhb;&=Q].; HN&X_UBmM*+P[`[3tF*(&oc4g-bSU&2v:+=3lwK~MP<');
define('SECURE_AUTH_SALT', '[SOOC$U,9`5 q0T@n}m^mQ[D^3a.I[!j{-cly~0cIn*/OQ%;gvWFK.}8Rw@ugZr#');
define('LOGGED_IN_SALT',   'BO1yX^/C$8]V-$E7>H:3.KWzN&)XL8tOxw#nS458~p;+h KO&?k{+n/|[p[i}d]o');
define('NONCE_SALT',       '8gm%p`kGqfE?fx(.-i*Y;ey|8(?-H46bmn7soO?Ye6s98+Uei+MQ{I[H!_h=qd7@');

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
