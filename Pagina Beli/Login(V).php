<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <title>Estructura De Mi Sitio</title>
    <link rel="stylesheet" href="Diseño.css">

</head>
<body>
    <div id="container">
        <header>
        <a href="BELI.php"><img src="LogoBELI.png" style="
                position: absolute;
                width: 5cm;"> </a>
           <a href="Carrito.php">   <img src="Carrito.jpg" style=" position: absolute;
            width: 2cm;
               top: 1.5cm;
               left: 11cm;">  </a>
           
            <input type="text" style="
            width: 15cm;
            left: 15cm;
            top: 2.3cm;"></input>
         <a href="Productos.html"><button style="position: absolute;
         top: 2.3cm;
         left: 31cm;">buscar</button></a> 

        </header>
        <nav>
            <ul class="MenuHorizontal">
               
               
                <?php 

         
                if (isset($_SESSION["validar"])){
                  if($_SESSION["validar"]){
                   echo "<li> <a href='index.php?action=salir'>Salir</a> </li>";
                   
                 
                  } 
                }  else { 
                   ;}
                ?>
               
               
                <li><a href="Conocenos.php"> Conocenos </a> </li>
                <li><a href="Productos.php">Nuestros productos </a>  </li>
                <li><a href="Contactanos.php">Contactanos</a></li>
                
                
            

                   <ul class="MenuVertical">
                  
                
                   </ul>
           
            </ul>
        </nav>
        
        <div style="
        position: absolute;
        left: 17cm;
        top: 7cm;">
            <h2>Iniciar sesión</h2>
            <form action="login.php" method="post">
                <label for="correo">Correo:</label>
                <input type="text" id="usuario" name="usuario" required><br><br>
                
                <label for="contrasena">Contraseña:</label>
                <input type="password" id="contrasena" name="contrasena" required><br><br>
                
                <input type="submit" value="Iniciar sesión">
            </form>

                <h3>No tienes cuenta? <a href="Registro.html"><button> Crea una</button> </a> </h3>
        </div>

           
         </fieldset>


         
    </div>
    <footer style="position: absolute;
bottom: 0;
width: 38.98cm;">
    <a href="lista.html">Todos los pedidos antes de las 7:00 am se entregan el mismo dia</a>
</footer>
</body>
</html>