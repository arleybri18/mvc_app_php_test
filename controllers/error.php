<?php

class Errores extends Controller{

    function __construct(){
        // llamar al metodo de la clase padre
        parent::__construct();
        //llamar al metodo del controlador que tiene el objeto view y llamar al metodo render
        $this->view->mensaje = "Existe un error con la solicitud";
        $this->view->render('error/index');
    }
}
?>