<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kenia";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT id, nombres, apellidos, telefono, producto, cantidad, preciounitario FROM Tabla1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Consulta de Usuarios</title>
    <style>
        body {
            background-color: #ffe6f2; /* Fondo rosa claro */
            font-family: Arial, sans-serif;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #ff69b4; /* Título en rosa brillante */
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            border: 2px solid #ffb6c1; /* Bordes de la tabla en rosa pastel */
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ffb6c1; /* Bordes de celdas en rosa pastel */
        }

        th {
            background-color: #ffccdd; /* Encabezados de tabla en rosa pastel */
            color: #333;
        }

        td {
            background-color: #ffe6f2; /* Fondo de las celdas en rosa suave */
        }

        tr:nth-child(even) {
            background-color: #ffd1dc; /* Alternar filas en un rosa más intenso */
        }
    </style>
</head>
<body>
    <h1>Lista</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Mostrar datos de cada fila
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombres"]. "</td><td>" . $row["apellidos"]. "</td><td>" . $row["telefono"]. "</td><td>" . $row["producto"]. "</td><td>" . $row["cantidad"]. "</td><td>" . $row["preciounitario"]. "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No hay registros</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
