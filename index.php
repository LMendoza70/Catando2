<?php
//documento para generar el enrutador de la practica con el patron de diseño MVC
//defino la ruta de la constante de la carpeta de los controladores
define('CONTROLADOR', 'APP/controller/');

//verificamos si la variable clase esta definida en la url de la peticion al controlador 
//y la alamacenamos en la variable $control 
$control=isset($_GET['clase']) ? $_GET['clase'] : '';
//contruimos la ruta del controlador
$file=CONTROLADOR.$control.'.php';
//virificamos si el archivo existe y si la variable control esta definida
if(!empty($control) && file_exists($file)){
    //se requiere el archivo del controlador creado
    require_once $file;
    //instanciamos la clase del controlador
    $obejeto=new $control();
    //verificamos si la variable metodo esta definida en la url de la peticion al controlador 
    //y la alamacenamos en la variable $metodo
    $metodo=isset($_GET['metodo']) ? $_GET['metodo'] : '';
    //verificamos si el metodo esta definido en la clase del controlador y si la variable metodo esta definida
    if(method_exists($obejeto, $metodo) && !empty($metodo)){
        //llamamos al metodo de la clase del controlador
        $obejeto->$metodo();
    }
}else{
    //si la variable control no esta definida o el archivo no existe se redirecciona al controlador por defecto
    //se incluye el archivo del controlador por defecto
    require_once ("APP/controller/index.php");
    //se instancia la clase del controlador por defecto
    $index=new index();
    //se llama al metodo index de la clase del controlador por defecto
    $index->index();
}


?>
