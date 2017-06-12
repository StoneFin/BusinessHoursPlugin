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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BusinessHoursPlugin' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'riTUJ6P@-kt|w+Nh5M?#|T^R4NCuRg5>+{{ou b:QE@.(t2+Z/*5c$xy L$I!*im');
define('SECURE_AUTH_KEY',  'vqz1vOJ-F?g$n-{mhgvI]%ya#<f`ipR3Z9(q^U$[0Vs7r6m|o,DS)/0/3+ew}J|K');
define('LOGGED_IN_KEY',    ';kod|u 9/L<br9_Xqj4VW6+z5hgty>#1vqf;OW?v?W=a)YmOueP@8Ya)I<)p1^Z+');
define('NONCE_KEY',        '4s<+f5SfQl|K^*PJ_<yW+)$92&PI2)Q$xmK&:FwF2Y;p@3;w$$cS;HA&^{e?E.pD');
define('AUTH_SALT',        'BtzV30 |m.g[Z)-y7Rlq*SGmZ:7T&98/(!zGq2.=)Y+zPtgz3#Xbu[3z b<MX)5e');
define('SECURE_AUTH_SALT', '72!sKP@gUeuU$|1s-[#=TRjuW;|JZcyR-ntjyjntG9Dw]NI^7[@IQ(N)I4-7=x>j');
define('LOGGED_IN_SALT',   'MN^gUo]D?u|8j_u-{+}20S1T0DvKOE2Q@7@rHW6OGDF0P[PV8U{Ft<U,<HpUG7?>');
define('NONCE_SALT',       ';uu%YqKR]gYMHfCUpW:3W#d^fhxWGk}MQL.L+7;sFm1=oYFnt/$jzx1ndxo_|.zD');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(BusinessHoursPlugin.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
