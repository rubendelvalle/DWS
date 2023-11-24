<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <input type="radio" id="sumar" name="operacion" value="sumar" required>
        <label for="sumar">Sumar</label>

        <input type="radio" id="restar" name="operacion" value="restar">
        <label for="restar">Restar</label>

        <input type="radio" id="multiplicar" name="operacion" value="multiplicar">
        <label for="multiplicar">Multiplicar</label>

        <input type="radio" id="dividir" name="operacion" value="dividir">
        <label for="dividir">Dividir</label><br><br>

        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        try {
            if ($operacion === 'dividir' && $numero2 == 0) {
                throw new Exception("No es posible dividir por cero.");
            }

            switch ($operacion) {
                case 'sumar':
                    $resultado = $numero1 + $numero2;
                    echo "<p>El resultado de la suma es: $resultado</p>";
                    break;
                case 'restar':
                    $resultado = $numero1 - $numero2;
                    echo "<p>El resultado de la resta es: $resultado</p>";
                    break;
                case 'multiplicar':
                    $resultado = $numero1 * $numero2;
                    echo "<p>El resultado de la multiplicación es: $resultado</p>";
                    break;
                case 'dividir':
                    $resultado = $numero1 / $numero2;
                    echo "<p>El resultado de la división es: $resultado</p>";
                    break;
                default:
                    echo "<p>Por favor, selecciona una operación.</p>";
                    break;
            }
        } catch (Exception $e) {
            echo "<p>Error: " . $e->getMessage() . "</p>";
        }
    }
    ?>
</body>
</html>
