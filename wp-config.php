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

define('DB_NAME', 'bqqenuxo_wp1');



/** MySQL database username */

define('DB_USER', 'bqqenuxo_wp1');



/** MySQL database password */

define('DB_PASSWORD', 'X(SxUDRsMiGWaXmXn6#27[]3');



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

define('AUTH_KEY',         'XBxQkY2oJrgkRr6Gosh0PhY4bKe6qs7eFKVTiK73wBS7VLvKDx1Ujl8YahKW2Os8');

define('SECURE_AUTH_KEY',  'ScWyhNpLni2bZrgQ3rJlhGVlg1qHrfIR0bTIYiBMQD2AoSIurQPMWfFllB6k8DrE');

define('LOGGED_IN_KEY',    '27WNQ3FWiMnvjziRnaWqbnLjue3umjQ8QWIHMRwUKpDlutx9437i1NBY5lbih3z8');

define('NONCE_KEY',        '1nMFLPGppJAXQmzzyfHhHVPtMCaGi2vTajyJbhVNJ42XnShJojDPrWTct89f3jN9');

define('AUTH_SALT',        'zqyiolsTQvjTjNGIquZwIxEA6wUp77kRXzyiHNwwePHGyFSywxxGdCqrhdUfMsTR');

define('SECURE_AUTH_SALT', 't95WjpJ0sMAwFi6pF1YitcmnpdvmLkZa4xGuqXpsjzl6TAooDxhiIBe3ZWobTcQf');

define('LOGGED_IN_SALT',   'jssqCx3jAc1Wclhp3UPqp3hU5xEcxWow1KRwyOdd6ymEkNARFe6PCPtTMdsshzOn');

define('NONCE_SALT',       '3A9D559PLIn7sb8wNrS5SbIgj6hRYrWnzwQgFIPMAZhhokV0XQJq45G4g4Zo8svN');



/**

 * Other customizations.

 */

define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**

 * Turn off automatic updates since these are managed upstream.

 */

define('AUTOMATIC_UPDATER_DISABLED', true);





/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



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
