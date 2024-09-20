<?php

    $enlace = mysqli_connect("localhost", "root", "", "form_CV");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(
            isset($_POST['nombre']) &&
            isset($_POST['fecha']) &&
            isset($_POST['ocupacion']) &&
            isset($_POST['telefono']) &&
            isset($_POST['email']) &&
            isset($_POST['nacionalidad']) &&
            isset($_POST['nivel_ingles']) &&
            isset($_POST['lenguajes']) &&
            isset($_POST['aptitudes']) &&
            isset($_POST['habilidades']) &&
            isset($_POST['perfil']) 
        ) {
            $nombre= $_POST['nombre'];
            $fecha= $_POST['fecha'];
            $ocupacion= $_POST['ocupacion'];
            $telefono= $_POST['telefono'];
            $email= $_POST['email'];
            $nacionalidad= $_POST['nacionalidad'];
            $nivel_ingles= $_POST['nivel_ingles'];
            $lenguajes= $_POST['lenguajes'];
            $lenguajes_sep = implode(", ", $_POST['lenguajes']); 
            $aptitudes= $_POST['aptitudes'];
            $habilidades= $_POST['habilidades'];
            $habilidades_sep = implode(", ", $_POST['habilidades']); 
            $perfil= $_POST['perfil'];

            $consulta = " INSERT INTO datos(nombre, fecha, ocupacion, 
                        telefono, email, nacionalidad, nivel_ingles, 
                        lenguajes, aptitudes, habilidades, perfil)
                        VALUES ('$nombre','$fecha','$ocupacion','$telefono',
                        '$email','$nacionalidad','$nivel_ingles','$lenguajes_sep',
                        '$aptitudes','$habilidades_sep','$perfil')";
            $resul = mysqli_query($enlace, $consulta);


        } 
        else {  header("Location: index.html");  exit(); }
    }
?>