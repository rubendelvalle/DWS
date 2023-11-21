<?php
echo "Ingresa una serie de números (presiona 0 para terminar):\n";

$numbers = []; // Array para almacenar los números ingresados

while (true) {
    $input = readline("Número: "); // Solicitar al usuario que ingrese un número
    
    // Verificar si se ingresó un número válido o no
    if (!is_numeric($input)) {
        echo "Ingresa un número válido.\n";
        continue;
    }
    
    $number = (float)$input; // Convertir la entrada a tipo flotante
    
    // Verificar si el número es positivo, negativo o cero
    if ($number > 0) {
        echo "$number es positivo.\n";
    } elseif ($number < 0) {
        echo "$number es negativo.\n";
    } else {
        echo "Has ingresado 0. El programa ha terminado.\n";
        break; // Salir del bucle si se ingresa 0
    }
    
    $numbers[] = $number; // Agregar el número al array
}

?>