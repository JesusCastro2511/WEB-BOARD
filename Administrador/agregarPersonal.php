<?php
session_start();
if (!isset($_SESSION['auttentificado'])) {
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/agregarPersonal.css">
 <title>Usuarios</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">WebBoard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse p-2" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="proyectos.php">Proyectos</a>
        <a class="nav-item nav-link" href="generarProyecto.php">Generar Proyecto</a>
      <a class="nav-item nav-link active" href="agregarPersonal.php">Agregar Personal<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="personal.php">Personal</a>

    </div>
  </div>
</nav>
      <div class="container-fluid">
     <div class="row justify-content-center">
      <div class="col-8 col-sm-6 col-md-4">
       <form class="form-container">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre:</label>
    <input type="Nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Puesto:</label>
    <input type="Puesto" class="form-control" id="puesto" placeholder="">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Correo Electronico:</label>
    <input type="Correo Electronico" class="form-control" id="correo" placeholder="">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Numero De Telefono:</label>
    <input type="Numero De Telefono" class="form-control" id="telefono" placeholder="">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Usuario:</label>
    <input type="Usuario" class="form-control" id="usuario" placeholder="">
  </div>
     <div class="form-group">
    <label for="exampleInputPassword1">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
  </div>

  <button type="submit" class="btn btn-primary btn-block ">Ingresar</button>
</form>

     </div>
        </div>
      </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>