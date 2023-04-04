<?php 
    include("conexion.php");
    $consulta = "SELECT * FROM contenido";
    $result = mysqli_query($link, $consulta);
    $row = mysqli_fetch_array($result);
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
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css"
  rel="stylesheet"
/>
<table class="table">
    </br>
        <th>
            <td>modelo</td>
            <td>marca</td>
            <td>talla</td>
            <td>codigo</td>
            <td>precio</td>
            <td>foto</td>
        </th>

        <?php if(mysqli_num_rows($resultado)==0){?>
            <tr>
                <td> No hay resultados </td>
            </tr>
        <?php } else {
            do{?>

        <tr>
            <td colspan="2">
                <a href="BorrarContenido.php?id=<?php echo $row['id'];?>"
                    onclick="return confirm('Estas seguro de eliminar este item?');">
                    <i class="fas fa-trash"></i>
                </a>
                <a href="modificarContenido.php?id=<?php echo $row['id'];?>"
                    onclick="return confirm('Estas seguro de modificar este item?');">
                    <i class="fas fa-broom"></i>
                </a>
                <a href="verContenido.php?id=<?php echo $row['id']; ?>">
                    <i class="fas fa-eye"></i>
                </a>

            </td>
            <td><img width="150px" height="150px" src="<?php echo $row['foto']; ?>"> </td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['talla']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['foto']; ?></td>
        </tr>

        <?php } while($row=mysqli_fetch_array($resultado));}?>
    </table>


    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js">
    </script>
</body>
</html>