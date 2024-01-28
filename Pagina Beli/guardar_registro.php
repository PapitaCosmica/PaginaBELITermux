<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];

// Conexión a la base de datos 
$servername = "localhost";
$username = "root";
$password = "utom";
$dbname = "beli";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
   
}

// Preparar la consulta SQL para insertar el registro
$sql = "INSERT INTO usuario (nombre_usu, correo, contrasena, direccion,edad) VALUES ('$nombre', '$email', '$contraseña', '$direccion', '$edad');";

// Ejecutar la consulta
if (mysqli_query($conn, $sql)) {
    echo "Registro guardado exitosamente.";
    header("refresh:2;url=Login(V).php");
} else {
    echo "Error al guardar el registro: " . mysqli_error($conn);
    header("refresh:2;url=Login(V).php");
}

// Cerrar la conexión
mysqli_close($conn);
?>
