<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php
    //Rutina para consultar todos los datos de una tabla

    //1. Incluir el archivo BaseDatos.php (para poder usar la clase)
    include("BaseDatos.php");

    //2. Crear un objeto de la clase BaseDatos
    $transaccion = new BaseDatos;

    //3. Escribir una consulta SQL para buscar datos
    $consultaSQL = "SELECT * FROM usuarios WHERE 1";

    //4. Utilizar el método consultarDatos
    $usuarios = $transaccion->consultarDatos($consultaSQL);

    //print_r($usuarios);
    ?>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($usuarios as $usuario): ?>
                
                <div class="col mb-4">
                    <div class="card h-100">
                    <img src="<?= $usuario["foto"]?>" class="card-img-top" alt="fotoscard">
                        <div class="card-body">
                            <h5 class="card-title"><?= $usuario["nombre"] //Es lo mismo que <?php echo $usuario["nombre"] ?></h5>
                            <p class="card-text"><?= $usuario["descripcion"]?></p>
                            <a href="eliminarUsuarios.php?id=<?= $usuario["idUsuario"] ?>" class="btn btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>

        </div>
    
    </div>
    

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>