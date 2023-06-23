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
		//definimos la vista que sera llamada por el controlador en el layout(plantilla)
		$vista="APP/views/index.php";
		//incluimos el layout(plantilla)
        include_once("APP/views/layout.php");
	}	
}
?>