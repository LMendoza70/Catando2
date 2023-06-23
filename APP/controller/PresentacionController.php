<?php
    include_once("APP/models/PresentacionModel.php");

    class PresentacionController{
        private $presentacionModel;

        public function index(){
            $this->presentacionModel = new PresentacionModel();
            $vista="APP/views/PresentacionIndexView.php";
            $datos = $this->presentacionModel->getAll();
            include_once("APP/views/layout.php");   
        }


        
    }
?>