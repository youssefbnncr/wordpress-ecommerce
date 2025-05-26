<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jtv+zRO=Tz-q[ @>|W)(c;8NDVY^o^$H{3n7F~3#uwBm(ZH}%g1dfd^v4)Adi>f(' );
define( 'SECURE_AUTH_KEY',  '7Y6wm$R#%F>yniGJ3D{r>!5>QKieS1fb%eLO_1&PG=*Kb^78l,o.DaL#Y|=`kr9j' );
define( 'LOGGED_IN_KEY',    'dZoH|QvNJZAIbrvlJ6q|VWCs!mM6Z(tY$  X}VEhO!1qe7^.4F-N0aOG6c^teCC3' );
define( 'NONCE_KEY',        'rsG(#B3-#O]~A5OIbXfZa>{7~ZnQ7~eL1)#kI>a(g^mm2dmjCTReY(X$}5bVI>6:' );
define( 'AUTH_SALT',        'PP0s|@fX?sR[ $-7?g4x]zbwNu[{YcW8Xn7lTAo00PT1l9^pFyXO7H?<eV:bKHB!' );
define( 'SECURE_AUTH_SALT', 'l^{4o {*6V[aUajBfXL0QiR55EG%-24_~:#[o58n5ay)gfSiL=]LJ9KpNeo/&7cT' );
define( 'LOGGED_IN_SALT',   '8b&<jcb(e%aQG#&hMS+J`%Bk@g+p~/c`{Q)%*&ChJd8Vv:iz61 #sx:7<d,*QwsH' );
define( 'NONCE_SALT',       'Y{JtA<eeWjL5Jd;{EY`03U?29+g E3g[_KV?|jj6kS L[=eV0d~^]`(?,vG9&go/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
