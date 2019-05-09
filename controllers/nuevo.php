<?php

class Nuevo extends Controller{
    function __construct(){
        //llamar al constructor de la clase padre
        parent::__construct();
        //llamar al metodo del controlador que tiene el objeto view y llamar al metodo render
        $this->view->render('nuevo/index');
    }

    function registroProp(){
        $cedula = $_POST['cedula'];
        $primernombre = $_POST['primernombre'];
        $segundonombre = $_POST['segundonombre'];
        $apellidos = $_POST['apellidos'];
        $direccion = $_POST['direccion'];
        $ciudad = $_POST['ciudad'];
        $telefono = $_POST['telefono'];

        $this->model->insert(['cedula' => $cedula, 'primernombre' =>$primernombre, 'segundonombre' =>$segundonombre,
                                'apellidos' => $apellidos, 'direccion' => $direccion, 'ciudad' => $ciudad, 'telefono' => $telefono]);

        

        echo "Alumno creado";
    }

}
?>