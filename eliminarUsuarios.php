<?php

    include("BaseDatos.php");

    //1. Identificar o recibir el ID(PK) del usuario a eliminar
    $id = $_GET["id"];
    
    //2. Crear un objeto de la clase BaseDatos
    $transaccion = new BaseDatos();

    //3. Construir una consulta SQL para eliminar datos
    $consultaSQL = "DELETE FROM usuarios WHERE idUsuario='$id'";

    //4. Utilizar un método de la clase BD para eliminar datos
    $transaccion->eliminarDatos($consultaSQL);

?>