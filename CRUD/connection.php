<?php

function connection(){
    $host = "localhost:3306";
    $user = "root";
    $pass = "root";
    $bd = "portfolio_projects";

    $connect = mysqli_connect($host, $user, $pass, $bd); 

    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $connect;
}
?>
