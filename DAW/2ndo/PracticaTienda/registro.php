<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "productos";

$con = mysqli_connect($server, $user, $password, $db);

$nombreUsuario = $_GET["nombre"];
$email = $_GET["email"];

$contrasena = $_GET["contrasena"];
$repetirContrasena = $_GET["repetirContrasena"];

$encriptada = sha1($contrasena);


if (!$con) {
  echo "No se ha podido realizar la conexión";
} else {
  mysqli_set_charset($con, "utf8");

  $sql = "INSERT INTO usuarios(nombre, email, contrasena) VALUES
      ('$nombreUsuario','$email','$encriptada')";

  $query = mysqli_query($con, $sql);
}
header('Location: iniciarSesion.php');
?>
