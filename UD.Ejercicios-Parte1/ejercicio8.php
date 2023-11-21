<?php
// Definir la constante LÍMITE
define('LIMITE', 10);

// Generar un número aleatorio entre 1 y LÍMITE
$numeroAleatorio = rand(1, LIMITE);

// Determinar si el número es par o impar usando el operador ternario
$mensaje = ($numeroAleatorio % 2 === 0) ? 'par' : 'impar';

// Mostrar el número y si es par o impar
echo "Número aleatorio: $numeroAleatorio<br>";
echo "El número es $mensaje.";
?>
