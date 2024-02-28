<?php

$host = "localhost";
$puerto = "5432";
$usuario = "postgres";
$contrasena = "postgres";
$base_datos = "proyectodb";

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

if (isset($_POST['enviar'])){
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];
  $tipo = $_POST['tipo'];
  $horario = $_POST['horario'];
  $consulta = "INSERT INTO cuidadores (nombre, tipo, telefono, correo, horario)
  VALUES ('$nombre', '$tipo', '$telefono', '$correo', '$horario')";

  $resultado = pg_query($conexion, $consulta);
  // **Verifica el resultado de la consulta**
  if (!$resultado) {
      echo "Error al ejecutar la consulta: " . pg_last_error($conexion);
      exit();
  }

  // **Cierra la conexión a la base de datos**
  pg_close($conexion);

  // **Muestra un mensaje al usuario**
  if ($resultado) {
      echo "<h2>¡Registro exitoso!</h2>";
      echo "<p>Gracias por registrarte como cuidador.</p>";
  } else {
      echo "<h2>Error al registrarte</h2>";
      echo "<p>Inténtalo de nuevo más tarde.</p>";
  }
}
?>