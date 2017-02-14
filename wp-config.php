<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'db_hcdmaipu');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'Admin123$');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '40Cy3Sb.L$HOb}MQrE2~iu<w7I{!fIZ 6b#=:rq,5s4idn@aC2vEJb>w;--LCVUH');
define('SECURE_AUTH_KEY', '}3/}_O8!AF+~EO>KNJZy&,Pgg9jn!ix@i~b-8s,#WrXg2V@dILTM&!Wrp2i<nI/d');
define('LOGGED_IN_KEY', 'T#Py^Fxor]fi}#XPVisHK=!^6,13rT= y33<8Ou`TN<L4_Xy]}:uC=$fnuKSn`nz');
define('NONCE_KEY', 'n70qHE@.$:X:=7&1T-Y:r/UMdAmta |th{}X a!u5s7mK!A3lDJ7YMSr%S3Qlej!');
define('AUTH_SALT', '[bSNKS(0/PvE$i9#f);+QS>*9_u])~*^QJ^f`Jt=bb8IKUS-gi.%~~8}@^fIe$PL');
define('SECURE_AUTH_SALT', 'mwtikbh!M{`Jy4nrACkC&8FY1IIQILkt&EW*fJyRA4`gL+bSw==uMQk>VC]a$$4r');
define('LOGGED_IN_SALT', '<J,$?qth% W@u|D0+dnekSl08tbPQy9/Gk#_}CEUCHAo4 *x+9nO,/;c52_S/=fn');
define('NONCE_SALT', '>:Pi/pn<ELkXJ*d``gn`*aOFNU$~X89oRf5UZfwesaR;Q) :/XsJE)U3Pzp7GkI(');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

