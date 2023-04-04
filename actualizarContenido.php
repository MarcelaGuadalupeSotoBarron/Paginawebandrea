<?php
    include("conexion.php");
    $id = $_POST['id'];
    $mod=$_POST["modelo"];
    $mar=$_POST["marca"];
    $tal = $_POST["talla"];
    $cod = $_POST["codigo"];
    $pre=$_POST["precio"];
    $foto = "imagenes/" .$_FILES["foto"] ["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"],$foto);

    $query ="UPDATE contenido
    SET
   `modelo` = '$mod',
    `marca` = '$mar',
    `talla` = '$tal',
    `codigo`= '$cod',
    `precio` = '$pre',
    `foto` = '$foto',
    WHERE id = $id;"; 
    echo $query;
    mysqli_query($link, $query); 
    header('location: mostrarDatos.php')
    
?>