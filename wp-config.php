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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'globals1_green_magic_land' );

/** MySQL database username */
define( 'DB_USER', 'globals1_GreenMa' );

/** MySQL database password */
define( 'DB_PASSWORD', '00G2AG32.+' );

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
define( 'AUTH_KEY',         'M/I*uU[G@K<HVT`7{DKl }iEqQ?|np7}-5a][<DW`fJgzkL,xlz}qH#uP8;V!kQf' );
define( 'SECURE_AUTH_KEY',  'yflg},LM@2H2!,nmx0+lk Yukb,`/9QaFlj*^rTnsdR4XJRoP Q?M{]CbnH#aW4j' );
define( 'LOGGED_IN_KEY',    '{j6}G3u>(S[LV41$.@m`I58CUB]h$sOWh1lgccTDHu.slq }_byiAaDd+ZACp(Kk' );
define( 'NONCE_KEY',        'p?Kq[/SQ /.`US9Wfo;sHJF_:&PU#Qrg(RNYLOoepaa}Q8POTWn@XI|.j Z+Z99S' );
define( 'AUTH_SALT',        '}QS=]C6n/hWqGvA_Yj^MEyL}GPGmmI|yYvk4/vc7^xyy+5~+USUc!Ru9GQh4B+<G' );
define( 'SECURE_AUTH_SALT', '{FT7e83u$>PD NJVz3cpq`d2W?O.&tl.SW>0g%Zzo+uxx!S_<a?ua3S):?>&Z=~=' );
define( 'LOGGED_IN_SALT',   'HCTVewObJHRc1TEX#3Jw>CXiVlVclQ[1ql]$*zU^PG_WL{ @*m%nnWu$; g}X#jp' );
define( 'NONCE_SALT',       'Ld<ZUa$64) C*FqM<Ot=/pUJ)E:q? P@4e:MG*=&Af!MOpDD?7CMxf<kaX8?!0Wx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gm_';

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
