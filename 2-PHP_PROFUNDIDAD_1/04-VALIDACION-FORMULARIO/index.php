<!Doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Validacion de Formulario</title>
    </head>
    <body>
        <h1>Formulario para validar</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                echo $error;
                if($error == 'Faltan_valores'){
                    echo '<strong style="color:red">Introduce todos los datos</strong>';
                }else if($error == 'nombre'){
                     echo '<strong style="color:red">Introduce el nombre Correcto</strong>';
                }else if($error == 'apellidos'){
                     echo '<strong style="color:red">Introduce el apellido correcto</strong>';
                }else if($error == 'edad'){
                     echo '<strong style="color:red">Introduce la edad correcta</strong>';
                }else if($error == 'email'){
                     echo '<strong style="color:red">Introduce el email</strong>';
                }else if($error == 'password'){
                     echo '<strong style="color:red">Introduce password correcto</strong>';
                }
            }
        ?>
        <form action="procesar_formulario.php" method="POST">
            <label for="nombre">Nombre</label>
            <p>
                <input type="text" name="nombre" pattern="[A-Za-z ]+" required>
            </p>
            <label for="apellidos">Apellidos</label>
            <p>
                <input type="text" name="apellidos" pattern="[A-Za-z ]+" required>
            </p>
            <label for="number">Edad</label>
            <p>
                <input type="text" name="edad" pattern="[0-9]+">
            </p>
             <label for="email">Email</label>
            <p>
                <input type="email" name="email" required>
            </p>
            <label for="pass">Contraseña</label>
            <p>
                <input type="password" name="pass" minlength="5" required>
            </p>
         

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
