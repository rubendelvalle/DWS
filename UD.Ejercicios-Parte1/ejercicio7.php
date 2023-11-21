<?php
// Definir la nómina
$nomina = 1000;

// Realizar ajustes en la nómina según las condiciones
if ($nomina < 800) {
    // Incrementar un 20%
    $nomina *= 1.20;
} elseif ($nomina >= 800 && $nomina <= 1200) {
    // Dejar como está
    // No es necesario hacer ninguna operación
} else {
    // Disminuir un 15%
    $nomina *= 0.85;
}

// Mostrar la nómina ajustada
echo "La nómina ajustada es: $nomina €";
?>
