<?php
    include_once("APP/models/ProductsModel.php");

    class ProductsController{
        private $model;

        public function index(){
            $this->model = new ProducsModel();
            $vista="APP/views/products/ProducsIndexView.php";
            $datos = $this->model->getAll();
            include_once("APP/views/layout.php");   
        }

        public function CallFormRegister(){
            $vista="APP/views/products/ProductsAddView.php";
            include_once("APP/views/layout.php");
        }

        public function Add(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['precio']) && isset($_POST['variedad'] && isset($_POST['presentacion'])){
                    $datos=array(
                        'Precio'=>$_POST['precio'],
                        'Variedad'=>$_POST['variedad'],
                        'Presentacion'=>$_POST['presentacion']
                    );
                    $this->model->insert($datos);
                    header("Location:http://localhost/catando2/?clase=ProductsController&metodo=index");
                }
           }
        }
    }
?>