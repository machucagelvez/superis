<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <main>
    
        <?php
            $usuarios = array(
                "usuario1"=>array("nombre"=>"Juan", "apellido"=>"Soto", "edad"=>23, "teléfono"=>123456, "contraseña"=>"123"),
                "usuario2"=>array("nombre"=>"Diana", "apellido"=>"Pérez", "edad"=>34, "teléfono"=>987654, "contraseña"=>"456"),
                "usuario3"=>array("nombre"=>"Ana", "apellido"=>"Henao", "edad"=>45, "teléfono"=>456789, "contraseña"=>"789"),
                "usuario4"=>array("nombre"=>"Carlos", "apellido"=>"Márquez", "edad"=>56, "teléfono"=>654321, "contraseña"=>"098"),
                "usuario5"=>array("nombre"=>"Andrea", "apellido"=>"Jaramillo", "edad"=>67, "teléfono"=>678123, "contraseña"=>"765")
            );
        ?>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php $contador = 1; ?>         
            <?php foreach($usuarios as $usuario): ?>            
            <tr>
            <th scope="row"><?php echo $contador ?></th>
            <td><?php echo $usuario["nombre"] ?></td>
            <td><?php echo $usuario["apellido"] ?></td>
            <td><?php echo $usuario["edad"] ?></td>
            <td><?php echo $usuario["teléfono"] ?></td>
            <td><?php echo $usuario["contraseña"] ?></td>
            </tr>
            <?php $contador = $contador + 1; ?>
            <?php endforeach ?>            
        </tbody>
        </table>



    </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>