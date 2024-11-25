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
        $stmt->bindParam('username',$username);
        $stmt->bindParam('password',$password);
        $stmt->bindParam('perfil',$perfil);

        
        return $stmt->execute();
        }
        
    // debe hacer un metodo para hacer delet
}
?>