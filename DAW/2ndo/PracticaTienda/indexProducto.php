<?php

session_start();
include "conn.php";
$_SESSION["admin"];

if($_SESSION["admin"] == 1){ ?>
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- CSS only -->
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
  
    <title>Registro de productos</title>
  </head>
  
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-danger py-5">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fs-5 text-white" aria-current="page" href="index.php">Registrar producto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-5" href="listar.php">Listar producto</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link fs-5" aria-current="page" href="cuenta.php">Cuenta</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class="text-center mt-5">
      <span class="text-white fs-1">¡Registra un producto! :)</span>
    </div>
  
    <div class="container bg-white mt-5 rounded-5 p-5 mb-5">
      <form action="registarProducto.php" method="get">
        <div class="mb-3">
          <label for="productName" class="form-label">Nombre del producto</label>
          <input type="text" class="form-control" name="productName" placeholder="Minecraft" />
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descripcion</label>
          <input type="text" class="form-control" name="description" placeholder="Juego de supervivencia" />
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Cantidad</label>
          <input type="number" class="form-control" name="quantity" placeholder="0" />
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Precio</label>
          <input type="number" class="form-control" name="price" placeholder="20" />
        </div>
        <button type="submit" class="btn btn-primary">
          Registrar producto
        </button>
        <div class="text-center mx-auto">
          <img src="assets/bob_esponja.gif" alt="" />
        </div>
      </form>
    </div>
  </body>
  
  </html>
  <?php
} else {
  header('Location: listar.php');
}
?>

