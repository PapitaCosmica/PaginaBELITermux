<?php
$servername = "localhost";
$username = "root";
$password = "utom";
$dbname = "beli";

// Conexión a la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("La conexión ha falladox: " . mysqli_connect_error());
}
?>
