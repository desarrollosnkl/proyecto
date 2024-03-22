<?php

require_once ("../db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");

$stm = $conexion -> prepare("SELECT * FROM registro");
$stm -> execute();
$registro = $stm -> fetchAll(PDO::FETCH_ASSOC);


?>
<div class="table-responsive">
<table class="table table-dark">
  <thead">
    <tr>
    <th scope="col">N°</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CEDULA</th>
                <th scope="col">CURSO</th>
                <th scope="col">NIVEL</th>
                <th scope="col">FECHA DE INGRESO</th>
                <th scope="col">FECHA DE CULMINAR</th>
    </tr>
  </thead>
  <tbody>


  <?php foreach($registro as $registrar){ ?>
    <tr>
    <td scope="row"><?php echo $registrar['id']; ?></td>
                <td><?php echo $registrar['nombre']; ?></td>
                <td><?php echo $registrar['cedula']; ?></td>
                <td><?php echo $registrar['curso']; ?></td>
                <td><?php echo $registrar['nivel']; ?></td>
                <td><?php echo $registrar['fecha']; ?></td>
                <td><?php echo $registrar['rol']; ?></td>
    </tr>
   
<?php } ?>

  </tbody>
</table>
</div>