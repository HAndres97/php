<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Primero Pasos</title>
        <link rel="stylesheet">
    </head>
    <body>
        <?php
            echo '<h1>Hola mundo con Php</h1>';
            echo '<h2>Listado de videojuegos</h2>';
            echo "<ul>"
            . "<li>GTA</li>"
            . "<li>FIFA</li>"
            . "<li>MARIO BROS</li>"
            . "<li>DRAGON BALL</li>"
            . "</ul";
            echo '<p>Esta es una cadena '.' + '.'que sirve para ver la concatenacion con el .</p>';
            // echo <?=""? > En vez de usar echo '';
            
            //Comentario multinilinea
            /*
                Esto es un
             * comentario
             * multilinea
             *              */
            
            //Variables
            echo '<h1>Variables</h1>';
            $variable = "Hola mundo desde una variable";
            $numero= 44;
            $bool = true;
            echo "<h3>".$variable."</h3>";
            
            //Tipos De Datos
            /*
            Entero (int/integer)=99
             * Coma flotante/decimales (float/double)= 2.34
             * cadenas(String)= "String"
             * Boleano(bool)= true,false
             * null
             * array vectores, coleccion de datos
             * Objetos
             * 
             *              */
            
            //Saber que tipo de varible es
            echo gettype($numero);
            echo '<br>';
            echo gettype($bool);
            
            //Curiosidades
            //Variable nunca empieza por numero, podemos poner _ unir palabras
            

            //Debugear contenido, ver que tiene dentro
            $mi_nombre="Andres";
            echo '<br>';
            var_dump($mi_nombre);
            
            //Imprimir simbolos
            //Con comillas puedes representar simbolos no con dobles
            
            echo '<h3>Nombre de la varible $mi_nombre, con comilla simple</h3>';
            echo "<h3>Nombre de la varible $mi_nombre ,con comilla doble </h3>";
            //Salto de lineas /n, /r, /t funciona en consola solo
            
            //Escribir comillas con barra invertidaa contraria \
            echo 'Ejemplo de impresion de comilla con barra " Comillas"  ';
            
            //Constantes
            echo '<h1>Uso de Constante</h1>';
            define('nombre', "Andres Herrera");
            echo '<br>';
            echo '<h3>'.nombre.'</h3>';
            
            //Constantes Predefinidas
            echo '<h1>Uso de Constante Predefinidas</h1>';
            echo PHP_VERSION;
            echo '<br>';
            echo PHP_EXTENSION_DIR;
            echo '<br>';
            echo PHP_OS;
            echo '<br>';
            echo __LINE__;
            echo '<br>';
            echo __FILE__;
            
            
            //Operadores Aritméticos
            echo '<h1>Operadores Aritmeticos</h1>';
            $numero_1= 55;
            $numero_2= 44;
            echo '<br>';
            echo 'Suma: '.($numero_1+$numero_2);
            echo '<br>';
            echo 'Resta: '.($numero_1-$numero_2);
            echo '<br>';
            echo 'Multiplicacion: '.($numero_1*$numero_2);
            echo '<br>';
            echo 'Division: '.($numero_1/$numero_2);
            echo '<br>';
            echo 'Resto: '.($numero_1%$numero_2);
            
            
            //Operadores de incremento y decremento
            echo '<h1>Operadores de Incremento y de Decremento</h1>';
            $year= 2024;
             echo '<br>';
            echo 'Incremento: '.($year++);
             echo '<br>';
            echo 'Decremento: '.($year--);
            
            //operadores de Asignacion
            echo '<h1>Operadores de Asignación</h1>';
            echo '<br>';
            $edad = 55;
            echo $edad.'<br>';
            echo 'Simbolo de +='.($edad+=5).'<br>';
            var_dump($edad);
            echo 'Simbolo de -='.($edad-=5).'<br>';
            echo 'Simbolo de *='.($edad*=5).'<br>';
            echo 'Simbolo de /='.($edad/=5).'<br>';
            
            //Variables del servidor/superglobales
            echo '<h1>Variables del servidor/superglobales</h1>';
            echo 'Direccion IP del servidor<br>';
            echo $_SERVER['SERVER_ADDR'];
            echo '<br>Nombre del servidor<br>';
            echo $_SERVER['SERVER_NAME'];
            echo '<br>INFORMACION DEL SOFTWARE DEL servidor<br>';
            echo $_SERVER['SERVER_SOFTWARE'];
            echo '<br>Direccion del cliente<br>';
            echo $_SERVER['REMOTE_ADDR'];
            
            
            ?>
        <?='<h2>Forma abreviada de echo("<?= ?>"), te habre un php echo</h2>'?>
        <!--Comentario en Html -->
    </body>
</html>