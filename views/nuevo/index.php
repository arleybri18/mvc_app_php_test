<?php require 'views/header.php';?>

<div id="main">


            <?php 
            if ($this->flagmessage)
            {
            echo "
            <div class=\"col-sm-12 col-md-12\">
            <div class=\"alert alert-success\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">
                    ×</button>
               <span class=\"glyphicon glyphicon-ok\"></span> <strong>OK</strong>
                <hr class=\"message-inner-separator\">
                <p>{$this->mensaje}</p>
            </div>
        </div>";
             } ?>
    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">Crear Nuevo Propietario</h4>
        </div>
        <div class="card-body">
            <form id="formprop" action="<?php echo constant('URL');?>nuevo/registroProp" method="POST">
                <div class="form-group row">

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="identification" placeholder="Cedula" name="cedula"
                            required>
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
                        <input type="text" class="form-control" id="lastname" placeholder="Apellidos" name="apellidos"
                            required>
                    </div>

                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="address" placeholder="Dirección" name="direccion"
                            required>
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
                        <input type="text" class="form-control" id="telephone" placeholder="Teléfono" name="telefono"
                            required>
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
