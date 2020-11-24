<?php

//Arreglos indexados
$nombres = array("arroz", "salchichas", "azucar");
$precios = array(1600, 5000, 3000);
print_r($nombres);
echo("<br>");
echo($nombres[0]);

//Arreglos asociativos
$nombresAsociativos = array("Producto1"=>"peras", "Producto2"=>"manzanas", "Producto3"=>"uvas");
echo("<br>");
print_r($nombresAsociativos);
echo("<br>");
echo($nombresAsociativos["Producto1"]);
echo("<br>");
echo("<br>");

//Estructuras de control repetitivas
//Bucles

//Ciclo for
for($centinela=0; $centinela<3; $centinela++){
    echo $nombres[$centinela];
    echo "<br>";
}

//Ciclo foreach
echo "<br>";
echo "<br>";
//$nombre es la variable temporal que se usa para hacer referencia a cada elemento del array
foreach ($nombresAsociativos as $nombre) {
    echo $nombre;
    echo "<br>";

}

?>