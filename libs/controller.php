<?php

class Controller{
    function __construct(){
        //para que cada vez que se cree un controlador se cree tambien una vista asociada a el
        $this->view = new View();
    }

    function loadmodel($model){
        $url = 'models/'.$model.'model.php';

        if (file_exists($url)){
            require $url;

            $modelName = $model.'Model';
            $this->model = new $modelName();
        }
    }
}
?>