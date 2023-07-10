<?php
include_once("APP/models/PresentacionModel.php");

class PresentsController
{
    private $model;

    public function index()
    {
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = "APP/views/presents/PresentsIndexView.php";
            $this->model = new PresentacionModel();
            $datos = $this->model->getAll();
            include_once("APP/views/layoutLog.php");
        } else {
            $vista = "APP/views/index.php";
            include_once("APP/views/layout.php");
        }
    }

    public function CallFormRegister()
    {
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            $vista = "APP/views/presents/PresentsAddView.php";
            include_once("APP/views/layoutLog.php");
        } else {
            $vista = "APP/views/index.php";
            include_once("APP/views/layout.php");
        }
    }

    public function Add()
    {
        $this->model = new PresentacionModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['desc']) && isset($_POST['gramos'])) {
                $datos = array(
                    'descripcion' => $_POST['desc'],
                    'gramos' => $_POST['gramos']
                );
                $this->model->insert($datos);
                header("Location:http://localhost/catando2/?clase=PresentsController&metodo=index");
            }
        }
    }
}
