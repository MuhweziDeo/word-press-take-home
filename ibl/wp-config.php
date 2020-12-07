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
define( 'DB_NAME', 'ibl_test' );

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
define( 'AUTH_KEY',         '1.Cz1smJ(z-$.o4d#4`Z-D!N8=a5Q~db159pPsCbtu(;<HBds,rn_>(3.TjwnRz5' );
define( 'SECURE_AUTH_KEY',  '{Y|-HUgjqgEb3L8]VXed5CJ(#~%peG]swaakMP4L}4 _QU6yvd:Nx VfotCSPi6E' );
define( 'LOGGED_IN_KEY',    'gl$50?H-SAjujPq_%|C,$.!41~^/>o^T6AS`a4&Dby+nhQ!+ElEl*h?oO4%e9:5:' );
define( 'NONCE_KEY',        'v@Yd6aA=9yAG>~#Rro%,{QwJ8NC?Dtc06xO?V9a{WRL7ZncmoSfSF03}Cw#Q6RMD' );
define( 'AUTH_SALT',        'cp&e?xH&/WF`9D%Yl|lxHCws*+4;Dg|:hrPjjbvRdT1Rl&8UG-6U7l6)q&/`[0VN' );
define( 'SECURE_AUTH_SALT', 'T9m)z^f!oKF<M|byn<Ig$|(!rUun_R22Iahy[3sN)^v8{V$5otE${jsU*KWRV2Ly' );
define( 'LOGGED_IN_SALT',   '6#irZNvLH0+;yaaI:45Fnj~,TyDe3m-Vb-8}()Q*_f#in<wyBY@_>/%[!SJzg|$p' );
define( 'NONCE_SALT',       ',BToh8pzHV7YKGIj$zZv!H(o<H<uHTm[(0,AM};~aK`cd|/u#b05F1D,|@CSUI4x' );

/**#@-*/
define( 'FS_METHOD', 'direct' );

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
