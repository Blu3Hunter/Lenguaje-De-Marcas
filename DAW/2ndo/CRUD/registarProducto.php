<?php
session_start();
include "conn.php";
$_SESSION["id"];
$_SESSION["email"];
$_SESSION["admin"];


$productName = $_GET['productName'];
$description = $_GET['description'];
$quantity = $_GET['quantity'];
$price = $_GET['price'];



if (!$con) {
    echo "No se ha podido realizar la conexión";
} else {
    mysqli_set_charset($con, "utf8");

    $sql = "INSERT INTO `producto`(`id`, `nombre`, `descripcion`, `cantidad`, `precio`) VALUES
        (NULL,'$productName','$description','$quantity','$price')";

    $query = mysqli_query($con, $sql);
}

header('Location: listar.php');
exit;
