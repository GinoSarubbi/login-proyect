CREATE TABLE usuarios (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL
);

-- Insertar un usuario para pruebas
INSERT INTO usuarios (nombre, usuario, contrasena)
VALUES ('Juan Pérez', 'juan', MD5('1234'));


