<?php include("../template/header.php"); ?>

<style>

:root {
  --jumbotron-padding-y: 3rem;
}

.jumbotron {
  padding-top: var(--jumbotron-padding-y);
  padding-bottom: var(--jumbotron-padding-y);
  margin-bottom: 0;
  background-image: linear-gradient(to top, #30cfd0 0%, #330867 100%);
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: calc(var(--jumbotron-padding-y) * 2);
    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
 
}

.jumbotron-heading {
  font-weight: 300;
  font-weight: bold;
  color: crimson;
}


.jumbotron .container {
  max-width: 40rem;
}

.card:hover {
    border: 3px solid whitesmoke;
    cursor: pointer;
    opacity: .8;
}

</style>

    <main role="main">

      <section data-aos="zoom-in" class="jumbotron text-center">
        <div  class="container">
          <h1 class="jumbotron-heading">Portafolio de Registros:</h1>
         <p style="color: white;" class="fw-bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis ratione maxime officiis ut eum a aliquam ipsam ad eaque libero.</p>
          <p>
            <a href="../contacto/tabla.php" class="btn btn-warning my-2 fw-bold">Registrate</a>
            <a href="#" class="btn btn-danger my-2 fw-bold">Contactos</a>
          </p>
        </div>
      </section>

      <hr>

      <div class="album py-5 bg-light">
        <div class="container">

          <div data-aos="zoom-in" class="row">
            <div class="col-md-4">
              <div class="card mb-4">
                <img class="card-img-top" src="../img/progra1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p style="color: brown;" class="card-text fw-bold">Cursos:</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                  <a href="../registro/index.php" class="btn btn-warning fw-bold" role="button">Ver</a>
                  <a href="" class="btn btn-danger fw-bold" role="button">Contacto</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../img/progra2.jpg" alt="Card image cap">
                <div class="card-body">
                  <p style="color: brown;"  class="card-text fw-bold">Cursos:</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../registro/index.php" class="btn btn-warning fw-bold" role="button">Ver</a>
                  <a href="" class="btn btn-danger fw-bold" role="button">Contacto</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../img/progra3.jpg" alt="Card image cap">
                <div class="card-body">
                  <p style="color: brown;"  class="card-text fw-bold">Cursos:</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../registro/index.php" class="btn btn-warning fw-bold" role="button">Ver</a>
                  <a href="" class="btn btn-danger fw-bold" role="button">Contacto</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../img/progra4.jpg" alt="Card image cap">
                <div class="card-body">
                  <p style="color: brown;"  class="card-text fw-bold">Cursos:</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../registro/index.php" class="btn btn-warning fw-bold" role="button">Ver</a>
                  <a href="" class="btn btn-danger fw-bold" role="button">Contacto</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../img/progra5.jpg" alt="Card image cap">
                <div class="card-body">
                  <p style="color: brown;"  class="card-text fw-bold">Cursos:</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../registro/index.php" class="btn btn-warning fw-bold" role="button">Ver</a>
                  <a href="" class="btn btn-danger fw-bold" role="button">Contacto</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="../img/progra6.jpg" alt="Card image cap">
                <div class="card-body">
                  <p style="color: brown;"  class="card-text fw-bold">Cursos:</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="../registro/index.php" class="btn btn-warning fw-bold" role="button">Ver</a>
                  <a href="" class="btn btn-danger fw-bold" role="button">Contacto</a>
                    </div>
                    <small class="text-muted">2024</small>
                  </div>
                </div>
              </div>
            </div>

<footer style="padding: 20px;" class="sticky-footer">
    <div class="container my-auto">
        <div style="color: gray;" class="copyright text-center my-auto">
            <span>Copyright &copy; Derechos Reservados <a href="../../NKL/index.php"><b>"SYSTEMS¡NKL!"</b></span></a>
        </div>
    </div>
</footer>


    </main>





<?php include("../template/footer.php"); ?>