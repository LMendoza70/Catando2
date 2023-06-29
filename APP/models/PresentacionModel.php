<?php
class PresentacionModel{
    private $connection;
    public function __construct(){
        require_once("APP/config/BDConection.php");
        $this->connection = new BDConection();
    }

    public function getAll(){
        $sql = "SELECT * FROM presentacion";
        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        $presentaciones = array();
        while($presentacion = $result->fetch_assoc()){
            $presentaciones[] = $presentacion;
        }
        $this->connection->closeConnection();
        return $presentaciones;
    }

    public function getById($id){
        $sql = "SELECT * FROM presentacion WHERE id = $id";
        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        if($result && $result->num_rows > 0){
            $presentacion = $result->fetch_assoc();
        }else{
            $presentacion = false;
        }
        $this->connection->closeConnection();
        return $presentacion;
    }

    public function insert($pre){
        $sql = "INSERT INTO presentacion 
        (descripcion, gramos) 
        VALUES ('". $pre['desc'] . "','". $pre['gramos'] . "')";

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

    public function update($presentacion){
        $sql = "UPDATE presentacion SET descripcion = '" . $presentacion['descripcion'] . "', gramos = '" . $presentacion['gramos'] . "' WHERE id = " . $presentacion['id'];
        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        if($result){
            $id = $presentacion['id'];
        }else{
            $id = false;
        }
        $this->connection->closeConnection();
        return $id;
    }

    public function delete($id){
        $sql = "DELETE FROM presentacion WHERE id = $id";
        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        if($result){
            $id = $id;
        }else{
            $id = false;
        }
        $this->connection->closeConnection();
        return $id;
    }

    public function search($search){
        $sql = "SELECT * FROM presentacion WHERE descripcion LIKE '%$search%' OR gramos LIKE '%$search%'";
        $connection = $this->connection->getConnection();
        $result = $connection->query($sql);
        $presentaciones = array();
        while($presentacion = $result->fetch_assoc()){
            $presentaciones[] = $presentacion;
        }
        $this->connection->closeConnection();
        return $presentaciones;
    }
}

?>