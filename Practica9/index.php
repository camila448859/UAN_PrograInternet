<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Autos con Bootstrap</title>
</head>
<body>
<div class="container my-5">
        <h1 class="text-center mb-4">Compra de Autos con bootstrap</h1>

        <?php
            $con = mysqli_connect("localhost", "root", "CAMILA", "autos");

            if (mysqli_connect_errno()) {
                echo "<div class='alert alert-danger'>Error al conectar a MySQL: " . mysqli_connect_error() . "</div>";
            } else {
                $result = mysqli_query($con, 
                    "SELECT compra.id, modelo.nombre AS modelo, usuarios.nombre AS usuario, compra.folio 
                    FROM compra 
                    JOIN modelo ON compra.idModelo = modelo.id 
                    JOIN usuarios ON compra.idUsuario = usuarios.id;");
        ?>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Usuario</th>
                    <th>Folio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['modelo'] . "</td>";
                        echo "<td>" . $row['usuario'] . "</td>";
                        echo "<td>" . $row['folio'] . "</td>";
                        echo "</tr>";
                    }
                    mysqli_close($con);
                ?>
            </tbody>
        </table>

        <?php } ?>
    </div>
</body>
</html>