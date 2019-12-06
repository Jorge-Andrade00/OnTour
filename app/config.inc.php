<?php
//info de la base de datos
define('NOMBRE_SERVIDOR', 'localhost');
define('NOMBRE_USUARIO', 'root');
define('PASSWORD', 'jorge123'); //para trabajar con aws
//define('PASSWORD', '');//para trabajar con xampp
define('NOMBRE_BD', 'ontour');

// rutas de la página
//define("SERVIDOR", "http://localhost:8888/ontour1/"); //para trabajar con xampp
define("SERVIDOR", "http://18.228.96.18/ontour1/"); //para trabajar con aws
define("RUTA_REGISTRO", SERVIDOR."/registro.php");
define("RUTA_REGISTRO_CORRECTO", SERVIDOR."/registro-correcto.php");
define("RUTA_LOGIN", SERVIDOR."/login.php");
define("RUTA_LOGOUT", SERVIDOR."/logout.php");
define("RUTA_PERFIL", SERVIDOR."/perfil.php");
define("RUTA_PAQUETES", SERVIDOR."/paquete.php");
define("RUTA_DESTINOS", SERVIDOR."/destino.php");
define("RUTA_ABOUT", SERVIDOR."/about.php");
