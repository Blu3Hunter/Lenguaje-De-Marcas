<?php

session_start();
include "conn.php";
$_SESSION["admin"];


if ($_SESSION["admin"] == 1) { ?>
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
              <a class="nav-link fs-5 " aria-current="page" href="indexProducto.php">Registrar producto</a>
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
            <a class="nav-link fs-5" href="listar.php">Listar producto</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fs-5 active text-white" aria-current="page" href="cuenta.php">Cuenta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container bg-white mt-5 rounded-5 p-5 mb-5">
    <div class="d-flex flex-column mx-auto">
      <img class="mx-auto rounded-circle" src="https://avatars.githubusercontent.com/u/58775176?v=4">
      <hr>
      <?php

      if (!$con) {
        echo "No se ha podido realizar la conexión";
      } else {
        mysqli_set_charset($con, "utf8");
        $sql2 = "SELECT * FROM `usuarios`";
        $consulta = mysqli_query($con, $sql2);
        $fila = $consulta->fetch_assoc();

        echo "<span class='p-2'>Email: " . $_SESSION["email"] . "</span>";
        echo "<span class='p-2'>Admin: " . $_SESSION["admin"] . "</span>";
        
      }
      ?>
    </div>
    <hr>
    <form action="cerrarSesion.php">
      <button type="submit" class="btn btn-danger">Cerrar sesión</button>
    </form>
  </div>
</body>

</html>