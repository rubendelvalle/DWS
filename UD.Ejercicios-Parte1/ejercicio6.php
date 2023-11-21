<?php
// Definir variables
$numero1 = 15;
$numero2 = 10;

// Comparar los números y mostrar el resultado usando switch
$resultado = null;

switch (true) {
    case $numero1 > $numero2:
        $resultado = "El mayor número es: $numero1";
        break;
    case $numero2 > $numero1:
        $resultado = "El mayor número es: $numero2";
        break;
    default:
        $resultado = "Los números son iguales";
        break;
}

echo $resultado;
?>
