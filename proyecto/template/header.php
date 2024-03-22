<?php  

$url_base = "http://localhost/proyecto/";

?>


<!doctype html>
<html lang="en">
    <head>
        <title>SYSTEMS¡NKL!</title>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link rel="shortcut icon" href="../img/icono1.png" type="image/x-icon">
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>

    <body>

    <style>

.navbar-brand:hover {

    color: crimson;
}

.nav-link {
    color: whitesmoke;
    font-weight: bold;
}

.nav-link:hover {
    color: crimson;
}

    </style>

     
    <nav style="background: navy;" class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="<?php echo $url_base; ?>">SYSTEMS¡NKL!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
          <a class="nav-link" aria-current="page" href="<?php echo $url_base; ?>contacto/tabla.php">Tabla de Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url_base; ?>portafolio">Portafolio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Siguiente tablas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a style="color: brown;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>registro">Registro de los cursos</a></li>

            <li><a style="color: brown;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>nosotros">Sobre nosotros</a></li>

            <li><hr class="dropdown-divider"></li>

            <li><a style="color: brown;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>tabla">Acerca de</a></li>

            <li><a style="color: brown;" class="dropdown-item fw-bold" href="<?php echo $url_base; ?>contactos">Contactos </a></li>
          </ul>
        </li>
      </ul>
   <h6 class="me-2 text-white fw-bold">hora:</h6>   
<center> 
         <div class="reloj me-3">
          <h6 style="color: whitesmoke;" class="fw-bold"><span id="tiempo">00 : 00 : 00</span></h6>
            </div>
</center>

<form class="d-flex">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscador">
      <a href="../create/index.php" class="btn btn-danger fw-bold" role="button">Salir</a>
</form>

     <!-- <form class="d-flex">
      <a href="../create/index.php" class="btn btn-danger fw-bold" role="button">Cerrar sesion</a>
      </form>-->
    </div>
  </div>
</nav>

<main class="contenedor">