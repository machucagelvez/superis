<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

   <header>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ejercicios PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
        </div>
    </nav>
    
   </header>
   <main>

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">
            
           <form action="registro2.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Edad" name="edad">
                    </div>
                <div class="row mt-5">                    
                    <label for="seleccion">Sexo</label>
                    <select class="form-control mt-4" id="seleccion" name="seleccion">
                    <option>Sí</option>
                    <option>No</option>                    
                    </select>
                </div>                    
                </div>
                <button type="submit" class="btn btn-primary mt-4" name="botonEnviar">Enviar</button>
            </form>
            


            <?php if(isset($_POST["botonEnviar"])): ?>
                <?php
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $edad = $_POST["edad"];
                $fotofeliz = "https://www.shock.co/sites/default/files/styles/galleria_amp_resize/public/content_files/2018_05/image_article/emojis_que_no_son_lo_que_parecen_.jpg?itok=kuPZjwzq";
                $fototriste = "https://media.revistagq.com/photos/5ca6019bb657101232cab583/master/w_200,c_limit/10_emojis_que_no_debes_usar_para_ligar_bajo_pena_de_morir_triste_y_solo_40458077.jpg";
                
                ?>
                <h4 class="text-primary"><?php echo $nombre; ?></h4>
                <h4 class="text-danger"><?php echo $apellido; ?></h4>
                <h4 class="text-success"><?php echo $edad; ?></h4>
                <img src="<?php if($_POST["seleccion"]=="Sí"){
                    echo $fotofeliz;
                }
                else{
                    echo $fototriste;
                } ?>" alt="perfil">
            <?php endif ?>


           </div>
       </div>
   </div>

  
   
   </main>
   <footer>
   
   </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>