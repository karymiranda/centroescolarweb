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
//define( 'DB_NAME', 'basesantamaria' );

/** MySQL database username */
//define( 'DB_USER', 'root' );

/** MySQL database password */
//define( 'DB_PASSWORD', '' );

/** MySQL hostname */
//define( 'DB_HOST', 'localhost' );

define( 'DB_NAME', 'Yu9VssY8uP' );

/** MySQL database username */
define( 'DB_USER', 'Yu9VssY8uP' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NLcGgNnqFh' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );


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
define( 'AUTH_KEY',         'yrwhO fP=q{#u]IPHdh%IWuFPjYfSl=kM~oG*38;Jj:ySdEA+pQz].oZ:SBBO-:S' );
define( 'SECURE_AUTH_KEY',  'i6a$6Pw#(}:a3XYxHbTmf4?nhVzv1v-JKfZ7O-b}~@W?@SOyuJML]SGDCo1!$|$F' );
define( 'LOGGED_IN_KEY',    'SoiHxJnMYf)T7GQ2TV4qYohL_jpsJ`4RyROrd()5M@Y3OpqE._agj$Di)MFF/j58' );
define( 'NONCE_KEY',        '}R:W4#i`&W ,Z0*uZ&Puco@k{3VUZJ7dY}Gx$-={mh/$P^<D4bZnp.H1x!cd3i!,' );
define( 'AUTH_SALT',        'B#@f4xTJPgAu:Do;)k4^u?$(UylO*.S|GpOe)3DYP|wh@O|*[[LS$Tg*f1=:I[yx' );
define( 'SECURE_AUTH_SALT', '3bFfEY:J#Qv=w.A2Fl30_ a25E:y#]tH[{iAf#b$zk^;@;#kk`;k9n_p}P[mhS}4' );
define( 'LOGGED_IN_SALT',   '52abC%K ~=X=T=?Do4*S5~c/{jouRanA420VON@@Nv9`me4dBzh6?Ybs0DkkN0wp' );
define( 'NONCE_SALT',       '8KjR:<r+`dek]d$rAW3YZ,0?YR*GgW!Nt$ &TzU35%i7B,$?<j6Mv+tCe}$roJGW' );

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
define( 'CONCATENATE_SCRIPTS', false );
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
