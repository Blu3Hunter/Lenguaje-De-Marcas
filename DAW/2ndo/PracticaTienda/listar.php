<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listar producto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
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
            <a class="nav-link fs-5  " aria-current="page" href="index.html">Registrar producto</a>
          </li>
          <li class="nav-item fs-5">
            <a class="nav-link active text-white" href="listar.html">Listar producto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="text-center mt-5">
    <span class="text-white fs-1">¡Lista de productos! :)</span>
  </div>

  <div class="container bg-white mt-5 rounded-5 p-5 mb-5">

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
          echo "<td>" . $fila["id"] . "</td>";
          echo "<td>" . $fila["nombre"] . "</td>";
          echo "<td>" . $fila["descripcion"] . "</td>";
          echo "<td>" . $fila["cantidad"] . "</td>";
          echo "<td>" . $fila["precio"] . "</td>";
          echo "</tr>";
        }
      }
      
      ?>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripción</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Precio</th>
        </tr>
      </thead>
      <tbody>
      </tbody>


    </table>


  </div>
</body>

</html>