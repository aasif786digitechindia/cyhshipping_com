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
define( 'DB_NAME', 'cyhshipping' );

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
define( 'AUTH_KEY',         '<!q2hf`(%z`>=`AvI44^}[/e4jkuVGul>!w7: zF/Y,6i;m@nT4}lE%/RwkgSZ|w' );
define( 'SECURE_AUTH_KEY',  '0MNN!}Ll7;mM_gmUeS;l|9wS 12VkWx@U`bD/fEC{=X83^_*#qsRy*emLt>CSUem' );
define( 'LOGGED_IN_KEY',    'MI!Vgc9F8cd8MO/J/IPmFt$@.{,+gv=;e5I_8`>oVLR_Rpf<=AYESr*>uf)}12a~' );
define( 'NONCE_KEY',        '^o!vfm_cHH:,Vuf$BrW-sVEB%v.%P[v47d%]=E8?*l111 W{cv.1c$uMH9bf*_D_' );
define( 'AUTH_SALT',        'hfF(;a5>&5J{e`m`,5AnLV}}[k>OE:8;r(o/rTat4rcyXSu?$ci3aS01>CNw2i4H' );
define( 'SECURE_AUTH_SALT', 'v[E{`7?1)LXyqqm4~6b5O;p(.zg*nm$[PBsdO9y1=]?jOX;b&MY+02&>jLG&Q1EZ' );
define( 'LOGGED_IN_SALT',   'bVv)Dmz9jz4&rmNUFk(~|Ed]dBDUy{P)<Ns2T4=,rOp81+v^`EM]?~bt;?x.,QEF' );
define( 'NONCE_SALT',       'v`asUMFkip-eX}Yu!j68&M]MIZ#; Px!TDHN+*e|nDesdd$F4,a K<Qo~t0GBsK,' );

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
