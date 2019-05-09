<?php

class NuevoModel extends Model {
    public
    function __construct() {
        parent::__construct();

    }

    public
    function insert($datos) {
        //insertar en BD
        try {
            $query = $this->db->connect()->prepare('INSERT INTO PROPIETARIOS (CEDULA, PRIMERNOMBRE, SEGUNDONOMBRE, APELLIDOS, DIRECCION, CIUDAD, TELEFONO) VALUES (:cedula, :primernombre, :segundonombre, :apellidos, :direccion, :ciudad, :telefono)');
            $query->execute(['cedula' => $datos['cedula'], 'primernombre' => $datos['primernombre'], 'segundonombre' => $datos['segundonombre'], 'apellidos' => $datos['apellidos'],
                    'direccion' => $datos['direccion'], 'ciudad' => $datos['ciudad'], 'telefono' => $datos['telefono']
                ]);
        }catch (PDOException $e){
           // echo "Error: ".$e->getMessage();
        }



        }
    }

?>