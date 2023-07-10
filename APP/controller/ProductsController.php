<?php
    include_once("APP/models/ProductsModel.php");
    include_once("APP/models/VarietalsModel.php");
    include_once("APP/models/PresentacionModel.php");

    class ProductsController{
        private $model;

        public function index(){
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                $this->model = new ProducsModel();
                $vista="APP/views/products/ProducsIndexView.php";
                $datos = $this->model->getAll();
                include_once("APP/views/layoutLog.php");   
            }else{
                $vista="APP/views/index.php";
                include_once("APP/views/layout.php");
            }
        }

        public function CallFormRegister(){
            session_start();
            if(isset($_SESSION['logedin']) && $_SESSION['logedin']==true){
                $varietalsModel = new VarietalsModel();
                $varietals = $varietalsModel->getAll();
                $presentationsModel = new PresentacionModel();
                $presentations = $presentationsModel->getAll();
                $vista="APP/views/products/ProductsAddView.php";
                include_once("APP/views/layoutLog.php");
            }else{
                $vista="APP/views/index.php";
                include_once("APP/views/layout.php");
            }
        }

        public function Add(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['precio']) && isset($_POST['variedad']) && isset($_POST['presentacion'])){
                    $datos=array(
                        'precio'=>$_POST['precio'],
                        'variedad'=>$_POST['variedad'],
                        'presentacion'=>$_POST['presentacion']
                    );
                    $this->model = new ProducsModel();
                    $this->model->insert($datos);
                    header("Location:http://localhost/catando2/?clase=ProductsController&metodo=index");
                }
           }
        }
    }
