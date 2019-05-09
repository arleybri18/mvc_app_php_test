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
    <h1 class="center">Sección de consulta</h1>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Cedula</th>
      <th scope="col">Primer Nombre</th>
      <th scope="col">Segundo Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Dirección</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Teléfono</th>
    </tr>
  </thead>
  <tbody>
<?php 
    include_once 'models/propietario.php';
foreach($this->propietarios as $row)
  {
      $propietario = new Propietario();
      $propietario = $row;
  
  ?>
    <tr>
      <td><?php echo $propietario->cedula;?></td>
      <td><?php echo $propietario->primernombre;?></td>
      <td><?php echo $propietario->segundonombre;?></td>
      <td><?php echo $propietario->apellidos;?></td>
      <td><?php echo $propietario->direccion;?></td>
      <td><?php echo $propietario->ciudad;?></td>
      <td><?php echo $propietario->telefono;?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

    
    </div>

    <?php require 'views/footer.php';?>
</body>
</html>