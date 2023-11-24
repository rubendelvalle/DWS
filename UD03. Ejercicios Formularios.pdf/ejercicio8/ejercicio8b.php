<?php
$texto = $_POST['texto'];
$seleccion = $_POST['seleccion'];

// Función para validar el texto según la selección
function validarTexto($texto, $seleccion) {
    switch ($seleccion) {
        case 'email':
            if (filter_var($texto, FILTER_VALIDATE_EMAIL)) {
                return 'El texto es un email válido.';
            } else {
                return 'El texto NO es un email válido.';
            }
            break;
        case 'numeros':
            if (ctype_digit($texto)) {
                return 'El texto contiene sólo números.';
            } else {
                return 'El texto NO contiene sólo números.';
            }
            break;
        case 'nif':
            // Validación de NIF en España (formato: 8 dígitos + letra)
            if (preg_match('/^[0-9]{8}[A-Za-z]$/', $texto)) {
                return 'El texto es un NIF válido.';
            } else {
                return 'El texto NO es un NIF válido.';
            }
            break;
        case 'texto':
            // Validación de texto (solo letras y espacios)
            if (preg_match('/^[A-Za-z\s]+$/', $texto)) {
                return 'El texto contiene sólo letras y espacios.';
            } else {
                return 'El texto NO contiene sólo letras y espacios.';
            }
            break;
        default:
            return 'Seleccione un filtro válido.';
    }
}

// Llamar a la función y devolver el resultado de la validación
echo validarTexto($texto, $seleccion);
?>
