<?php
$nombre = NULL;
$edad = NULL;

// Verificar si 'nombre' está definido en la URL
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
}

// Verificar si 'edad' está definido en la URL
if (isset($_GET['edad'])) {
    $edad = $_GET['edad'];
}

// Mostrar saludo personalizado según las condiciones
if ($nombre === NULL) {
    echo "Hola desconocido";
} elseif ($nombre !== NULL && $edad === NULL) {
    echo "Hola $nombre, No se tu edad";
} elseif ($nombre !== NULL && $edad !== NULL) {
    echo "Hola $nombre, Tiene $edad años.";
}
?>