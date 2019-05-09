<?php
require_once 'controllers/error.php';
// Esta funcion es la que hara todo el enrutamiento y es llamada desde el index
class App{
    function __construct(){
// en el parametro url esta quedando lo que se digita en la url
// la idea es descomponerla para que podamos descrifrar una url como controlador/metodo
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        // limpiar los / adicionales
        $url = rtrim($url, '/');
        // romper cada que encuente un /
        $url = explode('/', $url);
        //var_dump($url);

        // si no se ingresa ningun controlador en la barra de direccion, carga el main por defecto
        if (empty($url[0])){
            $archivoController = 'controllers/main.php';
            require_once $archivoController;
            $controller = new Main();
            $controller->loadmodel('main');
            return false;
        }
        // creamos la ruta para encontrar el archivo de controlador de acuerdo a la url, ej. controllers/main.php
        $archivoController = 'controllers/'.$url[0].'.php';

        if(file_exists($archivoController)){
            // requerimos el archivo
            require_once $archivoController;
            // creamos un objeto de la clase del controlador
            $controller = new $url[0];
            // llamada al modelo
            $controller->loadmodel($url[0]);

            // validar si existe el metodo en la clase
            if (isset($url[1])){
                // llamar al metodo
                $controller->{$url[1]}();
            }
        }
        else{
            $controller = new Errores();
        }


    }
}

?>