<?php

class Main extends Controller{
    function __construct(){
        //llamar al constructor de la clase padre
        parent::__construct();
        //llamar al metodo del controlador que tiene el objeto view y llamar al metodo render
        $this->view->render('main/index');
    }

    function saludo(){


    }

}
?>