<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "", "kenia");
$sql = "DELETE FROM tabla1 WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: index.html");
?>