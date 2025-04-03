<?php
$host = "localhost";
$user = "root";  // Si tienes contraseña, agrégala aquí
$pass = "";
$dbname = "oficina_tic";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
