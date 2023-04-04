<?php 
    include("conexion.php");
    $id= $_GET["id"]; 
    $query = "DELETE FROM contenido where id = $id";
    mysqli_query($link, $query);
    header('Location: mostrarDatos.php');
?>