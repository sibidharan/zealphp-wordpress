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
define( 'DB_NAME', 'sibidharan_zeal' );

/** Database username */
define( 'DB_USER', 'sibidharan' );

/** Database password */
define( 'DB_PASSWORD', 'adidas@123' );

/** Database hostname */
define( 'DB_HOST', 'mysql.selfmade.ninja' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '+{ ``MKx/sRc--1`|Y*beD{ZoB[yC?_5I`%odn]@Z#iw!U)N]k&9V&X2g+:64VX?');
define('SECURE_AUTH_KEY',  '%JZb9p<usE?hEf?9ZEQj-IXCMd<EJY,mbFDR@:YeE`C~j5yKYHB$H/.wL)NJ5_ZK');
define('LOGGED_IN_KEY',    'sGSmmq--)rec.&^yNogm5+6caO3nvmhUF-n7}ubND^QNRPmdnv(H[tq>I*`jv@B/');
define('NONCE_KEY',        'QK{zUY#w8}=D8,8F5Yr3d+3KE7g|?`|TMu+y)u/KNGCxQ[}eDNo{|-SeWK$~,o}S');
define('AUTH_SALT',        '+UVO1~rWoBi[Sr-T;!;w>=|OuESK<ElD^%5I|()Z{>E3NlsN WyB-z?3sefW0rss');
define('SECURE_AUTH_SALT', 'kAS)--8YL!3ZdGfz!Z`+i]=stL@WQ*Y-$H@&y$eb)w66,{+k=0)-fzb{2wbJwr8l');
define('LOGGED_IN_SALT',   '2emx`!p BJ33-KNB3_yhi`fD$BL2Zx1;b[}~1c/Lfv(|F96VEbSd3]FTBNrtuBin');
define('NONCE_SALT',       'YjJ?R%?+YmQI[M+|5/&@%y?.+$-Eh[vOn7@/o;y+ ~Z=2Wt~zm5NT 8>M7q:hbOj');

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
