<?php include("datos.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous"/>
  <link rel="stylesheet" href="styleCV.css">
</head>
<body> 
    <div class="grid-container">
        <div class="encabezado">
            <img src="Imagenes/user.png" alt="Foto de perfil">
            <div class="text-container">
                <h1><?php echo $nombre; ?></h1>
                <h2><?php echo $ocupacion; ?> / <?php echo $fecha; ?></h2>
            </div>
        </div>
        <div class="lateral">
            <section class="contactInfo">
                <h3>Contacto</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $telefono  ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $email; ?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $nacionalidad; ?></span>
                    </li>
                </ul>
            </section>
            <section class="idiomas">
                <h3>Idiomas</h3>
                <p>Español: Nativo</p>
                <p>Inglés: <?php echo $nivel_ingles; ?></p>
            </section>
            <section class="aptitud">
                <h3>Aptitudes</h3>
                <ul>
                    <li><?php echo $aptitudes; ?></li>
                </ul>
            </section>
            <section class="habilidades">
                <h3>Habilidades</h3>
                <ul>
                    <?php 
                    foreach($habilidades as $habilidad){
                        echo " <li>$habilidad </li>";
                    }
                    ?>
                </ul>
            </section>
            <section class="intereses">
                <h3>Lenguajes de Programación</h3>
                <ul>
                <?php 
                    foreach($lenguajes as $lenguaje){
                        echo " <li>$lenguaje </li>";
                    }
                    ?>
                </ul>
            </section>
        </div>
        <div class="contenido">
            <section class="perfil">
                <h3>Perfil</h3>
                <p><?php echo $perfil  ?></p>
            </section>
        </div>
    </div>
</body>   
</html>