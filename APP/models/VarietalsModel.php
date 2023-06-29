<?php
class VarietalsModel{
    private $connection;
    public function __construct(){
        require_once("APP/config/BDConection.php");
        $this->connection = new BDConection();
    }

    public function getAll(){
        $sql = "SELECT * FROM variedad";
        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        $datos = array();
        while($dato = $result->fetch_assoc()){
            $datos[] = $dato;
        }
        $this->connection->closeConnection();
        return $datos;
    }

    public function insert($variedad){
        $sql = "INSERT INTO variedad 
        (nombre, descripcion, variedad, puntuacion, productor, finca, altura, proceso, notas) 
        VALUES ('". $variedad['nombre'] . "','". $variedad['desc'] . "','". $variedad['variedad'] . "',
        '". $variedad['puntos'] . "','". $variedad['productor'] . "','". $variedad['finca'] . "',
        '". $variedad['altura'] . "','". $variedad['proceso'] . "','". $variedad['notas'] . "')";

        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        if($result){
            $id = $connection->insert_id;
        }else{
            $id = false;
        }
        $this->connection->closeConnection();
        return $id;
    }
}

    
?>