<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'colo_db');

$conexion = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}



$conexion->close();
?>