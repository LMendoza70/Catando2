<?php
    include_once("APP/models/VarietalsModel.php");

    class VarietalsController{
        private $model;

        public function index(){
            $this->model = new VarietalsModel();
            $vista="APP/views/varietals/VarietalsIndexView.php";
            $datos = $this->model->getAll();
            include_once("APP/views/layout.php");   
        }

        public function CallFormRegister(){
            $vista="APP/views/varietals/VarietalsAddView.php";
            include_once("APP/views/layout.php");
        }

        public function Add(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
               if(isset($_POST['nombre']) && isset($_POST['desc']) && isset($_POST['variedad']) 
               && isset($_POST['puntos']) && isset($_POST['productor']) && isset($_POST['finca'])
               && isset($_POST['altura']) && isset($_POST['proceso']) && isset($_POST['notas'])){
                   $datos=array(
                       'Nombre'=>$_POST['nombre'],
                       'Descripcion'=>$_POST['desc'],
                       'Variedad'=>$_POST['variedad'],
                       'Puntos'=>$_POST['puntos'],
                       'Productor'=>$_POST['productor'],
                       'Finca'=>$_POST['finca'],
                       'Altura'=>$_POST['altura'],
                       'Proceso'=>$_POST['proceso'],
                       'Notas'=>$_POST['notas']
                   );
                    $this->model = new VarietalsModel();
                   $this->model->insert($datos);
                   header("Location:http://localhost/catando2/?clase=VarietalsController&metodo=index");        
            }
        }
    }
}
?>