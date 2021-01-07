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
define( 'DB_NAME', 'myself' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'u}5cD1b0fDmP-bHMrBaltLF{Xkd=p#`RkDx=dFe|GTq<*7V7od>-0%=FD{sy.Kz>' );
define( 'SECURE_AUTH_KEY',  'T&EI42F+t|qvltSh&HhY+u|^R>jN!<!P!9_ZiO)RLc@;<j0l(V:.(OX=&T L [fa' );
define( 'LOGGED_IN_KEY',    '_aLb/F-Rm$< ~sM(D23FC`2_mni?y~_J<a2Vz9D5[Hvu_IODPk46/Z?/jEB|FFC:' );
define( 'NONCE_KEY',        'ix&)IxmhgJq2&fCG#DI0h?|W%- eEu=p7#@zXpGv]SWP]?2N0y[q_NxYT.^MtZ*~' );
define( 'AUTH_SALT',        '-~eRJL?W6)HIVEknTx4h{N^N|#{;6wKH{!:5Ldy?{P8rEf7?+t(o<E@}ZxCN}Xz>' );
define( 'SECURE_AUTH_SALT', ')w:5L-{b$z8IxK+)2edHo/jO%.nv8Q[-C,<Z7rRor7`1aT51_,uRG04Ot<>^)5^(' );
define( 'LOGGED_IN_SALT',   'N!3qEM8-=#DCy 6 >xA+)9cy!}}dDikJlm~|?,onfMDE~2Xm/3YnKPpj mXgbXW^' );
define( 'NONCE_SALT',       '#yZdIuA53R-P%G|BQ<$8Jk6-Vh`:#[bN<IYT0t>MP:f7i,dF*)C]ere}wSQkB?<?' );

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
