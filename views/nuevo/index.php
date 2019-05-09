<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php require 'views/header.php';?>

    <div id="main">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">Crear Nuevo Propietario</h4>
                        </div>
                        <div class="card-body">
        <form id="formprop" action="<?php echo constant('URL');?>nuevo/registroProp" method="POST">
            <div class="form-group row">

                               <div class="col-sm-12">
                    <input type="text" class="form-control" id="identification" placeholder="Cedula" name="cedula" required>
                </div>
                
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="firstname" placeholder="Primer Nombre"
                        name="primernombre" required>
                </div>
             
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="secondname" placeholder="Segundo Nombre"
                        name="segundonombre" required>
                </div>
             
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="lastname" placeholder="Apellidos" name="apellidos" required>
                </div>
                
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="address" placeholder="Dirección" name="direccion" required>
                </div>
              
                <div class="col-sm-12">
                    <select class="custom-select" name="ciudad" form="formprop" required>
                        <option value="1">Bogotá</option>
                        <option value="2">Medellín</option>
                        <option value="3">Cali</option>
                        <option value="4">Cartagena</option>
                    </select>
                </div>

             
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="telephone" placeholder="Teléfono" name="telefono" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
        </div>
        </div>
    </div>
    <?php require 'views/footer.php';?>
</body>

</html>