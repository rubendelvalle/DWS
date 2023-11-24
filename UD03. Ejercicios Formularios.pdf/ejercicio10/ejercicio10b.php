<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imagen"])) {
    $uploadDir = 'uploads/'; // Directorio donde se guardará la imagen
    $uploadFile = $uploadDir . basename($_FILES['imagen']['name']); // Ruta completa del archivo

    // Verificar si el archivo es una imagen
    $esImagen = getimagesize($_FILES['imagen']['tmp_name']);
    if ($esImagen !== false) {
        // Intentar mover el archivo cargado al directorio de subida
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $uploadFile)) {
            echo "<h2>Imagen subida con éxito:</h2>";
            echo "<img src='$uploadFile' alt='Imagen Subida'>";
        } else {
            echo "<h2>Ocurrió un error al subir la imagen.</h2>";
        }
    } else {
        echo "<h2>El archivo seleccionado no es una imagen válida.</h2>";
    }
} else {
    echo "<h2>No se recibió ninguna imagen.</h2>";
}
?>
