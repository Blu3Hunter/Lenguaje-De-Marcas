<?php


$server = "localhost";
$user = "root";
$password = "";
$db = "productos";
$con = mysqli_connect($server, $user, $password, $db);

$getID = $_GET["id"];

if (!$con) {
    echo "No se ha podido realizar la conexión";
} else {
    mysqli_set_charset($con, "utf8");
    $sql2 = "DELETE FROM `producto` WHERE id=$getID";
    // echo $sql2;die;
    $consulta = mysqli_query($con, $sql2);
}
header('Location: listar.php');
exit;