<?php
    //incluimos el modelo de la clase User para poder instanciarlo y usar sus funciones
    include_once 'APP/models/UserModel.php';
    //creamos la clase UserController 
    class UserController{
        //definimos el atributo modelo para almacenar la instancia del modelo User
        private $modelo;
        //creamos el metodo constructor de la clase UserController para instanciar el modelo User
        public function __construct(){
            //instanciamos el modelo User
            $this->modelo=new UserModel();
        }
        
        //creamos el metodo index para cargar la vista por defecto del controlador
        public function index(){
            //definimos la vista que sera llamada por el controlador en el layout(plantilla)
            $vista="APP/views/userIndexView.php";
            //traemos todos los usuarios de la base de datos
            //inicializamos el modelo User para poder usar sus funciones
            $this->modelo=new UserModel();
            $datos=$this->modelo->getAll();
            //incluimos el layout(plantilla)
            include_once("APP/views/layout.php");
        }

        //creamos el metodo para llamar el formulario de registro de usuario
        public function CallFormRegister(){
            //definimos la vista que sera llamada por el controlador en el layout(plantilla)
            $vista="APP/views/userAddView.php";
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
                        'Nombre'=>$_POST['nombre'],
                        'ApPaterno'=>$_POST['apaterno'],
                        'ApMaterno'=>$_POST['amaterno'],
                        'Usuario'=>$_POST['usuario'],
                        'Password'=>$_POST['password'],
                        'Sexo'=>$_POST['sexo'],
                        'FchNacimiento'=>$_POST['fchNac']
                    );
                    //llamamos al metodo del modelo que agrega al usuario a la base de datos
                    $this->modelo->insert($datos);
                    //redireccionamos al controlador por defecto
                    header("Location:http://localhost/catando2/?clase=UserController&metodo=index");
                }
        }
    }
}
?>