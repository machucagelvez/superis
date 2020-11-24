<?php

    //1. Para usar la clase de debe incluir el archivo donde la clase fue creada
    include("Sopa.php");

    //2. Crear un objeto de la clase Sopa
    //Todo objeto es una variable
    $ajiaco = new Sopa();

    //3. Acceder a un atributo de la clase
    $ajiaco->cantidadAgua = "2 litros"; //Asignar un valor a un atributo
    echo $ajiaco->cantidadAgua;

    //Acceder a un método de la clase
    $ajiaco->prepararSopa();

?>