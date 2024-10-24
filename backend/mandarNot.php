<?php
$dbname = "liz";
$dbuser = "postgres";
$dbpass = "Ahsy1zhdg123";

$conexion = pg_connect("host=localhost port=5432 dbname=$dbname user=$dbuser password=$dbpass");

if (!$conexion) {
    die("No se pudo conectar a la base de datos: " . pg_last_error());
}

$consulta = "SELECT * FROM usuarios";
?>