<?php 
include("../db.php");

$nkl = $conexion -> prepare("SELECT * FROM registro");
$nkl -> execute();
$registro = $nkl -> fetchAll(PDO::FETCH_ASSOC);

// * ELIMINAR DE LA BASE DE DATOS....

if(isset($_GET['id'])) {

$txtid = (isset($_GET['id'])?$_GET['id']:"");

$nkl = $conexion -> prepare("DELETE FROM registro WHERE id=:txtid");
$nkl -> bindParam(":txtid",$txtid);
$nkl -> execute(); 

header("location: tabla.php");
}

?>


<?php include("../template/header.php"); ?>

<div class="contenedor p-3">
<h2 style="color: brown;" class="fw-bold">SYSTEMS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Registro de los cursos:</h2>

<a style="background: brown;" class="btn text-white fw-bold" href="agregar.php">Nuevo Cliente
<img src="../img/user.svg" alt=""></i> 
</a>

<a style="background: navy;" class="btn text-white fw-bold" href="excel.php">Excel
<i class='bx bxs-grid'></i> </a>

<a style="background: yellow;" class="btn text-black fw-bold" href="../PDF/PruebaV.php">PDF
<i class='bx bxs-grid'></i> </a>

<a style="background:red;" class="btn text-white fw-bold" href="../contacto/index.php">Inicio
<i class='bx bxs-grid'></i> </a>

<br>

<br>
</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
      <hr>
  </form>
<br>

<div class="table-responsive">
<table class="table table-bordered table-dark table_id">
  <thead class="table table-dark">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CEDULA</th>
                <th scope="col">CURSO</th>
                <th scope="col">NIVEL</th>
                <th scope="col">FECHA DE INGRESO</th>
                <th scope="col">FECHA DE CULMINAR</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

<?php foreach($registro as $registrar) { ?>

            <tr class="">
                <td scope="row"><?php echo $registrar['id']; ?></td>
                <td><?php echo $registrar['nombre']; ?></td>
                <td><?php echo $registrar['cedula']; ?></td>
                <td><?php echo $registrar['curso']; ?></td>
                <td><?php echo $registrar['nivel']; ?></td>
                <td><?php echo $registrar['fecha']; ?></td>
                <td><?php echo $registrar['rol']; ?></td>
                <td>
                <a href="editar.php?id=<?php echo $registrar['id']; ?>" class="btn btn-danger" role="button"><img src="../img/editar.svg" alt=""></a>

                <a href="javascript:borrar(<?php echo $registrar['id']; ?>);" class="btn btn-warning" role="button"><img src="../img/eliminar.svg" alt=""></a>

                </td>
            </tr>

     <?php } ?>

        </tbody>
    </table>
</div>

<script>

function borrar(id) {
    Swal.fire({
  title: '¿Deseas Borrar el registro?',
  showCancelButton: true,
  confirmButtonText: 'Si, Borrar',
}).then((result) => {
  if (result.isConfirmed) {
  
window.location ="tabla.php?id="+id;

  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})

}

</script>

<?php include("../template/footer.php"); ?>