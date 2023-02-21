<?php

$host="localhost";
$dbname = "tarea1";
$username = "root";
$password = "";

$conex = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()!=0){
    echo "<h1> There was an error <h1>";
}else{
    echo "<h1> Connection ok! <h1>";
}
?>