<?php
// Definir un array multidimensional para almacenar las facturas
$facturas = [
    ['codigo_articulo' => 'A001', 'cantidad_litros' => 10, 'precio_litro' => 5.5],
    ['codigo_articulo' => 'A002', 'cantidad_litros' => 15, 'precio_litro' => 6.0],
    ['codigo_articulo' => 'A001', 'cantidad_litros' => 8, 'precio_litro' => 4.0],
    ['codigo_articulo' => 'A003', 'cantidad_litros' => 20, 'precio_litro' => 7.2],
    ['codigo_articulo' => 'A001', 'cantidad_litros' => 12, 'precio_litro' => 5.0]
];

// Variables para calcular la facturación total, cantidad en litros del artículo 1 y facturas de más de 600€
$facturacionTotal = 0;
$cantidadLitrosArticulo1 = 0;
$cantidadFacturasMas600 = 0;

// Recorrer el array de facturas para realizar cálculos
foreach ($facturas as $factura) {
    // Calcular el total de cada factura y sumarlo a la facturación total
    $totalFactura = $factura['cantidad_litros'] * $factura['precio_litro'];
    $facturacionTotal += $totalFactura;

    // Verificar si es el artículo 1 y sumar la cantidad de litros
    if ($factura['codigo_articulo'] === 'A001') {
        $cantidadLitrosArticulo1 += $factura['cantidad_litros'];
    }

    // Contar las facturas de más de 600€
    if ($totalFactura > 600) {
        $cantidadFacturasMas600++;
    }
}

// Mostrar resultados
echo "Facturación total: " . $facturacionTotal . "€<br>";
echo "Cantidad en litros vendidos del artículo 1: " . $cantidadLitrosArticulo1 . " litros<br>";
echo "Cantidad de facturas emitidas de más de 600€: " . $cantidadFacturasMas600 . "<br>";
?>
