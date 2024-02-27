<?php

$host = "localhost";
$puerto = "5432";
$usuario = "postgres";
$contrasena = "postgres";
$base_datos = "proyectodb";

// Conexión a la base de datos
$conexion = pg_connect("host=$host port=$puerto dbname=$base_datos user=$usuario password=$contrasena");
try {
    $conn = new PDO("pgsql:host=$host;port=$puerto;dbname=$base_datos;user=$usuario;password=$contrasena");
    echo "Conexión exitosa!";
  } catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
  }


?>
