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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'b2w');

/** MySQL database password */
define('DB_PASSWORD', 'eynyYxs38GNwStfx');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't6Gi>c.>wn=vS>1i6[dCaEFIj/Y) ]S/pww!HMlPY34k$9~Z)PD0x/eia{[8cj$?');
define('SECURE_AUTH_KEY',  '+q%8<=e0fc>layQM4|O`/3vWF$+G@oU?H1-b+.`&GM`oJGApCn^2z/8o4pDOgqxv');
define('LOGGED_IN_KEY',    'g{#)@|<ie`{9X(CsP~;Rb7)Sf|2:QA`Qeb;.SEfX!B@~eU31lCm.9*est)(fR$M`');
define('NONCE_KEY',        '#+_v)/zBQd)`JDa/G}a5$GK2+Hj0`KYdc*++5jx]h)}[Y4fT8M8^mn)%o5JaJ&mA');
define('AUTH_SALT',        'Vqs}OU<Z{Y-w-<GXSTXiP=N27X#G.-Xv&-`vDjH|h0mq^L1&:;-;|30?{@=^`A}>');
define('SECURE_AUTH_SALT', 'Y{D@pt)*n]~[QVRUky!/7-BX4Xda)uL ZE?bV|WrN3st<oU$sMa&s%c*0mH|DSSN');
define('LOGGED_IN_SALT',   'eb{ dAi +#V[jc#]mi|#PZCmE|E5NA,un?xxt541T[ux;Jx~!l`! Ct$Wh|8:X+r');
define('NONCE_SALT',       'Qs5|-fT9|7D4?u9!$8-F4`eroh-4`O+=k<W6+)|saPMG6s7IX..}qdQQ./qY-}]=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbb2w_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
