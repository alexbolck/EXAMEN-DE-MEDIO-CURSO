<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/models/connect/conexion.php';

class modeloUsuario{

    private $conexion;


    //al instanciar la clase debo obtener ;a conexion
    public function __construct()
    {
    $this->conexion = Conexion::obtenerConexion();
    }
    // debe hacer un metodo para hacer select
    public function obtenerUsuarios(){
        $query = $this->conexion->query('select id,username,password,perfil from usuarios');
        
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    // debe hacer un metodo para hacer insert

    public function insertarUsuarios($username, $password, $perfil){
        

        $query = 'INSERT INTO usuarios(username, password, perfil) VALUES (:username, :password, :perfil)';
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':password',$password);
        $stmt->bindParam(':perfil',$perfil);

        
        return $stmt->execute();
    }
        
    // debe hacer un metodo para hacer delet
    public function eliminarUsuarioPorNombre($username){

        $query = "delete from usuarios where username = :username";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':username',$username);
        
        return $stmt->execute();
        }

    // debe hacer un metodo para hacer update

    public function actualizarUsuario($id, $username, $password, $perfil){
        $query = "update usuarios set username=:username, password= :password, perfil= :perfil where  id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':perfil', $perfil);

        
        return $stmt->execute();
    }

    //obtiene un solo usuario por su nombre
    public function obtenerUsuarioPorNombre($username)
    {
        $query = 'select id, username, password, perfil from usuarios where username = :username';
        
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':username', $username);

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function validarUsuario($username,$password)
    {
        $query = 'select id, perfil from usuarios where username = :username and password = :password';
        
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>