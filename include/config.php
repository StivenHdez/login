<?php
define('DRIVER','mysql');
define('PORT','3306');
define('HOST','localhost');
define('NAMEDB','login');
define('USER','root');
define('PASS','');


$tmp = explode('/', $_SERVER['SERVER_PROTOCOL']);
$protocolo = strtolower($tmp[0]);
$host = $_SERVER['HTTP_HOST'];
$root = $_SERVER['DOCUMENT_ROOT'];
$ruta = str_replace($root, '', dirname($_SERVER['SCRIPT_FILENAME']));
$url = $protocolo . '://' . $host . "/" . $ruta;
define('URL', $url);

// if(session_status() == PHP_SESSION_NONE){
//     session_start();
// }

// // var_dump($_SESSION);exit();

// if(!isset($_SESSION['idRol'])) {
//   header("Location: " . URL . "/Login.php");
//   exit();
// }


 ?>
