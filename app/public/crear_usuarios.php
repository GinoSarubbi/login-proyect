<?php
session_start();

try {
    // Configuración de la conexión
    $dsn = 'pgsql:host=db;port=5432;dbname=login_db;';
    $username = 'user';
    $password = 'password';
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Manejo de errores
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Validar entrada del formulario
if (isset($_POST['usuario']) && isset($_POST['contrasena']) && isset($_POST['nombre'])) {
    $usuario = trim($_POST['usuario']);
    $contrasena = trim($_POST['contrasena']);
    $nombre = trim($_POST['nombre']); // Aquí agregamos el campo "nombre"

    // Validar que no estén vacíos
    if (empty($usuario) || empty($contrasena) || empty($nombre)) {
        die("Por favor completa todos los campos.");
    }

    // Insertar el usuario en la base de datos
    try {
        $query = $db->prepare('INSERT INTO usuarios (nombre, usuario, contrasena) VALUES (:nombre, :usuario, :contrasena_hash)');
        $query->execute([
            ':nombre' => $nombre,
            ':usuario' => $usuario,
            ':contrasena_hash' => password_hash($contrasena, PASSWORD_BCRYPT), // Hash seguro
        ]);

        // Redirigir a la página de bienvenida tras el registro exitoso
        $_SESSION['nombre'] = $usuario; // O asigna el nombre del usuario registrado
        header('Location: bienvenida.php');
        exit();
    } catch (PDOException $e) {
        // Manejar errores de base de datos (por ejemplo, usuario duplicado)
        if ($e->getCode() == 23505) { // Código de error para clave duplicada en PostgreSQL
            echo "El usuario ya existe.";
        } else {
            die("Error al registrar el usuario: " . $e->getMessage());
        }
    }
} else {
    echo "Datos no válidos.";
}
?>
