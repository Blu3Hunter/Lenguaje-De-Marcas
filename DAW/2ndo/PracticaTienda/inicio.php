<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "productos";

$con = mysqli_connect($server, $user, $password, $db);
$email = $_GET["email"];

$contrasena = $_GET["contrasena"];

$encriptada = sha1($contrasena);

var_dump('hola'.$encriptada);
if (!$con) {
    echo "No se ha podido realizar la conexión";
} else {
    $sql2 = "SELECT * FROM `usuarios`";
    $consulta = mysqli_query($con, $sql2);
    while ($resultados = $consulta->fetch_assoc()) {
        if ($resultados["contrasena"] == $encriptada && $resultados["email"] == $email) {
            session_start();
            $_SESSION["id"] = $resultados['id'];
            $_SESSION["email"] = $resultados['email'];
            $_SESSION["admin"] = $resultados['admin'];
            header('Location: cuenta.php');
        }
    }
}

?>