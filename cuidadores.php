<?php

$host = "localhost";
$puerto = "5432";
$usuario = "postgres";
$contrasena = "postgres";
$base_datos = "proyectodb";

try {
    $conexion = pg_connect("host=$host port=$puerto dbname=$base_datos user=$usuario password=$contrasena");
    echo "Conexión exitosa!";
    } catch (PDOException $e) {
      echo "Error al conectar: " . $e->getMessage();
    }

if (isset($_POST['cancelar'])){
        $consulta="delete from cuidadores
        where id=1";
}

?>