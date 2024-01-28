<?php 
session_destroy();

echo "Ha cerrado la sesion";
// Redirigir al usuario a la página de inicio o a donde desees
header("refresh:2;url=BELI.php");

exit();
?>