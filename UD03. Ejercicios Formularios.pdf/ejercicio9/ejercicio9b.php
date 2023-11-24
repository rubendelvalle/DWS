<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validar campos obligatorios
  $errors = [];
  $nombre = $_POST['nombre'] ?? '';
  $email = $_POST['email'] ?? '';
  $usuario = $_POST['usuario'] ?? '';
  $password = $_POST['password'] ?? '';
  $confirm_password = $_POST['confirm_password'] ?? '';
  
  if (empty($nombre) || empty($email) || empty($usuario) || empty($password) || empty($confirm_password)) {
    $errors[] = "Todos los campos son obligatorios.";
  }

  // Verificar coincidencia de contraseñas
  if ($password !== $confirm_password) {
    $errors[] = "Las contraseñas no coinciden.";
  }

  // Verificar tipo y tamaño de la foto subida
  $foto = $_FILES['foto'] ?? null;
  if ($foto) {
    $allowed_types = ['image/jpeg', 'image/png'];
    $max_size = 5 * 1024 * 1024; // 5MB
    if (!in_array($foto['type'], $allowed_types)) {
      $errors[] = "Tipo de archivo no permitido. Sube una imagen en formato JPEG o PNG.";
    }
    if ($foto['size'] > $max_size) {
      $errors[] = "El tamaño de la imagen es demasiado grande. Máximo 5MB.";
    }
  } else {
    $errors[] = "No se ha subido ninguna imagen.";
  }

  // Mostrar errores
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
  } else {
    // Procesar datos (guardar en base de datos, etc.)
    // Aquí puedes agregar el código para guardar los datos en la base de datos, por ejemplo.
    echo "¡Registro exitoso!";
  }
}
?>
