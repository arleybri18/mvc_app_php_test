<?php
include_once 'models/propietario.php';

class ConsultaModel extends Model {
    public
    function __construct() {
        parent::__construct();

    }

    public
    function get() {
        
        $items = [];
        try {
            $query = $this->db->connect()->query("SELECT * FROM PROPIETARIOS");

            while($row = $query->fetch()){
                $item = new Propietario();

                $item->cedula = $row['cedula'];
                $item->primernombre = $row['primernombre'];
                $item->segundonombre = $row['segundonombre'];
                $item->apellidos = $row['apellidos'];
                $item->direccion = $row['direccion'];
                $item->ciudad = $row['ciudad'];
                $item->telefono = $row['telefono'];

                array_push($items, $item);
            }
            return $items;
        }catch (PDOException $e){
           return [];
        }



        }
    }

?>