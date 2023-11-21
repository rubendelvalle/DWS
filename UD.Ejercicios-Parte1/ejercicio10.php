<?php
$codigo = "1";
$nombre = "Tom";
$apellidos = "Smith";
$puesto = "Vendedor";
$sueldo = 75000;
$edad = 26;
$num_hijos = 0;
$sucursal = "New York";

// Cálculos de retenciones
$retencion1 = ($puesto === "Vendedor" && $sueldo > 70000) ? 0.10 : 0.20;

$retencion2 = ($edad > 50 || $num_hijos > 2) ? 0.05 : 0.10;

$retencion3 = ($sueldo > 50000 && $sueldo < 80000) ? 0.05 : 0.12;

$retencion4 = ($num_hijos == 1 || $num_hijos == 2) ? 0.10 : 0.05;

$retencion5 = ($sueldo > 80000 || $num_hijos == 0) ? 0.15 : 0.05;

// Aplicar retenciones
$retencionFinal = max($retencion1, $retencion2, $retencion3, $retencion4, $retencion5);
$sueldoConRetencion = $sueldo - ($sueldo * $retencionFinal);

echo "Código: $codigo<br>";
echo "Nombre: $nombre<br>";
echo "Apellidos: $apellidos<br>";
echo "Puesto: $puesto\n";
echo "Sueldo original: $sueldo<br>";
echo "Edad: $edad<br>";
echo "Número de hijos: $num_hijos<br>";
echo "Sucursal: $sucursal<br>";
echo "Retención Final: " . ($retencionFinal * 100) . "%<br>";
echo "Sueldo con retención: $sueldoConRetencion<br>";
?>
