<?php
session_start();

try {
    $dsn = 'pgsql:host=db;port=5432;dbname=login_db;';
    $username = 'user';
    $password = 'password';
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = $db->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = MD5(:contrasena)');
$query->execute([
    ':usuario' => $usuario,
    ':contrasena' => $contrasena
]);

$user = $query->fetch(PDO::FETCH_ASSOC);
if ($user) {
    $_SESSION['nombre'] = $user['nombre'];
    header('Location: bienvenida.php');
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>
