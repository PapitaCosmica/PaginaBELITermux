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
         <a href="Productos.php"><button style="position: absolute;
         top: 2.3cm;
         left: 31cm;">buscar</button></a> 

        </header>
        <nav>
            <ul class="MenuHorizontal">
               
            <?php 

         
              if (isset($_SESSION["validar"])){
                 if($_SESSION["validar"]){
                  
                 
                   echo "<li> <a href='salir.php'>Salir</a> </li>";
                 } 
              }  else {   echo "<li> <a href='Login(V).php?action=ingresar'>Ingresar</a> </li>";
               }
             ?>
               
                <li><a href="Conocenos.php"> Conocenos </a> </li>
                <li><a href="Productos.php">Nuestros productos </a>  </li>
                <li><a href="Contactanos.php">Contactanos</a></li>
                
                
            

                   <ul class="MenuVertical">
                  
                
                   </ul>
           
            </ul>
        </nav>


<img src="choco.vainilla.jpg" style="width: 15cm;
position: absolute;
left: 13cm;
top: 6cm;">
<p><h1 style="position: absolute;
top: 16cm;
left: 12.3cm;">"El sabor de lo tradicional en tu paladar"</h1></p>








       
    </div>
    
</body>
<footer style="position: absolute;
bottom: 0;
width: 38.98cm;">
    <a href="lista.html">Todos los pedidos antes de las 7:00 am se entregan el mismo dia</a>
</footer>
</html>