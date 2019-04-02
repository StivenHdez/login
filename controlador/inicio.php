<?php
require_once('../include/db.php');
require_once('../include/config.php');
require_once('../modelo/user.php');
require_once('../modelo/user_session.php');

$user = new user();
$userSession = new UserSession();

if(isset($_SESSION['user'])){
    include '../vistas/inicio.html';
}else {
    header("location:ctruser.php");
}

?>