<?php

class BaseDatos{

    //Datos/Variables/Atributos
    public $usuarioBD="root";
    public $passwordBD="";


    //Constructor función especial
    public function __construct(){}


    //Acciones/Funciones/Métodos
    public function conectarBD(){
        //1. Definir el DSN (info genérica de mi BD)
        //gestorBD:host=nombreServidor;dbname=nombreBD
        $infoBD="mysql:host=localhost;dbname=tiendais";      

        //2. Revisar si hay conexión con la BD
        try {
            //3. Utilizar a PDO (crear un objeto de la clasde PDO)
            $conexionBD=new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
            return($conexionBD);
            //echo "Conectado con éxito";

        } catch (PDOException $error) {
            //3.1 Manejo del error
            echo $error->getMessage(); 
        }
    }

    public function agregarDatos($consultaSQL){

        //1. Establecer una conexión con la BD
        $conexionBD = $this->conectarBD();

        //2. Preparar la consulta
        $consultaInsertarDatos = $conexionBD->prepare($consultaSQL);//prepare es un método de PDO

        //3. Ejecutar la consulta
        $resultado = $consultaInsertarDatos->execute();

        //4. Verificar el resultado
        if($resultado){
            echo "Se agregó el registro con éxito";
        }else {
            echo "Error agregando el registro";
        }
    }

    public function consultarDatos($consultaSQL){

        //1. Establecer la conexión
        $conexionBD = $this->conectarBD();

        //2. Preparar la consulta para buscar
        $consultaBuscarDatos = $conexionBD->prepare($consultaSQL);

        //3. Establecer como (en que formato) devolver los datos consultados
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        //4. Ejecutar la consulta preparada
        $resultado = $consultaBuscarDatos->execute();

        //5. Retornar los datos consultados
        return($consultaBuscarDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL){

        //1. Establecer una conexión con la BD
        $conexionBD = $this->conectarBD();

        //2. Preparar la consulta
        $consultaEliminarDatos = $conexionBD->prepare($consultaSQL);//prepare es un método de PDO

        //3. Ejecutar la consulta
        $resultado = $consultaEliminarDatos->execute();

        //4. Verificar el resultado
        if($resultado){
            echo "Se eliminó el registro con éxito";
        }else {
            echo "Error eliminando el registro";
        }

    }


}

?>