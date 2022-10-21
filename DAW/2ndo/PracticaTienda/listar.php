<?php

session_start();

$_SESSION["admin"];


if ($_SESSION["admin"] == 1) { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS only -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <title>Listado de productos</title>
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
              <a class="nav-link fs-5" href="index.php">Registrar producto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </body>

  </html>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listar producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />
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
            <a class="nav-link fs-5 text-white" href="listar.php">Listar producto</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fs-5 " aria-current="page" href="cuenta.php">Cuenta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="text-center mt-5">
    <span class="text-white fs-1">¡Lista de productos! :)</span>
  </div>

  <div class="container bg-white mt-5 rounded-5 p-5 mb-5">


    <form method="get" action="filtrado.php">

      <div class="row">
        <div class="col-6">
          <input type="text" class="form-control" name="filtro">
        </div>
        <div class="col-6">
          <select class="form-select" aria-label=".form-select-sm example" name="select">
            <option value="nombre">Nombre</option>
            <option value="precio">Precio</option>
            <option value="cantidad">Cantidad</option>
          </select>
        </div>
      </div>
    </form>



    <table class="table">
      <?php

      $server = "localhost";
      $user = "root";
      $password = "";
      $db = "productos";

      $con = mysqli_connect($server, $user, $password, $db);

      if (!$con) {
        echo "No se ha podido realizar la conexión";
      } else {
        mysqli_set_charset($con, "utf8");
        $sql2 = "SELECT * FROM `producto`";
        $consulta = mysqli_query($con, $sql2);
        while ($fila = $consulta->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $fila["nombre"] . "</td>";
          echo "<td>" . $fila["descripcion"] . "</td>";
          echo "<td>" . $fila["cantidad"] . "</td>";
          echo "<td>" . $fila["precio"] . "</td>";
          if($_SESSION["admin"] == 1){
            echo "<td><form action='borrar.php?id=" . $fila['id'] . "' method='post'>
            <button class='btn btn-danger'><i class='bi bi-trash-fill'></i></button></form></td>";
            echo "</tr>";

          }
        }
      }
      ?>

      <thead class="mt-3">
        <tr>
          <th scope="col fw-bold">Nombre</th>
          <th scope="col fw-bold">Descripción</th>
          <th scope="col fw-bold">Cantidad</th>
          <th scope="col fw-bold">Precio</th>
          <?php
          if($_SESSION["admin"] == 1){
            
            echo "<th scope='col fw-blod'>Acción</th>";

          }
            ?>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>


  </div>

</body>

</html>