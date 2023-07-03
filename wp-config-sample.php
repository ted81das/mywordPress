<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iweb3_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('WP_POST_REVISIONS', 20);
define('EMPTY_TRASH_DAYS', 7);
define ('DISALLOW_FILE_EDIT', true); 	
define( 'DISALLOW_FILE_MODS', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'WP_AUTO_UPDATE_CORE', true );
define( 'AST_WL_ASTRA_AGENCY_AUTHOR', 'iWeb Designs' );
define( 'AST_WL_ASTRA_AGENCY_AUTHOR_URL', 'iweb.cro.bz' );
define( 'AST_WL_ASTRA_AGENCY_LICENCE', 'iweb.cro.bz );
define( 'AST_WL_ASTRA_NAME', 'Fastest WP Theme' );
define( 'AST_WL_ASTRA_DESCRIPTION', 'iWeb theme' );
define( 'AST_WL_ASTRA_SCREENSHOT', 'www.your-theme-screenshot-url.com' );            
define( 'AST_WL_ASTRA_PRO_NAME', 'Pro Addon' );         
define( 'AST_WL_ASTRA_PRO_DESCRIPTION', 'Pro Addon extends the features of theme' );
define( 'AST_WL_ASTRA_SITES_NAME', 'Ready Sites' );       
define( 'AST_WL_ASTRA_SITES_DESCRIPTION', 'Library of Ready sites' );
define( 'AST_WL_BSF_LW_SB_NAME', 'Custom Sidebar Manager' );      
define( 'AST_WL_BSF_LW_SB_DESCRIPTION', 'Manage your Sidebar' );    
define( 'AST_WL_ASTRA_HOOKS_NAME', 'Hooks for theme' );           
define( 'AST_WL_ASTRA_HOOKS_DESCRIPTION', 'Use hooks to put custom code' ); 
define( 'AST_WL_BSF_CUSTOM_FONTS_NAME', 'My Custom Fonts' ); 
define( 'AST_WL_BSF_CUSTOM_FONTS_DESCRIPTION', 'Add custom fonts' ); 
define( 'AST_WL_CUSTOM_TYPEKIT_FONTS_NAME', 'My fonts' ); 
define( 'AST_WL_CUSTOM_TYPEKIT_FONTS_DESCRIPTION', 'Add custom typekit font' ); 


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
