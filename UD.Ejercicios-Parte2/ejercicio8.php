<?php
// Obtener los parámetros de edad y estatura de los 5 alumnos desde la URL
$alumnos = [];
for ($i = 1; $i <= 5; $i++) {
    if (isset($_GET['edad'][$i - 1]) && isset($_GET['estatura'][$i - 1])) {
        $edad = (int)$_GET['edad'][$i - 1];
        $estatura = (float)$_GET['estatura'][$i - 1];
        $alumnos[] = ['edad' => $edad, 'estatura' => $estatura];
    } else {
        echo "Faltan parámetros para el alumno $i";
        break;
    }
}

// Variables para calcular promedios y conteos
$sumaEdades = 0;
$sumaEstaturas = 0;
$cantidadMayores18 = 0;
$cantidadEstaturaMayor175 = 0;

// Recorrer el array de alumnos para calcular sumas y conteos
foreach ($alumnos as $alumno) {
    $sumaEdades += $alumno['edad'];
    $sumaEstaturas += $alumno['estatura'];
    
    if ($alumno['edad'] > 18) {
        $cantidadMayores18++;
    }
    
    if ($alumno['estatura'] > 1.75) {
        $cantidadEstaturaMayor175++;
    }
}

// Calcular promedios
$promedioEdades = count($alumnos) > 0 ? $sumaEdades / count($alumnos) : 0;
$promedioEstaturas = count($alumnos) > 0 ? $sumaEstaturas / count($alumnos) : 0;

// Mostrar resultados
echo "Edad promedio de los alumnos: " . $promedioEdades . " años\n";
echo "Estatura promedio de los alumnos: " . $promedioEstaturas . " metros\n";
echo "Cantidad de alumnos mayores de 18 años: " . $cantidadMayores18 . "\n";
echo "Cantidad de alumnos con estatura mayor a 1.75 metros: " . $cantidadEstaturaMayor175 . "\n";
?>
