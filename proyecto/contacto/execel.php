<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM contacto");
$stm -> execute();
$contacto = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cedula</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($contacto as $contactos){ ?>
    <tr>
    <th scope="row"><?php echo $contactos['id']; ?></th>
      <td><?php echo $contactos['nombre']; ?></td>
      <td><?php echo $contactos['cedula']; ?></td>
      <td><?php echo $contactos['correo']; ?></td>
      <td><?php echo $contactos['telefono']; ?></td>
      <td><?php echo $contactos['direccion']; ?></td>
      <td><?php echo $contactos['fecha']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>