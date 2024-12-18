<?php
session_start();

try {
    // Conexión a la base de datos
    $dsn = 'pgsql:host=db;port=5432;dbname=login_db;';
    $username = 'user';
    $password = 'password';
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar las credenciales en la base de datos
$query = $db->prepare('SELECT contrasena, usuario FROM usuarios WHERE usuario = :usuario');
$query->execute([
    ':usuario' => $usuario
]);

$pass_hash = $query->fetch(PDO::FETCH_ASSOC);

// Si el usuario y la contraseña son correctos
 if (password_verify($contrasena, $pass_hash['contrasena'])) {
    $_SESSION['nombre'] = $pass_hash['usuario'];
    header('Location: bienvenida.php'); // Redirige a la página de bienvenida
     exit();
 } else {     // Si no, guarda el mensaje de error y redirige a index.php
    $_SESSION['error_message'] = 'Contraseña o usuario incorrecto.';
    header('Location: index.php');
    exit();
 }
?>
