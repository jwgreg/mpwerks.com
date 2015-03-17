<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mpwerks');

/** MySQL database username */
define('DB_USER', 'mpwuser');

/** MySQL database password */
define('DB_PASSWORD', 'waahoo22');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~,*k2Uw~AIgGE(R>M6Z)@h$:Q^+I$QcDt:kk<h!|TO3]OiScf>NT^hPs-hx>,R0E');
define('SECURE_AUTH_KEY',  'syn&qz9mc>|O+XXcnFtRyc7;`%!:j[!O*$}=Tn{ckJ,ZZ~ez #R/Ea=.v=&Fyx`=');
define('LOGGED_IN_KEY',    'C.(.SKd>mjEvAjvR+.(P({*w`Q)I.p___N^|$UA)`9c5:2r&,3<K($+e7#P`)yhv');
define('NONCE_KEY',        'Q%7?xLAPZn#9Pl2jW<f}G1!#p*`;o[<,jm+uCLMIlWI3U4L?)fGaZ_|3/7iwBLZ1');
define('AUTH_SALT',        'MASfHUo&*it#-yu<|/=n&djP_<-[MkK2Vk[-AJBBUBwUiH=C<3a)hEG,4ZM3j}{L');
define('SECURE_AUTH_SALT', 'H8^yV -5odoN8O_<yWC[,;|C|y wmL4DZtRw]t4r*[2}J^D$(ekU 0GcJcrd0l]y');
define('LOGGED_IN_SALT',   'gVM-wMop)>ifBQjae)FrR+q`Lo{qjs=p+}lx;_Jk30,@Rn70k-4kcJ@p#+,1S55I');
define('NONCE_SALT',       '[-=h^MjZ>@Mfl-x[!U1b.<*T`}=.Pu -HAPsDkC{)) Ok&ST |jb 0_{N7PJ(>ZD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
