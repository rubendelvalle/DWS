<?php
echo "<pre>"; // Establecer formato preformateado

for ($i = 1; $i <= 10; $i++) {
    echo "Tabla del $i:\n"; // Título de la tabla
    echo "************\n";
    
    for ($j = 1; $j <= 10; $j++) {
        $resultado = $i * $j;
        echo "$i x $j = " . sprintf("%4d", $resultado) . "\n";
    }
    
    echo "\n"; // Separador entre cada tabla
}

echo "</pre>"; // Cerrar el formato preformateado
?>