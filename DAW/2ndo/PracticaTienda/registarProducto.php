<?php 

$productName = $_GET['productName'];
$description = $_GET['description'];
$quantity = $_GET['quantity'];
$price = $_GET['price'];

$server = "localhost";
$user = "root";
$password = "";
$db = "productos";

$con=mysqli_connect($server,$user,$password,$db);

if(!$con){
    echo "No se ha podido realizar la conexión";
} else {
    mysqli_set_charset($con,"utf8");

    $sql="INSERT INTO `producto`(`id`, `nombre`, `descripcion`, `cantidad`, `precio`) VALUES
    (NULL,'$productName','$description','$quantity','$price')";

    $query=mysqli_query($con,$sql);
}

header('Location: index.html');
exit;
?>