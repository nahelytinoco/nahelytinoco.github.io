<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$preciounitario = $_POST['preciounitario'];
$cnx = mysqli_connect("localhost", "root", "", "kenia");
$sql = "INSERT INTO tabla1(nombres, apellidos, telefono, producto, cantidad, preciounitario) VALUES('$nombres', '$apellidos', '$telefono', '$producto', '$cantidad','$preciounitario')";
$rta = mysqli_query($cnx, $sql);
header("Location: Agregar.php");
?>