<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="procesar_login.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
