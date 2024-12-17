<?php
session_start();
if (!isset($_SESSION['nombre'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <h1>¡Hola, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h1>
    <p>Bienvenido a tu perfil.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
