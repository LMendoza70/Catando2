<?php
    class BDConection{
        //creamos la instancia de la coneccion
        private $connection;
        
        //creamos el constructor
        public function __construct(){
            //llamar al archivo de configuracion
            require_once('config.php');
            //creamos la conexion
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            //manejo de errores
            if($this->connection->connect_error){
                die('Erroror de conexion a la base de datos: ' . $this->connection->connect_error);
            }
        }

        //creamos la funcion para obtener la coneccion
        public function getConnection(){
            return $this->connection;
        }

        //creamos la funcion para cerrar la coneccion
        public function closeConnection(){
            if($this->connection && $this->connection->ping()){
                $this->connection->close();
            }
        }
    }
