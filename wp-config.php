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
define('WP_HOME','http://192.168.99.100:8000');
define('WP_SITEURL','http://192.168.99.100:8000');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', dirname(__FILE__).'\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         'HBU!:<rj,{$WmrI!Mv4 4i6)!1,Ut?f/vvAA?:z__^`N$mP59,am?sL!@< u&..d');
define('SECURE_AUTH_KEY',  '+]0/9GPZ.k_t0^A0D6zeO8atY|K!-_ =iGe7Y?}%LT6SEv{U?#O)asREI=u)VITF');
define('LOGGED_IN_KEY',    'j]0I1Gd!5-w+o#o2ni}WE&TLQ#LZjuM.T yvvu=Zq|=:vuKXragZZO.A0rXuKMx^');
define('NONCE_KEY',        '1pjWiXo-LTlp-T9IV-B~u[,}Hytbv/E6hKdg[!2:a-Wgic@wy6o.d^ 1nhe?fFM8');
define('AUTH_SALT',        '4;Z_(4E>Wu$WdzD|~vVl;{i`e}6E{7W s*^2)N/ *>F4TS/|Ow(n0axCI%Yh {Fv');
define('SECURE_AUTH_SALT', '^>s:/4n.W:P[:C5B$#in:Qg=>&4=lk1g>*@3&3c+!Q3F7b6Q5H 79~)vN`u3ySbu');
define('LOGGED_IN_SALT',   'Jr[jY:_Op~l!EF!=KQEhAvXZP1m6l;S^V -p<.PWjq}f<@v/wpHy8{)tA)O<>>?0');
define('NONCE_SALT',       'Zf}h%&[OzAC1{j/.FHY&T<fb&qzue &;9/| 9SRQ: _6rL29?x7j-u8P<P(<]<:F');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
