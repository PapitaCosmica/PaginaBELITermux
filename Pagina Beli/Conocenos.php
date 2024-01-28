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
    
     ;
     echo "<li> <a href='salir.php'>Salir</a> </li>";
   } 
}  else { echo "<li> <a href='Login(V).php?action=ingresar'>Ingresar</a> </li>";}
  
?>
               
              
                <li><a href="Productos.php">Nuestros productos </a>  </li>
                <li><a href="Contactanos.php">Contactanos</a></li>
                
                
            

                   <ul class="MenuVertical">
                  
                
                   </ul>
           
            </ul>
        </nav>
        
        <div class="mamifero">
            <img  src="LogoBELI.png" class="wiwi">
            El producto a vender Galletas Patisetas se hace con la finalidad de si es un producto rentable u no. Se hará la innovación de implementar nuevos sabores como las de chocolate, naranja, etc. Y la tradicional de vainilla. Con el fin de que el consumidor no solo pueda degustar de un solo sabor sino de distintos.
            Este Trabajo lo hemos hecho con el propósito de aprender más acerca de la realización de la galleta y enterarnos de si le gusta a las personas. Al elaborar las galletas pastisetas usaremos técnicas necesarias para mantenerla en buen estado y con medidas de conservación y para el consumo de las personas. La realización de este proyecto es muy importante, debido a que, por medio de esta investigación, la empresa recolectara, analizará e incluirá la información que sea necesaria para su desarrollo, con el fin de encontrar los problemas de aquellas empresas que se dedican actualmente a la producción y comercialización de este producto de forma tradicional, para así poder solucionarlos y adaptarlos como estrategias competitivas y de diferenciación. Se identifica que las galletas al ser un producto que tiene un buen sabor puede agradar a todo el público en general.  
            Esta empresa tendrá una responsabilidad social que se reflejará en sus productos de alta calidad y la propuesta de otros sabores diferentes a los brindados por la competencia, y de esta forma beneficiando principalmente a los clientes los cuales podrán satisfacer sus necesidades de una manera más creativa, en excelentes condiciones y con un valor agregado.
            
            <p>	
                <h3>Contexto:</h3>
                En el municipio de Maravatio y/o localidad de Pomoquita:
               <h3> UBICASION GEOGRAFICA:  </h3>
                Se localiza al noreste del Estado, en las coordenadas 19º54' de latitud norte y 100º27' de longitud oeste, a una altura de 2,020 metros sobre el nivel del mar. Limita al norte con el Estado de Guanajuato y Epitacio Huerta, al este con Coatepec y Tlalpujahua, al sur con Senguio, Irimbo e Hidalgo, y al oeste con Zinapécuaro. Su distancia a la capital del Estado es de 91 kms. 
                <h3>CLIMA:  </h3>
                Su clima es templado con lluvias en verano, tiene una precipitación pluvial anual de 897.7 milímetros y temperaturas que oscilan de 14. 1º a 29.9 ºC. 
                <h3>TOPOGRAFIA:  </h3>
                Al oeste, cerros Pelón (2,800), la Capilla (2,980) y San Andrés (3,600); Al norte, el Tejocote (2,820) y al sureste, el Alto (3,120), todos pertenecientes al EVT y la DB. Nombre: Mapa topográfico Maravatio, altitud, relieve. 
               
                
               
               </p>
               <img src="Topo.jpg" style="width: 10cm;">
               <p>
                   •	Coordenadas: 19.77202 -100.61969 20.00826 -100.20687. 
                   •	Altitud mínima: 1 790 m. 
                   •	Altitud máxima: 3 640 m. 
                   •	Altitud media: 2 396 m. 
                </p>
        </div>
        

                   
    </div>
    <footer style="position: absolute;
    bottom: -15;
    width: 38.98cm;">
        <a href="lista.html">Todos los pedidos antes de las 7:00 am se entregan el mismo dia</a>
    </footer>
</body>
</html>