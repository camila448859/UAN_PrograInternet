<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aproximaciones</title>
</head>
<body>
    <!--Aprox pi-->
    <h1>Aproximación de π (pi)</h1>

    <form action="" method="post">
        <label for="n">Ingrese el valor n:</label>
        <input type="number" name="n" min="1" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["n"])){
            $n = intval($_POST["n"]);
            if ($n > 0){
                $pi_aprox = 0;
                echo "<h2>Resultados:</h2>";
                echo "<table><tr><th>n</th><th>π aproximado</th></tr>";
                for ($i = 0; $i <= $n; $i++){
                    $pi_aprox += pow(-1,$i)/(2*$i+1);
                    $pi_val = 4 * $pi_aprox;
                    echo "<tr><td>$i</td><td>$pi_val</td></tr>";
                }

                echo "</table>";
            } else {
                echo "<p> <style='color: red;'>Ingrese un número mayor a 0.</p>";
            }           
        }
    ?>

    <!--Aprox e-->
    <h1>Aproximación de e</h1>

    <form action="" method="post">
        <label for="m">Ingrese el valor n:</label>
        <input type="number" name="m" min="1" required>
        <button type="submit">Calcular</button>
    </form>
    <?php
        function factorial($num) {
            if ($num === 0 || $num === 1) return 1;
            $fact = 1;
            for ($i = 2; $i <= $num; $i++) {
                $fact *= $i;
            }
            return $fact;
        }

        if ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST["m"])){
            $m = intval($_POST["m"]);
            if ($m > 0){
                $e_aprox = 0;
                echo "<h2>Resultados:</h2>";
                echo "<table><tr><th>n</th><th>e aproximado</th></tr>";
                for ($i = 0; $i<= $m; $i++){
                    $e_aprox += 1/ factorial($i);
                    echo "<tr><td>$i</td><td>$e_aprox</td></tr>";
                }
                echo "</table>";
            }else{
                echo "<p> <style= 'color:red;'>Ingrese un numero mayor a 0. </p>";
            }
        }
    ?>
</body>
</html>