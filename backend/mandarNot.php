<?php
$dbname = "liz";
$dbuser = "postgres";
$dbpass = "Ahsy1zhdg123";

$conexion = pg_connect("host=localhost port=5432 dbname=$dbname user=$dbuser password=$dbpass");

if (!$conexion) {
    die("No se pudo conectar a la base de datos: " . pg_last_error());
}

$sql = "INSERT INTO notas () VALUES ('Liz', 100)";
$resultado = pg_query($conexion, $sql);

if (!$resultado) {
    die("No se pudo ejecutar el comando: " . pg_last_error());
}

while ($fila = pg_fetch_assoc($resultado)) {
    echo $fila['nombre'] . "\n";
}

pg_close($conexion);
?>