<?php
    $error = 'Faltan_valores';
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos'])&&
       !empty($_POST['edad']) && !empty($_POST['email'])&&
       !empty($_POST['pass'])){
       $error='ok';
       $nombre = $_POST['nombre'];
       $apellidos = $_POST['apellidos'];
       $edad = (int)$_POST['edad'];
       $email = $_POST['email'];
       $password = $_POST['pass'];
       
       //Validar Nombre, Si no es un String y si no es un numero    
            if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
                $error = 'nombre';
            }

            if(!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)){
                $error = 'apellidos';
            }
            
             if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
                $error = 'edad';
            }
            if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error = 'email';
            }
            if(empty($password) || strlen($password)<5){
                $error = 'password';
            }
    }else{
        header("Location:index.php?error=$error");
    }
?>

<!Doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Validacion de Formulario</title>
    </head>
    <body>
        <?php 
            if($error == 'ok'){
                echo "<h1>Datos Validados</h1>";
                echo "<p>$nombre</p>";
                echo "<p>$apellidos</p>";
                echo "<p>$edad</p>";
                echo "<p>$email</p>";
                echo "<p>$password</p>";
            }
            
        ?>
    </body>
</html>


