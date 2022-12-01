<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lawyersnote_tailwind' );

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
define( 'AUTH_KEY',         'O}0RKmGu:fg35Q>pmZjnR>G(%I(0@[,RO/%nHR2[n};^AsofhiGkEtV<X>L/m_%l' );
define( 'SECURE_AUTH_KEY',  'pHjgN[rEOvQB yeuPjs;MJXk.TQr,53%1%`0-gnv-I,O)k8X,+U@WcNlj;y?e?|m' );
define( 'LOGGED_IN_KEY',    '#r:@jlQb2g2viyTo~^0~V5d-dGx%jlrLHu>$7MhQ;[%1n{A4uDc::~~wU@TP5xM-' );
define( 'NONCE_KEY',        '{iM<!9sCCWB_7k?YdZ&R`Y?-HmO2$qywPk#?-P>Zj1fzfK08S!0!Eaug4sV(8IVC' );
define( 'AUTH_SALT',        'C^?c`x^V9h8ORFw [uDBtSmwM*KpA3DsB3*UCbUfEq1VFwRm^i^ic.,`#J{l8*C^' );
define( 'SECURE_AUTH_SALT', '|=wS=jfXSMfJxTV7p?$(|nmHEWu(sKj|flwi2t{7*4:vK?3U~[cb<c]@H$EBc@0T' );
define( 'LOGGED_IN_SALT',   'I$A~9k!jCjE9 hGi$7Q=^v)ZYD{VcWGt(Ly5Kwrw?ZA$@xz5T-sdF~uboWXeX`;j' );
define( 'NONCE_SALT',       '+7pGCfN;i91>d7.wa/8zXM(h9q>[q+PAELS-M,X?T$E&^KZVK*x!D~!D$~m-]ZUg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
