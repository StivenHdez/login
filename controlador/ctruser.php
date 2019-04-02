<?php
require_once('../include/db.php');
require_once('../include/config.php');
require_once('../modelo/user.php');
require_once('../modelo/user_session.php');

$user = new user();
$userSession = new UserSession();

if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    header("location:inicio.php");
}else if(isset($_POST['username']) && isset($_POST['password'])){
    // echo "Validacion de login"; 
    $usuario = $_POST['username'];
    $pass=$_POST["password"];

if($user->userExists($usuario,$pass)){
    $userSession->setCurrentUser($usuario);
    $user->setUser($usuario);
    header("location:inicio.php");
}else{
    $errorLogin="Nombre de usuario o password incorrectos";
}
}

// if(isset($_POST["btnLogin"])){
//     // $user->setusername($_POST["username"]);
//    $r=  $user->userExists($usuario=$_POST["username"],$pass=$_POST["password"]);
//     foreach ($r as $key => $value) {    
//         $username = $value[nombre];
//   }

//   if($username !=""){
//     header("location:inicio.php");
//   }else{
//       echo"Datos incorrectos";
//   }


// }
include '../vistas/login.html';
?>