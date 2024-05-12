<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario PHP</title>
        <link rel="stylesheet">
    </head>
    <body>
       <?php
            //Condicionales
            /*IF
            if(condicion){
                instrucciones
            }else{
                otras instrucciones
            }
             * */
             $color="rojo";
             if($color == "rojo"){
                 echo "Color rojo";
             }else if($color == "verde"){
                 echo "El color no es rojo";
             }else{
                 echo "Ejemplo";
             }
             
             /*Operadores de Comparación
             
              * == igual
              * === identico compara tipo de dato tambien
              * != distinto
              * <> diferente
              * !== no identico
              * <= menor o igual
              * >= mayor o igual
              * 
             */
             
             //Operadores Logicos
             /*
              * && AND
              * || OR
              * ! NOT
              * AND OR en texto
              *                */
             //Switch Casos
             /*
              *switch($variable){
              *     case 1:
              *         echo....
              *         break;
              *     case 2:
              *         break;
              *     default:
              *         ;
              * } 
              *               */
             //Operador que GO TO Se salta la parte del codigo.
             
            goto marca;
            echo '<p>Se salta</p>';
            echo '<p>Se salta</p>';
            echo '<p>Se salta</p>';
             echo '<p>Se salta</p>';
            echo '<p>Se salta</p>';
            
            marca:
            echo '<p>No se salta, a partir de aqui continua con el codigo</p>';
             /*
              *Bucles
              *while(condicion){ Repite la ejecucion mientras se cumpla la condicion
              *     bloque de instrucciones
              * }
              * 
              *               */
            //Ejemplo
            if(isset($_GET['numero'])){ //Comprueba que haya este dato isset
                $numero = (int)$_GET['numero']; //Cambia el tipo de dato
                echo"$numero";
            }else{
                $numero =  1;
            }
            //Do While, la condicion se evalua al final de la instruccion, primero se ejecuta
            // y luego comprueba
            /*do{
                bloque de instrucciones
            }while(condicion);
  
             */
            //Bucle For
            /*for(expresion inicial,condicion, incremento contador){
                   bloque de instrucciones
            }
             * $suma=0;
             * for($i=0; $i <=100; $i++){
             *  $suma += $i
             *  echo"Suma: $suma";
             * }
             * 
             * 
             * Instruccion Break, nos permite salir de la interaccion de un bucle
             * 
             * $suma=0;
             * for($i=0; $i <=100; $i++){
             *  if($suma = 45){
             *      echo"No se puede hacer mas";
             *      break;
             * }
             *  echo"Suma: $suma";
             * }
             */
       ?>
    </body>
</html>


