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
define('DB_NAME', 'wordpress-local1');

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
define('AUTH_KEY',         '?TC9`yQ43^s/,TEA/C@__B8E$XTC&,3_kA= .W%?{=8?[Ku<-(bj3dxarXcn8`l;');
define('SECURE_AUTH_KEY',  '[mn&@S/oS<(h+j2$8!e +z#B#H2(Bm~] vmk8CxT30XoR]?(3cg7<Vrqdrq@o^4k');
define('LOGGED_IN_KEY',    '`$=+Gr@zq4}qA*][Rd)3HHXdR#(<`*mYtZ+uQKNHz&iuL:t$s(-8dL~{LkX<pVmE');
define('NONCE_KEY',        'P{^}Wkh!q*CtS[5A1eq({U(>@M4{VD$k9U=)>W=_!Mg22=~y,B3zhb!b{X$uWzI/');
define('AUTH_SALT',        'W>2PkpNtJk0P:&UQ[[hr)%:ySGzM83>8lQ|17R.H*Mefl..:5<iSWgWcpGT6J~7t');
define('SECURE_AUTH_SALT', '!LvY!Ls-L)Go`r)o@V97=bH@0cd^I{<QG#Xm ul41(C@J?6f|GqA|k?+:x[u8~0Q');
define('LOGGED_IN_SALT',   '`<;m6[Vk+N|b84G@2[rC[%D{+JvflU([^ps5j=GG%ztV9PdJVrXN6nKZS~`?yx2I');
define('NONCE_SALT',       'Eol#!q_.yj&[Ubmk`{%jP|SU<%AsLq__oEU%FDv]:h!BCwrMb]E4`Nh=&46;/Iv6');

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
