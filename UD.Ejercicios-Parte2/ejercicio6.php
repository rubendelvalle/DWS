<?php
// Verificar si se han proporcionado parámetros en la URL
if (isset($_GET['numeros'])) {
    // Obtener los números de la URL y separarlos en un array
    $numeros = explode(",", $_GET['numeros']);

    // Convertir los valores del array a números flotantes
    $numeros = array_map('floatval', $numeros);

    // Calcular la media
    if (count($numeros) > 0) {
        $media = array_sum($numeros) / count($numeros);
        echo "La media de los números ingresados es: $media";
    } else {
        echo "No se proporcionaron números válidos en la URL.";
    }
} else {
    echo "Por favor, proporciona los números a través de la URL usando el parámetro 'numeros'. Por ejemplo: calcular_media.php?numeros=5,8,10,-3";
}
?>
