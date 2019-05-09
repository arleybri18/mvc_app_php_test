<?php
class Ayuda extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        //llamar al metodo del controlador que tiene el objeto view y llamar al metodo render
        $this->view->render('ayuda/index');
    }
}
?>