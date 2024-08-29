<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Pedido</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .form-container {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-label {
      font-weight: bold;
      margin-bottom: 10px;
    }
    .form-control {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
<?php
$id = $_GET['id'];
$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
$telefono = $_GET['telefono'];
$producto = $_GET['producto'];
$cantidad = $_GET['cantidad'];
$preciounitario = $_GET['preciounitario'];
?>
  <div class="form-container">
    <h2>Editar Pedido</h2>
    <form action="speditar.php" method="post">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
                <td><input type="text" name="id" style="visibility: hidden;"  value="<?=$id?>" id=""></td>
            </tr>
            <tr>
                <td>NOMBRES:</td>
                <td><input type="text" name="nombres" value="<?=$nombres?>" id="" ></td>
            </tr>
            <tr>
                <td>APELLIDOS:</td>
                <td><input type="text" name="apellidos" value="<?=$apellidos?>" id=""></td>
            </tr>
            <tr>
                <td>Telefono:</td>
                <td><input type="text" name="telefono" value="<?=$telefono?>" id=""></td>
            </tr>
            <tr>
                <td>Producto:</td>
                <td><select id="" name="producto" value="<?=$producto?>">
          <option value="">Seleccione un producto</option>
          <option value="TRUE – LIP PLUMPER">TRUE – LIP PLUMPER</option>
          <option value="KENIA OS – MATTE LIPSTICK">KENIA OS – MATTE LIPSTICK</option>
          <option value="K OS – MATTE LIPSTICK">K OS – MATTE LIPSTICK</option>
        </select></td>
            </tr>
            <tr>
                <td>Cantidad:</td>
                <td><input type="text" name="cantidad" value="<?=$cantidad?>" id=""></td>
            </tr>
            <tr>
                <td>Precio Unitario:</td>
                <td><input type="text" name="preciounitario" value="<?=$preciounitario?>" id=""></td>
            </tr>
            <tr>
                <td><CENTER><input type="submit" value="Actualizar"></CENTER></td>
            </tr>
        </table>

    </form>
  </div>
</body>
</html>