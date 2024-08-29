<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #ffe6f2; /* Fondo rosa claro */
            font-family: Arial, sans-serif;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
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

        a {
            color: #ff69b4; /* Enlaces en rosa brillante */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        div {
            padding: 20px;
            border-radius: 10px;
            background-color: #ffccdd; /* Fondo del div en rosa pastel */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<center>
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
                <th>Acción</th>
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
                        <td>
                            <a href="formeditar.php?
                            id=<?php echo $mostrar[0] ?> &
                            nombres=<?php echo $mostrar[1] ?> &
                            apellidos=<?php echo $mostrar[2] ?> &
                            telefono=<?php echo $mostrar[3] ?> &
                            producto=<?php echo $mostrar[4] ?> &
                            cantidad=<?php echo $mostrar[5] ?> &
                            preciounitario=<?php echo $mostrar[6] ?>
                            ">Editar</a>
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