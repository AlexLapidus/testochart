<?php/** * The base configuration for WordPress * * The wp-config.php creation script uses this file during the * installation. You don't have to use the web site, you can * copy this file to "wp-config.php" and fill in the values. * * This file contains the following configurations: * * * MySQL settings * * Secret keys * * Database table prefix * * ABSPATH * * @link https://wordpress.org/support/article/editing-wp-config-php/ * * @package WordPress */// ** MySQL settings - You can get this info from your web host ** ///** The name of the database for WordPress */define( 'DB_NAME', 'wordpress' );/** MySQL database username */define( 'DB_USER', 'root' );/** MySQL database password */define( 'DB_PASSWORD', '' );/** MySQL hostname */define( 'DB_HOST', 'localhost' );/** Database Charset to use in creating database tables. */define( 'DB_CHARSET', 'utf8mb4' );/** The Database Collate type. Don't change this if in doubt. */define( 'DB_COLLATE', '' );/**#@+ * Authentication Unique Keys and Salts. * * Change these to different unique phrases! * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again. * * @since 2.6.0 */define( 'AUTH_KEY',         '5c@F?GtQ$nbx4l56VnZC.}O.?5/_4L}O.3SAK<2=[31{$+Dxo.EAC>r9Eu)=do>L' );define( 'SECURE_AUTH_KEY',  'm;^K [M{H3RU<^T/P*!RDF#GCOx<7@m)mU}.qL3)1C+X5)kVKS6L;(6I8s,UV*W9' );define( 'LOGGED_IN_KEY',    '{n:R9qf3of6FzX4Mn;H/p5b)/]O}*)GrO{Weln@CgaP$+epGAMl7IA+p%~y+$Qqb' );define( 'NONCE_KEY',        '~{( :<wON8p*dcuBv,}Cfs#NjW#LK$<_)0(LmHp(v)B$4Mcb8[7iBv]QpeK!EUE;' );define( 'AUTH_SALT',        'g9R@f:_%#vLjMHDjI=ds2I|>Q$C#6mq(?t@+$DA~4XAgS6-l~[|oBV_+{U8ymq)*' );define( 'SECURE_AUTH_SALT', 'BQe04%5//Tnfri=IQ_dHUL9>Jd!cIpI IZ&,G/S%BD@6nD,/MrV.EipvW}a,fAT#' );define( 'LOGGED_IN_SALT',   '^4$QN+:BaqW<UGZ}JnIr*2r=}P~51p7iq,6cfw*8`35zHEn$(EiVQL%U^%O0d=g,' );define( 'NONCE_SALT',       'HVzu//WCIDUyMnk>K+A:]bq|D1v{ Yc|;L[,GmZ:N|q5UdXDvnn&CxbZ[3gdMCuq' );/**#@-*//** * WordPress Database Table prefix. * * You can have multiple installations in one database if you give each * a unique prefix. Only numbers, letters, and underscores please! */$table_prefix = 'wp_';/** * For developers: WordPress debugging mode. * * Change this to true to enable the display of notices during development. * It is strongly recommended that plugin and theme developers use WP_DEBUG * in their development environments. * * For information on other constants that can be used for debugging, * visit the documentation. * * @link https://wordpress.org/support/article/debugging-in-wordpress/ */define( 'WP_DEBUG', false );/* That's all, stop editing! Happy publishing. *//** Absolute path to the WordPress directory. */if ( ! defined( 'ABSPATH' ) ) {	define( 'ABSPATH', __DIR__ . '/' );}/** Sets up WordPress vars and included files. */require_once ABSPATH . 'wp-settings.php';