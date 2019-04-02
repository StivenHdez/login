<?php

class UserSession{

public function __construct(){
session_start();
}

public function setCurrentUser($usuario){
   $_SESSION['user']=$usuario; 

}

public function getCurrentUser(){
        return $_SESSION['user'];
    }

public function closeSessions(){
        session_unset();
        session_destroy();
    }    


     
}

?>