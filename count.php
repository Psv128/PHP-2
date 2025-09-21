<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Presentación - Desarrollador Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Cabecera común -->
    <header>
        <?php
        include 'cabecera.inc.php';
        ?>
    </header>
    <main>
        <h2>Lista de números del 1 al 30</h2>
        <ul>
            <?php
            for ($i = 1; $i <= 30; $i++) {
                echo "<li>$i</li>";
            }
            ?>
        </ul>
        <h2>Factorial de 5</h2>
        <p>
            <?php
            $factorial = 1;
            $cadena = "5! = ";
            for ($i = 5; $i >= 1; $i--) {
                $factorial *= $i;
                $cadena .= $i;
                if ($i > 1) {
                    $cadena .= " x ";
                }
            }
            $cadena .= " = $factorial";
            echo $cadena;
            ?>
        </p>
    </main>
</body>
<!-- Pie de página común -->
<footer>
        <?php 
        include 'footer.inc.php'; 
        ?>
</footer>
</html>