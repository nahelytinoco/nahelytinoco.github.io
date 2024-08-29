<?php
$id = $_GET['id'];
$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
$telefono = $_GET['telefono'];
$producto = $_GET['producto'];
$cantidad = $_GET['cantidad'];
$preciounitario = $_GET['preciounitario'];
$cnx = mysqli_connect("localhost", "root", "", "kenia");
$sql = "UPDATE tabla1 set nombres='$nombres', apellidos='$apellidos', telefono='$telefono', producto='$producto', cantidad='$cantidad', preciounitario='$preciounitario' WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: Editar.php");
?>