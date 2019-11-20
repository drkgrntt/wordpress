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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'poopface1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '*Wg5DH=ABh4Ipk9$KfDxQ`Yw0f)S4[o[E+EsiLy*sdmvaN:7=q4@_/ap9fu}lzXG' );
define( 'SECURE_AUTH_KEY',  'BqaIz<)&Q~b;rTb0]Ef!2@aSQNC)z$|>N[Iu?2[v}RH]t>BO3 k=8?lVk0A^rr&N' );
define( 'LOGGED_IN_KEY',    'uyPI3a?szDR:YmUB0vrG@C>DRfO}&JO2B](E0fG4JC{v?xaV|?5rxc500{B{0lZw' );
define( 'NONCE_KEY',        '^*,[hfvx]}Q.GCVTRX uI/{@otBKE$TwU$];b-]/#?@)Y(oq7iTBim|!(M(Cdz%$' );
define( 'AUTH_SALT',        'hPQgg<3cF}9P@[i+Bwt7(;`&J:lU(y7|]L1~T#>Xm J<X!/WrNkqT]8AO~LEkR9H' );
define( 'SECURE_AUTH_SALT', '0PBl&8OVcnfOKB%y5z6aiftq`39D_E! DDC>/]pIq[jK&+UJdnV@rJHvH@f72pc&' );
define( 'LOGGED_IN_SALT',   '36v6gs-F@A1^|pX9kPzQ|?*D&pyCVdn-gT1w+NiW!_}R_}vK)&H]=v6[fE+=Px|z' );
define( 'NONCE_SALT',       '3[ejq|=s?/9dZ{+zzHssT1*8)U,~<Bz;O[nEmoOTDaxE!|kM9/1;FyCW##)WnDZ.' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
