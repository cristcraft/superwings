<?php
    $hostname= "localhost";
    $username= "id14801221_superwings1";
    $password = "Alejandro06*"; 
    $database= "id14801221_superwings";
    $mysqli= new mysqli ($hostname, $username, $password, $database);
    
    if ($mysqli -> connect_errno)
    {
        die("falló la conexion". mysqli_connect_errno());
    }

?>

    <!-- $hostname= "localhost";
    $username= "root";
    $password = ""; 
    $database= "superwings";
    $mysqli= new mysqli ($hostname, $username, $password, $database);

    if ($mysqli -> connect_errno)
    {
        die("falló la conexion". mysqli_connect_errno());
    } -->

