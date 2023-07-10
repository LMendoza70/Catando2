<?php
//documento para generar el controlador por defecto de la practica con el patron de diseño MVC
//creamos la clase index que sera la clase por defecto
class index
{
	//definimos el atributo vista para almacenar la vista que sera llamada por el controlador en el layout(plantilla)
	private $vista;
	//creamos el metodo index para cargar la vista por defecto del controlador
	public function index()
	{
		//verificamos si el usuario esta logueado para llamar al layout correspondiente
		session_start();
		if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
			//definimos la vista que sera llamada por el controlador en el layout(plantilla)
			$vista = "APP/views/index.php";
			//incluimos el layout(plantilla)
			include_once("APP/views/layoutLog.php");
		} else {
			//definimos la vista que sera llamada por el controlador en el layout(plantilla)
			$vista = "APP/views/index.php";
			//incluimos el layout(plantilla)
			include_once("APP/views/layout.php");
		}
	}

	public function CallFormLogin()
	{
		//definimos la vista que sera llamada por el controlador en el layout(plantilla)
		$vista = "APP/views/Users/userLoginView.php";
		//incluimos el layout(plantilla)
		include_once("APP/views/layout.php");
	}
	public function indexlog()
	{
		//definimos la vista que sera llamada por el controlador en el layout(plantilla)
		$vista = "APP/views/index.php";
		//verificamos si el usuario esta logueado
		session_start();
		if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
			//incluimos el layout(plantilla)
			include_once("APP/views/layoutLog.php");
		} else {
			//incluimos el layout(plantilla)
			include_once("APP/views/layout.php");
		}
	}
}
