<?php
// Definir variables
$precioProducto = 100;
$unidadesAdquiridas = 4;

// Definir constante
define('IVA', 0.21);

// Calcular importe base de la factura
$importeBase = $precioProducto * $unidadesAdquiridas;

// Calcular importe del IVA
$importeIVA = $importeBase * IVA;

// Calcular importe final de la factura
$importeFinal = $importeBase + $importeIVA;

// Mostrar resultados
echo "Precio del producto: $precioProducto €<br>";
echo "Unidades adquiridas: $unidadesAdquiridas<br>";
echo "Importe base de la factura: $importeBase €<br>";
echo "Importe del IVA (21%): $importeIVA €<br>";
echo "Importe final de la factura: $importeFinal €";
?>
