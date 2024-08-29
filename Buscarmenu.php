<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar</title>
    <style>
        body {
            background-color: #ffe6f2; /* Fondo rosa claro */
            font-family: Arial, sans-serif;
        }

        div {
            padding: 20px;
            border-radius: 10px;
            background-color: #ffccdd; /* Fondo del div en rosa pastel */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin: auto;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ffb6c1;
            border-radius: 5px;
            width: 60%;
            background-color: #fff;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #ff69b4;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #ff1493;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ffb6c1; /* Bordes rosa pastel */
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ffccdd; /* Encabezados de tabla en rosa pastel más intenso */
        }

        td {
            background-color: #ffe6f2; /* Fondo de las celdas en rosa muy suave */
        }

    </style>
</head>
<body>
<center>
<br>
    <div>
        <form action="buscar.php" method="post">
            <input type="text" name="buscar" id="">
            <input type="submit" value="Buscar"> 
        </form>
    </div>
    <br>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Telefono</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>ESTADO</th>
            </tr>
            <?php
                $cnx = mysqli_connect("localhost", "root", "", "kenia");
                $sql = "SELECT id, nombres, apellidos, telefono, producto, cantidad, preciounitario, ROUND((cantidad*preciounitario), 1) as p
                        FROM tabla1
                        ORDER BY p DESC";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)) {
                    ?>
                    <tr>
                        <td><?php echo $mostrar[0] ?></td>
                        <td><?php echo $mostrar[1] ?></td>
                        <td><?php echo $mostrar[2] ?></td>
                        <td><?php echo $mostrar[3] ?></td>
                        <td><?php echo $mostrar[4] ?></td>
                        <td><?php echo $mostrar[5] ?></td>
                        <td><?php echo $mostrar[6] ?></td>
                        <td><?php echo $mostrar[7] ?></td>
                        <td>
                            <?php 
                                if ($mostrar[7] >= 1) {
                                    echo "Comprado";
                                }
                                else {
                                    echo "En proceso";
                                }
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
        </table>
    </div>
</center>
</body>
</html>
