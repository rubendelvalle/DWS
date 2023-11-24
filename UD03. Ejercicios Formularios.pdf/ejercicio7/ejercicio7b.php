<!DOCTYPE html>
<html>
<head>
    <title>Procesamiento de datos con método GET</title>
</head>
<body>
    <h2>Procesamiento de datos con método GET</h2>

    <?php
    function recoge($valor) {
        return htmlspecialchars(trim(strip_tags($valor)));
    }

    if (isset($_GET['nombre'], $_GET['sexo'], $_GET['edad'], $_GET['peso'], $_GET['estado_civil'], $_GET['aficiones'])) {
        $nombre = recoge($_GET['nombre']);
        $sexo = recoge($_GET['sexo']);
        $edad = recoge($_GET['edad']);
        $peso = recoge($_GET['peso']);
        $estado_civil = recoge($_GET['estado_civil']);
        $aficiones = $_GET['aficiones'];

        echo "<p>Nombre: $nombre</p>";
        echo "<p>Sexo: $sexo</p>";
        echo "<p>Edad: $edad</p>";
        echo "<p>Peso: $peso kg</p>";
        echo "<p>Estado Civil: $estado_civil</p>";
        
        if (!empty($aficiones)) {
            echo "<p>Aficiones:</p>";
            echo "<ul>";
            foreach ($aficiones as $aficion) {
                echo "<li>$aficion</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se han seleccionado aficiones.</p>";
        }
    } else {
        echo "<p>No se recibieron los datos correctamente.</p>";
    }
    ?>
</body>
</html>
