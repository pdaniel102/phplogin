<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Tabla productos</title>
</head>

<body>
    <center>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lstProductos as $item) {
                    echo '<tr>';
                    echo '<td>' . $item["codigo"] . '</td>';
                    echo '<td>' . $item["nombre"] . '</td>';
                    echo '<td>' . $item["precio"] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </center>
    <a href=/DemoPHPMVC/controlador/logout.php>Cerrar Sesion X </a>
</body>

</html>