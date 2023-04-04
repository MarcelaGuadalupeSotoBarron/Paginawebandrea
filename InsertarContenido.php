<?php 
    include("conexion.php");
    $mod = $_POST['modelo'];
    $mar= $_POST["marca"];
    $tal = $_POST["talla"];
    $cod  = $_POST["codigo"];
    $pre = $_POST["precio"];
    $foto = "imagenes/".$_FILES["foto"] ["name"];
    move_uploaded_file($_FILES["foto"]["tmp_name"],$foto);
    $query ="INSERT INTO `examen`.`contenido`
    (
    `modelo` ,
    `marca`,
    `talla`,
    `codigo`,
    `precio`,
    `foto`,
    VALUES
('$mod' , '$mar' , '$tal', '$cod','$pre','$foto')";


    mysqli_query($link, $query);
    //echo $query;
?>
