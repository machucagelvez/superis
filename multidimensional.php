<?php

//Arreglos de una sola dimensión:

//Arreglos indexados
$nombres = array("arroz", "salchichas", "azucar", "aceite");
$precios = array(1600, 5000, 2500, 7000);
$marca = array("Diana", "Zenú", "Incauca", "Premier");

//Arreglos multidimensionales
$productos = array(
    "producto1"=>array("nombre"=>"arroz", "precio"=>1600, "valor"=>"Diana"),
    "producto2"=>array("nombre"=>"salchicas", "precio"=>5000, "valor"=>"Zenú"),
    "producto3"=>array("nombre"=>"azucar", "precio"=>2500, "valor"=>"Incauca"),
    "producto4"=>array("nombre"=>"aceite", "precio"=>7000, "valor"=>"premier")
);
print_r($productos);
echo "<br>";
echo "<br>";
print_r($productos["producto1"]);
echo "<br>";
echo "<br>";
print_r($productos["producto1"]["precio"]);
echo "<br>";
echo "<br>";

foreach ($productos as $producto) {    
    print_r($producto["nombre"]);
    echo "<br>";
}
echo "<br>";

//Arreglo multidimensional de usuarios
//nombre-apellido-edad-teléfono-contraseña
//5 usuarios
//mostrar nombre --> contraseña

$usuarios = array(
    "usuario1"=>array("nombre"=>"Juan", "apellido"=>"Soto", "edad"=>23, "teléfono"=>123456, "contraseña"=>"123"),
    "usuario2"=>array("nombre"=>"Diana", "apellido"=>"Pérez", "edad"=>34, "teléfono"=>987654, "contraseña"=>"456"),
    "usuario3"=>array("nombre"=>"Ana", "apellido"=>"Henao", "edad"=>45, "teléfono"=>456789, "contraseña"=>"789"),
    "usuario4"=>array("nombre"=>"Carlos", "apellido"=>"Márquez", "edad"=>56, "teléfono"=>654321, "contraseña"=>"098"),
    "usuario5"=>array("nombre"=>"Andrea", "apellido"=>"Jaramillo", "edad"=>67, "teléfono"=>678123, "contraseña"=>"765")
);

foreach ($usuarios as $usuario) {    
    echo($usuario["nombre"]."-->".$usuario["contraseña"]);
    echo "<br>";
}


?>