<?php
    class UserModel{
        //creamos la instancia de la coneccion
        private $bdConection;

        //creamos el constructor para conectar a la base de datos
        public function __construct(){
            //llamamos a la clase de la coneccion
            require_once("APP/config/bdConection.php");
            //creamos la instancia de la coneccion
            $this->bdConection = new BDConection();
        }

        //creamos la funcion para obtener todos los usuarios
        public function getAll(){
            //creamos la consulta
            $sql = "SELECT * FROM user";
            //obtenemos la coneccion
            $connection = $this->bdConection->getConnection();
            //ejecutamos la consulta
            $result = $connection->query($sql);
            //creamos el arreglo para guardar los usuarios
            $users = array();
            //recorremos el resultado de la consulta con la funcion fetch_assoc()
            while($user = $result->fetch_assoc()){
                //agregamos cada usuario al arreglo
                $users[] = $user;
            }
            //cerramos la coneccion
            $this->bdConection->closeConnection();            
            //retornamos el arreglo con todos los usuarios
            return $users;
        }

        //creamos la funcion para obtener un usuario por su id
        public function getById($id){
            //creamos la consulta
            $sql = "SELECT * FROM user WHERE IdUser = $id";
            //obtenemos la coneccion
            $connection = $this->bdConection->getConnection();
            //ejecutamos la consulta
            $result = $connection->query($sql);
            //verificamos que la consulta haya traido un resultado
            if($result && $result->num_rows > 0){
                //obtenemos el usuario
                $user = $result->fetch_assoc();
            }else{
                //si no hay resultados, retornamos false
                $user = false;
            }
            //cerramos la coneccion
            $this->bdConection->closeConnection();
            //retornamos el usuario
            return $user;
        }
        
        //creamos la funcion para insertar un usuario
        public function insert($user){
            //creamos la consulta
            $sql = "INSERT INTO user 
            (Usuario, Nombre, ApPaterno, ApMaterno, Password, Sexo, FchNacimiento, Avatar) 
            VALUES ('". $user['usuario'] . "', '" . $user['nombre'] . "', 
            '" . $user['appaterno'] . "', '" . $user['apmaterno'] . "', 
            '" . $user['password'] . "','" . $user['sexo'] . "','" . $user['fchnac'] . "','" . $user['avatar'] . "')";
            
            //obtenemos la coneccion
            $connection = $this->bdConection->getConnection();
            //ejecutamos la consulta
            $result = $connection->query($sql);
            //verificamos que la consulta se haya ejecutado correctamente
            if($result){
                //obtenemos el id del usuario insertado
                $id = $connection->insert_id;
            }else{
                //si no se ejecuto correctamente, retornamos false
                $id = false;
            }
            //cerramos la coneccion
            $this->bdConection->closeConnection();
            //retornamos el id del usuario insertado
            return $id;
        }

        //creamos la funcion para actualizar un usuario
        public function update($user){

            //creamos la consulta para actualizar el usuario existente excepto el id
            $sql = "UPDATE User SET Usuario = '" 
            . $user['usuario'] . "', Nombre = '" . $user['nombre'] 
            . "', ApPaterno = '" . $user['appaterno'] 
            . "', ApMaterno = '" . $user['apmaterno'] 
            . "', Password = '" . $user['password'] 
            . "', Sexo = '" . $user['sexo'] 
            . "', FchNacimiento = '" . $user['fchnac'] 
            . "' WHERE IdUser = " . $user['IdUser'];

            //obtenemos la coneccion
            $connection = $this->bdConection->getConnection();
            //ejecutamos la consulta
            $result = $connection->query($sql);
            //verificamos que la consulta se haya ejecutado correctamente
            if($result){
                //obtenemos el id del usuario actualizado
                $id = $connection->insert_id;
            }else{
                //si no se ejecuto correctamente, retornamos false
                $id = false;
            }
            //cerramos la coneccion
            $this->bdConection->closeConnection();
            //retornamos el id del usuario insertado
            return $id;
        }
        
        //creamos la funcion para eliminar un usuario
        public function delete($id){
            //creamos la consulta para eliminar el usuario
            $sql = "DELETE FROM User WHERE IdUser = $id";
            //obtenemos la coneccion
            $connection = $this->bdConection->getConnection();
            //ejecutamos la consulta
            $result = $connection->query($sql);
            //verificamos que la consulta se haya ejecutado correctamente
            if($result){
                //si se ejecuto correctamente, retornamos true
                $deleted = true;
            }else{
                //si no se ejecuto correctamente, retornamos false
                $deleted = false;
            }
            //cerramos la coneccion
            $this->bdConection->closeConnection();
            //retornamos el resultado de la eliminacion
            return $deleted;
        }

        //creamos la funcion para obtener un usuario por su usuario y password
        public function getByUserAndPassword($user, $password){
            //creamos la consulta para obtener el usuario
            $sql = "SELECT * FROM User WHERE Usuario = '$user' AND Password = '$password'";
            //obtenemos la coneccion
            $connection = $this->bdConection->getConnection();
            //ejecutamos la consulta
            $result = $connection->query($sql);
            //verificamos que la consulta haya traido un resultado
            if($result && $result->num_rows > 0){
                //obtenemos el usuario con el que se va a iniciar sesion
                $user = $result->fetch_assoc();
            }else{
                //si no hay resultados, retornamos false
                $user = false;
            }
            //cerramos la coneccion
            $this->bdConection->closeConnection();
            //retornamos el usuario
            return $user;
        }

        
    }
?>