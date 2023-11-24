<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la multiplicación</title>
</head>
<body>
    <h2>Resultado de la multiplicación</h2>

    <?php
    // Verificar si se han recibido los números del formulario
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        // Obtener los números del formulario
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Realizar la multiplicación
        $resultado = $numero1 * $numero2;

        // Mostrar el resultado
        echo "<p>El resultado de la multiplicación de $numero1 y $numero2 es: $resultado</p>";
    } else {
        echo "<p>No se recibieron los números correctamente.</p>";
    }
    ?>
</body>
</html>
