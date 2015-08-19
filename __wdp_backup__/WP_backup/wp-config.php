<?php
//The entry below were created by iThemes Security to disable the file editor
define( 'DISALLOW_FILE_EDIT', true );


/**
* The base configurations of the WordPress.
*
* This file has the following configurations: MySQL settings, Table Prefix,
* Secret Keys, WordPress Language, and ABSPATH. You can find more information
* by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. You can get the MySQL settings from your web host.
*
* This file is used by the wp-config.php creation script during the
* installation. You don't have to use the web site, you can just copy this file
* to "wp-config.php" and fill in the values.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kwma2903_latest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'KPyT6~bZ=9%xRl^:m:D3RI7d[?P[(1|)U`4W4>5e$Yi+9(IV:s;hNlKQw6*/p!2R');
define('SECURE_AUTH_KEY',  'O&d+auw|*eWON(6%JuDW-zJMe`OcDlW*d2Of3MaNalnvU-YY+hf]B,CQ[*P|dmQc');
define('LOGGED_IN_KEY',    'yl+lRZ1-]cDn`n*`uiX%vP@)~2O)1~qp!WK{K)R{TFfb!b3$O/];>Z$&yJkX@&Zx');
define('NONCE_KEY',        'z97I^Q+WXgy.)b33}tzH/+$;QH&/kpE`m,Qd~8W?XH/)xn-2Yk~{EOF[d#SVv ,*');
define('AUTH_SALT',        'b<c0U-e}`iNyO(K2C*U2?dGJW(1f>8-E-m&]Z$c`)%cbVcuJ-IM>NRg4lf0lh)H0');
define('SECURE_AUTH_SALT', 'KTy)RWRG~zlZKwZ#=tk;1Gj7*Ku-%,|-jHy yBa>dr0b2$N0Y!Wt>wB5G|o{f|f}');
define('LOGGED_IN_SALT',   '?+gLBfOsP;6kV.xY8)/zR{~#cI*ym4>G@.`9^p.L@W`*#{2$}>)sd!c]v-Vg>M(C');
define('NONCE_SALT',       'Mj,&92Pqz:335}mFIkzw|xMldj%q}fadAZ^}[}):KIJA9vg7g/|)X7s9mZ}1djh9');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'wp_';

/**
* WordPress Localized Language, defaults to English.
*
* Change this to localize WordPress. A corresponding MO file for the chosen
* language must be installed to wp-content/languages. For example, install
* de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
* language support.
*/
define('WPLANG', '');

/**
* For developers: WordPress debugging mode.
*
* Change this to true to enable the display of notices during development.
* It is strongly recommended that plugin and theme developers use WP_DEBUG
* in their development environments.
*/
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
