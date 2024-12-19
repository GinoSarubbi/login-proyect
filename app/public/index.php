<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <form action="procesar_login.php" method="POST" class="login-form">
            <div class="logo">
                <h1>TiendaMia</h1>
            </div>
            <h2>Ingresa a tu Cuenta</h2>
            <p>Bienvenido! Porfavor ingresa tus credenciales</p>
            <input type="text" class="input-field" placeholder="Enter your username" name="usuario" id="usuario" required>
            <input type="password" class="input-field" placeholder="Enter your password" name="contrasena" id="contrasena" required>
            
            <div class="contenedor-msj">
                <?php if (isset($_SESSION['error_message'])): ?>   
                <div class="error-message">
                    <?php echo $_SESSION['error_message']; ?>
                </div>
                <?php unset($_SESSION['error_message']); ?>
                <?php endif; ?>
            </div>
            
            <button type="submit" class="login-btn">Iniciar Sesion</button>
        </form>
        <div class="cnt-link">
        <a class="link-register" href="./registro.php">Registrarse</a>
        </div>
    </div>
</body>
</html>