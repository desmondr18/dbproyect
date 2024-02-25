<?php

// Reemplazar con las credenciales de tu base de datos
$host = "localhost";
$puerto = "5432";
$usuario = "usuario";
$contrasena = "contrasena";
$base_datos = "nombre_base_datos";

// Conexión a la base de datos
$conexion = pg_connect("host=$host port=$puerto dbname=$base_datos user=$usuario password=$contrasena");

// Verificar si la conexión fue exitosa
if (!$conexion) {
    echo "Error al conectar a la base de datos: " . pg_last_error($conexion);
    exit();
}

?>
