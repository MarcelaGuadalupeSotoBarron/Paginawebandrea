<?php
$server = "localhost";
$usuario = "root";
$pw = "12345678";
$bd = "examen";
$link = mysqli_connect($server,$usuario,$pw,$bd);
if (!$link){
    echo "error en la conexion en la base de datos";
}