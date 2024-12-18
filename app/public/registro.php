<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
    </head>
<body>
    <form method="POST" action="crear_usuarios.php">
        <div>
        <h1>Registrarse
        </h1>
        </div>
        <div>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre Completo.." required>
        <input type="text" id="usuario" name="usuario" placeholder="Usuario.." required>
        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña.." required>
        </div>
    <button type="submit">Registrarse</button>
    </form>
</body>
</html>



