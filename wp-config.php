<?php
define( 'WP_CACHE', true );

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "taxisanbayphucat_txwp" );


/** MySQL database username */

define( 'DB_USER', "taxisanbayphucat_txwp" );


/** MySQL database password */

define( 'DB_PASSWORD', "9@Jngo07" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'qtL=e/HrK$*Mkq2Ey1gkm#h3~qZb3N<;!X[+`.aPZGXp;gI&wKHB_H0D`WSgGx.G' );

define( 'SECURE_AUTH_KEY',  'd7:8~W6dh|%eR-~$* t|:|e?he{CAD[nt#hsWs#`F[Pr8vU+,XntjR39Cv-7@BZ=' );

define( 'LOGGED_IN_KEY',    'wxmKTfp,C,W:/GYWFz8sIf{/#+_9>N9uV0[6pEaR1^HcRV9A5N_x&@;S`EjmdkpG' );

define( 'NONCE_KEY',        'x5bPx4hVawXg#XUm?>ck{JnvsKjK,TKF Tzn$%zag6c}<XD<v5lh5UQ<=hbC %F>' );

define( 'AUTH_SALT',        '`=]zW%6a? zso[[.MO]5|gayU4Rx2F7B;fKD(wAFB2>vzS^Ysb[ xjd^I~,z(^L(' );

define( 'SECURE_AUTH_SALT', '0rlK-@NAJ|jdug~LIn|_k.Rn!D0Icia$3`?y$4nCeFOd5i,g|#.{>aN2x}P8l>s<' );

define( 'LOGGED_IN_SALT',   'fkX@$mb`#)728/Jj.,$h7mE!uWn<+ }ear1O_4=r|a9b~qumPJ/b|GIq6_i`~VRJ' );

define( 'NONCE_SALT',       'l7:y/U9jqWF9Wmpga,p|rE07?ije7Uw[$VE&t~Q>rp3lN#^(Bw?tSUgcgO0ti c]' );


/**#@-*/


/**

 * WordPress Database Table prefix.

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


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

