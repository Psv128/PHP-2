<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Server</title>
</head>
<body>
    <header>
        <?php
        include 'cabecera.inc.php';
        
        ?>
    </header>
    <main>
        <section>
            <h2>Contenido de $_SERVER</h2>
            <table border="1" cellpadding="5" cellspacing="0">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($_SERVER as $clave => $valor) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($clave) . '</td>';
                    if (is_array($valor)) {
                        echo '<td>';
                        foreach ($valor as $k => $v) {
                            echo htmlspecialchars($k) . ' => ' . htmlspecialchars($v) . '<br>';
                        }
                        echo '</td>';
                    } else {
                        echo '<td>' . htmlspecialchars($valor) . '</td>';
                    }
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </section>
        <nav>
            <a href="principal.php">Volver a la página principal</a>
        </nav>
    </main>
    <footer>
        <?php 
        include 'footer.inc.php'; 
        ?>
    </footer>
</body>
</html>