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
        <title>Filtrado</title>
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
                            <a class="nav-link fs-5 " aria-current="page" href="index.php">Registrar producto</a>
                        </li>
                    </ul>
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
        <div class="text-center mt-5">
            <span class="text-white fs-1">¡Filtrado de productos! :)</span>
        </div>

        <div class="container bg-white mt-5 rounded-5 p-5 mb-5">
            <form method="get">

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

                $select = $_GET["select"];
                $filtro = $_GET["filtro"];
                try {
                    if (!$con) {
                        echo "No se ha podido realizar la conexión";
                    } else {
                        mysqli_set_charset($con, "utf8");
                        $sql2 = "SELECT * FROM `producto` WHERE $select LIKE '$filtro%'";
                        $consulta = mysqli_query($con, $sql2);
                        while ($fila = $consulta->fetch_assoc()) {
                            echo "<tr>";
                            if (str_starts_with($fila[$select], $filtro)) {

                                echo "<td>" . $fila["nombre"] . "</td>";
                                echo "<td>" . $fila["descripcion"] . "</td>";
                                echo "<td>" . $fila["cantidad"] . "</td>";
                                echo "<td>" . $fila["precio"] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                } catch (mysqli_sql_exception $e) {
                    var_dump($e);
                    exit;
                }


                ?>

                <thead class="mt-3">
                    <tr>
                        <th scope="col fw-bold">Nombre</th>
                        <th scope="col fw-bold">Descripción</th>
                        <th scope="col fw-bold">Cantidad</th>
                        <th scope="col fw-bold">Precio</th>

                    </tr>
                </thead>
                <tbody>
                </tbody>

            </table>


        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>

    </html>
<?php

} else { ?>
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

        <div class="text-center mt-5">
            <span class="text-white fs-1">¡Filtrado de productos! :)</span>
        </div>

        <div class="container bg-white mt-5 rounded-5 p-5 mb-5">
            <form method="get">

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
                try {
                    if (!$con) {
                        echo "No se ha podido realizar la conexión";
                    } else {
                        mysqli_set_charset($con, "utf8");
                        $sql2 = "SELECT * FROM `producto` WHERE $select LIKE '$filtro%'";
                        $consulta = mysqli_query($con, $sql2);
                        while ($fila = $consulta->fetch_assoc()) {
                            echo "<tr>";
                            if (str_starts_with($fila[$select], $filtro)) {

                                echo "<td>" . $fila["nombre"] . "</td>";
                                echo "<td>" . $fila["descripcion"] . "</td>";
                                echo "<td>" . $fila["cantidad"] . "</td>";
                                echo "<td>" . $fila["precio"] . "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                } catch (mysqli_sql_exception $e) {
                    var_dump($e);
                    exit;
                }


                ?>

                <thead class="mt-3">
                    <tr>
                        <th scope="col fw-bold">Nombre</th>
                        <th scope="col fw-bold">Descripción</th>
                        <th scope="col fw-bold">Cantidad</th>
                        <th scope="col fw-bold">Precio</th>

                    </tr>
                </thead>
                <tbody>
                </tbody>

            </table>


        </div>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>

    </html>
<?php
} ?>