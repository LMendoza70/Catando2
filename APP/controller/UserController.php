<?php
    //incluimos el modelo de la clase User para poder instanciarlo y usar sus funciones
    include_once 'APP/models/UserModel.php';
    //creamos la clase UserController 
    class UserController{
        //definimos el atributo modelo para almacenar la instancia del modelo User
        private $modelo;
         
        //creamos el metodo index para cargar la vista por defecto del controlador
        public function index(){
            //definimos la vista que sera llamada por el controlador en el layout(plantilla)
            $vista="APP/views/users/userIndexView.php";
            //inicializamos el modelo User para poder usar sus funciones
            $this->modelo=new UserModel();
            //traemos todos los usuarios de la base de datos
            $datos=$this->modelo->getAll();
            //incluimos el layout(plantilla)
            include_once("APP/views/layout.php");
        }

        //creamos el metodo para llamar el formulario de registro de usuario
        public function CallFormRegister(){
            //definimos la vista que sera llamada por el controlador en el layout(plantilla)
            $vista="APP/views/users/userAddView.php";
            //incluimos el layout(plantilla)
            include_once("APP/views/layout.php");
        }

        //creamos el metodo que agrega al usuario a la base de datos
        public function Add(){
            //verificamos si el metodo de envio de datos es POST
            if($_SERVER['REQUEST_METHOD']=='POST'){
                //verificamos si las variables de envio de datos estan definidas
                if(isset($_POST['nombre']) && isset($_POST['apaterno']) 
                && isset($_POST['amaterno']) && isset($_POST['usuario'])
                && isset($_POST['password']) && isset($_POST['sexo'])
                && isset($_POST['fchNac'])){
                    //almacenamos los datos enviados por el formulario en un arreglo
                    $datos=array(
                        'nombre'=>$_POST['nombre'],
                        'appaterno'=>$_POST['apaterno'],
                        'apmaterno'=>$_POST['amaterno'],
                        'usuario'=>$_POST['usuario'],
                        'password'=>$_POST['password'],
                        'sexo'=>$_POST['sexo'],
                        'fchnac'=>$_POST['fchNac']
                    );
                    //llamamos al metodo del modelo que agrega al usuario a la base de datos
                    require_once("APP/models/UserModel.php");
                    $this->modelo=new UserModel();
                    $this->modelo->insert($datos);
                    //redireccionamos al controlador por defecto
                    header("Location:http://localhost/catando2/?clase=UserController&metodo=index");
                }
            }
        }

        //creamos el metodo que llama al formulario de edicion de usuario
        public function CallFormEdit(){
            //verificamos si el metodo de envio de datos es GET
            if($_SERVER['REQUEST_METHOD']=='GET'){
                //verificamos si la variable de envio de datos esta definida
                if(isset($_GET['id'])){
                    //almacenamos el id del usuario a editar
                    $id=$_GET['id'];
                    //llamamos al metodo del modelo que trae los datos del usuario a editar
                    $this->modelo=new UserModel();
                    $datos=$this->modelo->getById($id);
                    //definimos la vista que sera llamada por el controlador en el layout(plantilla)
                    $vista="APP/views/users/userEditView.php";
                    //incluimos el layout(plantilla)
                    include_once("APP/views/layout.php");
                }
            }
        }

        //creamos el metodo que actualiza los datos del usuario en la base de datos
        public function Update(){
            //verificamos si el metodo de envio de datos es POST
            if($_SERVER['REQUEST_METHOD']=='POST'){
                //almacenamos los datos enviados por el formulario en un arreglo
                $datos=array(
                    'id'=>$_POST['id'],
                    'nombre'=>$_POST['nombre'],
                    'appaterno'=>$_POST['apaterno'],
                    'apmaterno'=>$_POST['amaterno'],
                    'usuario'=>$_POST['usuario'],
                    'password'=>$_POST['password'],
                    'sexo'=>$_POST['sexo'],
                    'fchnac'=>$_POST['fchNac']
                );
            }
    }
}
?>