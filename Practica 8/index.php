<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Compra</title>
</head>
<body>
    <h1>Compra de autos</h1>
    <?php
        $con=mysqli_connect("localhost","root","CAMILA","autos");

            if(mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $result = mysqli_query($con, "SELECT compra.id, modelo.nombre AS modelo, usuarios.nombre AS usuario, compra.folio FROM compra JOIN modelo ON compra.idModelo = modelo.id JOIN usuarios ON compra.idUsuario = usuarios.id; ");

    ?>

    <table id="consolas">
            <tr>
                <th>id</th>
                <th>Modelo</th>
                <th>Usuario</th>
                <th>Folio</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr class=\"renglon2\"><td>" . $row['id'] .  "</td><td>" . $row['modelo'] .  "</td><td>" . $row['usuario'] .  "</td><td>" .  "</td><td>" . $row['folio'] .  "</td><td>" ;
                }

                mysqli_close($con);
            ?>
    </table>
</body>
</html>