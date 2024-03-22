<?php  
include("../db.php");

$stm = $conexion -> prepare("SELECT * FROM contacto");
$stm -> execute();
$contacto = $stm -> fetchAll(PDO::FETCH_ASSOC);

// ! ELIMINAR DE LA TABLA Y BASE DE DATOS....


if(isset($_GET['id'])) {

    $txtid = (isset($_GET['id'])?$_GET['id']:"");
    
    $stm = $conexion -> prepare("DELETE FROM contacto WHERE id=:txtid");
    $stm -> bindParam(":txtid",$txtid);
    $stm -> execute();
    
    header("location:tabla.php");
    
    }

?>

<?php include("../template/header.php"); ?>

<div class="contenedor p-3">
<h2 style="color: brown;" class="fw-bold">SYSTEMS¡NKL!</h2>
<h2 style="color: brown;" class="fw-bold">Tabla de Registro:</h2>

<a style="background: brown;" class="btn text-white fw-bold" href="agregar.php">Nuevo Cliente
<img src="../img/user.svg" alt=""></i> 
</a>

<a style="background: navy;" class="btn text-white fw-bold" href="execel.php">Excel
<i class='bx bxs-grid'></i> </a>

<a style="background: yellow;" class="btn text-black fw-bold" href="../PDF/PruebaV.php">PDF
<i class='bx bxs-grid'></i> </a>

<a style="background:red;" class="btn text-white fw-bold" href="index.php">Inicio
<i class='bx bxs-grid'></i> </a>

<br>

<br>
<!--</form>
      <div class="container-fluid">
  <form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
      <hr>
  </form>-->
<br>

<div class="table-responsive">
<table class="table table-bordered table-dark table_id">
  <thead class="table table-dark">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CEDULA</th>
                <th scope="col">CORREO</th>
                <th scope="col">TELEFONO</th>
                <th scope="col">DIRECCION</th>
                <th scope="col">FECHA</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($contacto as $contactos) { ?>

            <tr class="">
                <td scope="row"><?php echo $contactos['id']; ?></td>
                <td><?php echo $contactos['nombre']; ?></td>
                <td><?php echo $contactos['cedula']; ?></td>
                <td><?php echo $contactos['correo']; ?></td>
                <td><?php echo $contactos['telefono']; ?></td>
                <td><?php echo $contactos['direccion']; ?></td>
                <td><?php echo $contactos['fecha']; ?></td>

                <td>
                   <a href="editar.php?id=<?php echo $contactos['id']; ?>" class="btn btn-warning" role="button"><img src="../img/editar.svg" alt=""></a> 

                   <a href="javascript:borrar(<?php echo $contactos['id']; ?>);" class="btn btn-danger" role="button"><img src="../img/eliminar.svg" alt=""></a>
               </td>
            </tr>

      <?php } ?>

        </tbody>
    </table>
</div>

<footer style="padding: 20px;" class="sticky-footer">
    <div class="container my-auto">
        <div style="color: gray;" class="copyright text-center my-auto">
            <span>Copyright &copy; Derechos Reservados <a href="../../NKL/index.php"><b>"SYSTEMS¡NKL!"</b></span></a>
        </div>
    </div>
</footer>


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