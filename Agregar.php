<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Pedido</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .form-container {
      max-width: 500px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f06292;
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
      background-color: #f8bbd0;
    }
    .carrito {
      position: absolute;
      top: 10px;
      right: 10px;
      
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Agregar Pedido</h2>
    <form action="carrritoagg.php" method="post">
      <div class="form-group">
        <label for="nombres" class="form-label">Nombres:</label>
        <input type="text" id="nombres" name="nombres" class="form-control" placeholder="Ingrese sus nombres">
      </div>
      <div class="form-group">
        <label for="nombres" class="form-label">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Ingrese sus apellidos">
      </div>
      <div class="form-group">
        <label for="telefono" class="form-label">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su teléfono">
      </div>
      <div class="form-group">
        <label for="producto" class="form-label">Producto:</label>
        <select id="producto" name="producto" class="form-control">
          <option value="">Seleccione un producto</option>
          <option value="TRUE – LIP PLUMPER">TRUE – LIP PLUMPER</option>
          <option value="KENIA OS – MATTE LIPSTICK">KENIA OS – MATTE LIPSTICK</option>
          <option value="K OS – MATTE LIPSTICK">K OS – MATTE LIPSTICK</option>
          <option value="K OS – PODER">K OS – MATTE LIPSTICK</option>
          
        </select>
        <div class="form-group">
        <label for="cantidad" class="form-label">Cantidad:</label>
        <input type="text" id="cantidad" name="cantidad" class="form-control" placeholder="Ingrese la cantidad">
      </div>
      </div>
      <div class="form-group">
        <label for="preciounitario" class="form-label">Precio Unitario:</label>
        <input type="number" id="preciounitario" name="preciounitario" class="form-control" placeholder="Ingrese el precio unitario">
      </div>
      <tr>
                <td ><CENTER><input type="submit" value="Enviar"></CENTER></td>
            </tr>
    </form>
  </div>
</body>
</html>