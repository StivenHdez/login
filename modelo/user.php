<?php

class user {


    private $nombre;
    private $username;
    private $password;
    private $DB;


    function __Construct(){
        $this->DB=DataBase::getInstance();
     }

     public function getnombre(){
		return $this->nombre;
    }
    
    public function setnombre($nombre){
		$this->nombre = $nombre;
	}

    
	public function getusername(){
		return $this->username;
	}

	public function setusername($username){
		$this->username = $username;
    }

  	public function getpassword(){
      return $this->password;
    }
  
    public function setpassword($password){
      $this->password = $password;
      }  
    

    public function userExists($usuario,$pass){  
       $consulta = 'SELECT * FROM usuarios WHERE username = ? AND password = ?';
       $sth=$this->DB->prepare($consulta);
       $sth->bindParam(1,$usuario);
       $sth->bindParam(2,$pass);
       $sth->execute();
       return $sth->fetchAll();
    }

    public function setUser($usuario){
      $consulta = 'SELECT * FROM usuarios WHERE username = ?';
      $sth=$this->DB->prepare($consulta);
      $sth->bindParam(1,$usuario);
      $sth->execute();
      return $sth->fetchAll();

        foreach($consulta as $curretnUser){
            $this->nombre= $currentUser['nombre'];
            $this->username= $currentUser['username'];
        }
    }

    public function nombre(){
        return nombre; 
    }

}

?>