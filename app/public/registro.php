
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="login-container"> <!-- Cambié el contenedor para usar la clase del CSS -->
        <form method="POST" action="crear_usuarios.php">
            <div>
                <h1>Registrarse</h1>
            </div>
            <div>
                <input type="text" id="nombre" name="nombre" class="input-field" placeholder="Nombre Completo.." required>
                <input type="text" id="usuario" name="usuario" class="input-field" placeholder="Usuario.." required>
                <input type="password" id="contrasena" name="contrasena" class="input-field" placeholder="Contraseña.." required>
            </div>
            <button type="submit" class="login-btn">Registrarse</button> <!-- Aplicado la clase del CSS -->
        </form>
    </div>
</body>
</html>