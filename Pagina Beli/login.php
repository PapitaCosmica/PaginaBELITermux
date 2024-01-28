<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "utom";
$dbname = "beli";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM prueba WHERE correo = '$usuario' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);

    if ($result->num_rows >= 1) {
        // Inicio de sesión exitoso

     session_start();
     $_SESSION["validar"] = true;
        echo "Inicio de sesión exitoso. ¡Bienvenido!";
        header("refresh:2;url=BELI.php");
    } else {
        echo "Correo electrónico o contraseña incorrectos.";
        header("refresh:2;url=Login(V).php");
    }
}

$conn->close();
?>
