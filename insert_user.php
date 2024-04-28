<?php
include('connection.php');

$con = connection();

$id = null;
$name = $POST['nombre'];
$apellido = $POST['apellido'];
$email = $POST['email'];
$telefono = $POST['telefono'];
$order = $POST['order'];

$sql = "INSERT INTO users VALUES('$id', '$name', '$apellido', '$email', '$telefono', '$order')";
$query = mysqli_query($con,$sql);

if($query){
    Header("Location: productos.php");
}

?>