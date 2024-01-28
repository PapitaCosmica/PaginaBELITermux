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
    
     echo "<li> <a href='Login(V).php?action=ingresar'>Ingresar</a> </li>";

   } 
}  else { 
  echo "<li> <a href='salir.php'>Salir</a> </li>";}
?>
               
                <li><a href="Conocenos.php"> Conocenos </a> </li>
                <li><a href="Productos.php">Nuestros productos </a>  </li>
                <li><a href="Contactanos.php">Contactanos</a></li>
                
                
            

                   <ul class="MenuVertical">
                  
                
                   </ul>
           
            </ul>
        </nav>
        
     <div>
       
        <div class="choco" style="position: absolute;
        left: 14.7cm;
        top: 7cm;">
            <img src="choco.vainilla.jpg" style="width: 10cm;">
            <ul>
               <legend>Pastisetas Surtidas</legend>
               <li>Precio: $30 pesos </li>
              <li>Cantidad <input type="number"><br></li>
               <a href="BELI.php"><button>Comprar</button></a>
            </ul>
        </div>
       

     </div>



  
    </div>
    <footer style="position: absolute;
    bottom: 0;
    width: 38.98cm;">
        <a href="lista.html">Todos los pedidos antes de las 7:00 am se entregan el mismo dia</a>
    </footer>
</body>
</html>