<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/etc/config.php';

class conexion {

    private $host;
    private $namedb;
    private $userdb;
    private $paswordb;
    private $charset;

    private $pdo;

    public function __construct($host,$namedb,$userdb,$paswordb,$charset ='utf8' ) {
        $this->host = $host;
        $this->namedb = $namedb;
        $this->userdb = $userdb;
        $this->paswordb = $paswordb;
        $this->charset = $charset;

        $this->conectar();
    }

    public function conectar() {
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";

        try{
            $this->pdo = new PDO($dsn, $this->userdb, $this->paswordb);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(pdoException $e){
            die('Hubo un error'.$e->getMessage());

        }
    }

    public function obtenerConexion() {
        return $this->pdo;

    }

    public function contesta(){
        $dsn = "mysql:host={$this->host};dbname={$this->namedb};charset={$this->charset}";

        return $dsn;
    //return 'texto';
    }
}
//echo "la compilacion esta ok";

?>