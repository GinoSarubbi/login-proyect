<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <form action="procesar_login.php" method="POST">
        <div class="">
        <h1 class="login-regis">Iniciar Sesión</h1>
        </div>
     <div>
        <input type="text" placeholder="Ingrese su usuarios..." name="usuario" id="usuario" required>
         <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña..." required>
     </div>
        <button type="submit">Iniciar Sesión</button>
        <a href="./registro.php" type="submit">Registrarse</button>
    </form>
</body>
</html>
