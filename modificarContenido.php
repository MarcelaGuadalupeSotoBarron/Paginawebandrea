<?php 
    include("conexion.php");
    $id = $_GET["id"];
    $query = "SELECT * FROM contenido WHERE id = $id"; 
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array ($result); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
     <!-- Font Awesome -->
     <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"/>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"/>
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
        rel="stylesheet"/>

</head>
<body>
    
    <fieldset>
 <legend>DATOS  </legend>
<form method="POST" action="ContenidoAdd.php" enctype="multipart/form-data">

    <label for="modelo">Modelo: </label>
    <input type="text"   id="modelo" name="modelo"  />
</br>
   <label for="marca">Marca: </label>
    <input type="text"   id="marca" name="marca"  />
</br>
<label for="talla"> Talla: </label>
<input type="text"   id="talla" name="talla" />
</br>
<label for="codigo">Codigo: </label>
<input type="text"   id="codigo" name="codigo" />
</br>
<label for="precio">Precio: </label>
<input type="text"   id="precio" name="precio"  />
</br>
<label for="foto">Foto: </label>
<input type="file"   id="foto" name="foto" />
</br>

<input type="submit" name="enviar">
</form>
</fieldset>
</body>
</html>