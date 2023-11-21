<?php
// Crear un array de 10 números aleatorios
$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = rand(-10, 10); // Generar números aleatorios entre -10 y 10
}

// Variables para almacenar sumas y conteos
$sumaPositivos = 0;
$cantidadPositivos = 0;
$sumaNegativos = 0;
$cantidadNegativos = 0;
$cantidadCeros = 0;

// Recorrer el array para calcular sumas y conteos
foreach ($numeros as $numero) {
    if ($numero > 0) {
        $sumaPositivos += $numero;
        $cantidadPositivos++;
    } elseif ($numero < 0) {
        $sumaNegativos += $numero;
        $cantidadNegativos++;
    } else {
        $cantidadCeros++;
    }
}

// Calcular medias
$mediaPositivos = $cantidadPositivos > 0 ? $sumaPositivos / $cantidadPositivos : 0;
$mediaNegativos = $cantidadNegativos > 0 ? $sumaNegativos / $cantidadNegativos : 0;

// Mostrar resultados
echo "Array de números: " . implode(', ', $numeros) . "<br>";
echo "Media de números positivos: " . $mediaPositivos . "<br>";
echo "Media de números negativos: " . $mediaNegativos . "<br>";
echo "Cantidad de ceros: " . $cantidadCeros . "<br>";
?>
