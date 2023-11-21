<?php
$lugares = [
    [
        'Nombre' => 'Abashiri (NH)',
        'Cat' => '3*',
        'Hab' => 168,
        'Poblacion' => '46013 Valencia',
        'Direccion' => 'Avenida Ausias March, 59'
    ],
    [
        'Nombre' => 'Abba Acteon (Abba Hoteles)',
        'Cat' => '4*',
        'Hab' => 189,
        'Poblacion' => '46023 Valencia',
        'Direccion' => 'Escultor Vicente Bertrán Grimal, 2'
    ],
    [
        'Nombre' => 'Acta Atarazanas',
        'Cat' => '4*',
        'Hab' => 42,
        'Poblacion' => '46011 Valencia',
        'Direccion' => 'Plaza Tribunal de las Aguas, 4'
    ],
    [
        'Nombre' => 'Acta del Carmen',
        'Cat' => '3*',
        'Hab' => '25', 
        'Poblacion' => '46003 Valencia',
        'Direccion' => 'Blanquerias, 11'
    ],
    [
        'Nombre' => 'AC Valencia (AC Hotels)',
        'Cat' => '4*',
        'Hab' => '183',
        'Poblacion' => '46023 Valencia',
        'Direccion' => 'Avenida de Francia, 67'
    ],
    [
        'Nombre' => 'Ad Hoc Monumental Valencia',
        'Cat' => '3*',
        'Hab' => '28',
        'Poblacion' => '46003 Valencia',
        'Direccion' => 'Boix, 4'
    ],
    [
        'Nombre' => 'Alkazar',
        'Cat' => '1*',
        'Hab' => '18',
        'Poblacion' => '46002 Valencia',
        'Direccion' => 'Mosen Femades, 11'
    ]
];
function mostrarHotelesTabla($hoteles) {
    echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Habitaciones</th>
                <th>Población</th>
                <th>Dirección</th>
            </tr>";

    foreach ($hoteles as $hotel) {
        echo "<tr>
                <td>{$hotel['Nombre']}</td>
                <td>{$hotel['Cat']}</td>
                <td>{$hotel['Hab']}</td>
                <td>{$hotel['Poblacion']}</td>
                <td>{$hotel['Direccion']}</td>
              </tr>";
    }

    echo "</table><br>";
}

function mostrarHotelesMasDe100Habitaciones($hoteles) {
    foreach ($hoteles as $hotel) {
        if ($hotel['Hab'] > 100) {
            echo "Nombre: " . $hotel['Nombre'] . ", Categoría: " . $hotel['Cat'] . ", Habitaciones: " . $hotel['Hab'] . ", Población: " . $hotel['Poblacion'] . ", Dirección: " . $hotel['Direccion'] . "<br>";
        }
    }
    echo "<br>";
}

function mostrarHotelesMenosDe100HabitacionesY3Estrellas($hoteles) {
    foreach ($hoteles as $hotel) {
        if ($hotel['Hab'] < 100 && $hotel['Cat'] === '3*') {
            echo "Nombre: " . $hotel['Nombre'] . ", Categoría: " . $hotel['Cat'] . ", Habitaciones: " . $hotel['Hab'] . ", Población: " . $hotel['Poblacion'] . ", Dirección: " . $hotel['Direccion'] . "<br>";
        }
    }
    echo "<br>";
}

function borrarHotelPorNombre(&$hoteles, $nombreHotel) {
    foreach ($hoteles as $key => $hotel) {
        if ($hotel['Nombre'] === $nombreHotel) {
            unset($hoteles[$key]);
        }
    }
    echo "Hotel '$nombreHotel' borrado<br><br>";
}

function borrarTodosLosHoteles(&$hoteles) {
    $hoteles = [];
    echo "No hay hoteles en la base de datos<br><br>";
}

function agregarHoteles(&$hoteles, $nuevosHoteles) {
    foreach ($nuevosHoteles as $nuevoHotel) {
        $hoteles[] = $nuevoHotel;
    }
    echo "Hoteles añadidos:<br>";
    mostrarHotelesTabla($hoteles);
}

// Acciones:

mostrarHotelesTabla($lugares);
mostrarHotelesMasDe100Habitaciones($lugares);
mostrarHotelesMenosDe100HabitacionesY3Estrellas($lugares);
borrarHotelPorNombre($lugares, 'Acta del Carmen');
mostrarHotelesTabla($lugares);
borrarTodosLosHoteles($lugares);
if (empty($lugares)) {
    echo "No hay hoteles en la base de datos<br><br>";
}

$nuevosHoteles = [
    [
        'Nombre' => 'Astoria Palace (Ayre Fiesta)',
        'Cat' => '4*',
        'Hab' => 204,
        'Poblacion' => '46002 Valencia',
        'Direccion' => 'Plaza Rodrigo Botet, 5'
    ],
    [
        'Nombre' => 'Balneario Las Arenas',
        'Cat' => 'Lujo',
        'Hab' => 253,
        'Poblacion' => '46011 Valencia',
        'Direccion' => 'Eugenia Viñes, 22-24'
    ]
];
agregarHoteles($lugares, $nuevosHoteles);
?>
