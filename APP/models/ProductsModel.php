<?php
class ProducsModel{
    private $connection;
    public function __construct(){
        require_once("APP/config/BDConection.php");
        $this->connection = new BDConection();
    }

    public function getAll(){
        $sql = "SELECT cafe.id, variedad.nombre, presentacion.descripcion, precio 
        FROM cafe, variedad, presentacion WHERE cafe.variedad_id = variedad.id 
        AND cafe.presentacion_id = presentacion.id";
        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        $datos = array();
        while($dato = $result->fetch_assoc()){
            $datos[] = $dato;
        }
        $this->connection->closeConnection();
        return $datos;
    }

    public function insert($pro){
        $sql = "INSERT INTO cafe 
        (precio, variedad_id, presentacion_id) 
        VALUES ('". $pro['variedad'] . "','". $pro['presentacion'] . "','". $pro['precio'] . "')";

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