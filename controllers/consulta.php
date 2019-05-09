<?php

class Consulta extends Controller{
    function __construct(){
        //llamar al constructor de la clase padre
        parent::__construct();
        $this->view->propietarios = [];
    }
    
    function render(){

        //cargar datos de propietario
        $propietarios = $this->model->get();
        $this->view->propietarios = $propietarios;
        //llamar al metodo del controlador que tiene el objeto view y llamar al metodo render
        $this->view->render('consulta/index');
    }

}
?>