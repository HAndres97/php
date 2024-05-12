<?php
    //Enunciado
    /*

     * Crear dos variables Pais y continente, imprimirlo por pantalla ademas de decir que tipo de
     * variable se trata
     *    */
     $pais = "Spain";
     $continente ="Europa";
     echo "El pais $pais se encuentra en el continente $continente";
     echo "<br>";
     echo "El tipo de dato $pais es ". gettype($pais);
     echo "<br>";
     echo "El tipo de dato de $continente es ". gettype($continente);
     echo "<hr>";
     /*

      * Ejercicio 2
      *  Escribir un script en php que nos muestre por pantalla todo los numeros pares
      * que  hay de 1 al 100*/
     for( $i= 1; $i <= 100; $i++){
         if($i % 2 == 0){
             if($i == 100){
                 echo "$i <br>";
             }else{
                 echo "$i , ";
             }
         }
     }
     echo "<hr>";
     /*

      * Ejercicio 3
      * Escribir un programa que imprima los cuadrados de los 40 primeros naturales*/
     for($i =1; $i <= 40; $i++){
         echo "Cuadrado de $i :" .($i * $i)."<br>";
     }
     echo "<hr>";
     /*

      * Ejercicio 4
      * Recoger dos numeros por la url parametro GET,
      * Realizar operaciones basicas suma, resta, multiplicación y división*/
     
     if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
        $numero_1 = $_GET['numero1'];
        $numero_2 = $_GET['numero2'];
        echo "Suma de $numero_1 y $numero_2 es : ".($numero_1 + $numero_2)."<br>";
        echo "Resta de $numero_1 y $numero_2 es : ".($numero_1 - $numero_2)."<br>";
        echo "Multiplicación de $numero_1 y $numero_2 es : ".($numero_1 * $numero_2."<br>");
        echo "División de $numero_1 y $numero_2 es : ".($numero_1 / $numero_2)."<br>";
        
     }else{
         echo "<h2>Introduce correctamente los valores por la URL</h2>";
     }
     echo "<hr>";
     /*
     Ejercicio 5
      * Hacer un programa que muestre todos los numeros entre dos numeros que nos lleguen por 
      * la url 
      *       */
     if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
        $numero_1 = $_GET['numero1'];
        $numero_2 = $_GET['numero2'];
        
        if($numero_2 < $numero_1){
            echo"<p>Hay un intercambio de numeros</p>";
            $numero_3 = $numero_2;
            $numero_2 = $numero_1;
            $numero_1 = $numero_3;
            echo "Los numeros entre $numero_1 y $numero_2 son: ";
            for($numero_1;$numero_1<$numero_2;$numero_1++){
                echo"$numero_1,";
            }
        }else{
            echo "Los numeros entre $numero_1 y $numero_2 son: ";
            for($numero_1;$numero_1<$numero_2;$numero_1++){
                echo"$numero_1,";
            }
        }
     }else{
         echo "<h2>Introduce correctamente los valores por la URL</h2>";
     }
     echo "<hr>";
     
     /*

      * Ejercicio 6
      * Imprimir por pantall todas las tablas de multplicar del 1 al 10 dentro
      * de una tabla html*/
     for($i=1; $i <= 10;$i++ ){
        echo "<table border='1'>";
        for($j = 1 ; $j <= 10; $j++){
            echo"<tr>"
            . "<td>$j</td>"
            ."<td>*</td>"
            ."<td>$i</td>"
            ."<td>".($j * $i)."</td>"
            . "</tr>";
        }
        
        echo"</table>";
     }
     echo"<hr>";
     /*Ejercicio 7
      * Hacer un programa que muestre todos los numeros impares entre dos numeros que nos lleguen por 
      * la url 
      *       */
      if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
        $numero_1 = $_GET['numero1'];
        $numero_2 = $_GET['numero2'];
        
        if($numero_2 < $numero_1){
            echo"<p>Hay un intercambio de numeros</p>";
            $numero_3 = $numero_2;
            $numero_2 = $numero_1;
            $numero_1 = $numero_3;
            echo "Los numeros impares entre $numero_1 y $numero_2 son: ";
            for($numero_1;$numero_1<$numero_2;$numero_1++){
                if($numero_1 % 2 != 0){
                    echo"$numero_1,";
                }
                
            }
        }else{
            echo "Los numeros impares entre $numero_1 y $numero_2 son: ";
            for($numero_1;$numero_1<$numero_2;$numero_1++){
                 if($numero_1 % 2 != 0){
                    echo"$numero_1,";
                }
            }
        }
     }else{
         echo "<h2>Introduce correctamente los valores por la URL</h2>";
     }
     echo "<hr>";
    
?>

