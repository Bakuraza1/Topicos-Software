<?php
include "Connection.php";

$name = $_POST["name"];
$user = $_POST["username"];
$sql = "INSERT INTO usuario(nombre, usuario) VALUES ('$name', '$user')";
$query = mysqli_query($conex, $sql);

?>