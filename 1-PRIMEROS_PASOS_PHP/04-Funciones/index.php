<?php
    /*

     * Funciones:
     * Una funcion es un conjunto de instruccuines agrupadas bajo un nombre concreto y
     * que pueden reutilizar solamente invocando a la funcion tantas veces como queramos
     *      */
     function nombreDemiFuncion(){ //Se coloca una parametro $mi_parametro
         //Bloque conjunto de instrucciones
         echo "<h1>Mostrar Funciones </h1>";
     }
     nombreDemiFuncion();
     function tabla($parametro){
             var_dump($parametro);
     }
     tabla(45);
     
     function Tabla2($numero){
         echo"<h2>Tabla de multiplicar</h2>";
         
         for($i=1;$i<10;$i++){
             $operacion = $numero * $i;
             echo "$numero x $i = $operacion<br>";
         }
     }
     
     if(isset($_GET['numero'])){
         $numero = $_GET['numero'];
         Tabla2($numero);
     }
     function calculadora($numero1, $numero2){ //Varios parametros
         $suma = $numero1 + $numero2;
         echo"Suma: $suma";
     }
     calculadora(3, 4);
     
     //Parametros opcionales
     
     function calculadora2($numero1, $numero2,$negrita=false){ //Varios parametros
        if($negrita == false){
           $suma = $numero1 + $numero2;
         echo"Suma: $suma"; 
        }
     }
     
     //Retorno
     function devuelveNombre($nombre){
         return "El nombre es: $nombre";
     }
     function devuelveApellidos($apellidos){
         return "Los apellidos son: $apellidos";
     }
     // Funciones dentro de otras
     function NombreCompleto($nombre, $apellidos){
         $texto = devuelveNombre($nombre)."<br>"
                 .devuelveApellidos($apellidos);
         return $texto;
     }
     echo NombreCompleto('Andres', 'Herrera');
     
     //Variables locales:Son las que se definen dentro denuna funcion y que no puede ser
     //usados fuera de la funcion, solo estan disponibles dentro. A no ser que hagamos un return
     
     //Variables globales:Son las que se declaran fuera de una funcion y estan disponibles dentro
     // y fuera de las funciones.
     
    $frase = "Frase global";
    function Varibleglobal(){
        global $frase; // Definirla dentro de la funcion donde se va a utilizar
        echo "<h1>$frase</h1>";
    }
    Varibleglobal();
    
    //Funciones Variables
    /*

     * function buenosDias(){
     * return "Hola,Buenos Dias";
     * }     

     * $mañana= "buenosDias"; Mirar bien como lo llama
     * echo $mañana();en el echo  lo hace con un ();
     * Concatenacion no vale con funciones variables
     *      */
    
    //Funciones Predefinidas
      //Debugear
     $nombre = "Andrés";
        var_dump($nombre);
        echo "<br>";
     //Fechas
     echo date('d-m-Y');
     echo time();
     echo "<br>";
    
     //Matemáticas
     
      echo "Raiz cuadrada de 10: ".sqrt(10);
      echo "<br>";
      echo "Número aleatorio entre 10 y 40: ".rand(10,40);
      echo "<br>";
      echo "Numero Pi: ".pi();
      echo "<br>";
      echo "Redondeo ".round(7.2304972,2); //Numero y numero de decimales que quiere que lleve
      echo "<br>";
     
    //Funciones Generales
      echo gettype($nombre);
      echo "<br>";
      if (is_string($nombre)){ //Comprobar datos
          echo "Es un String";
          echo "<br>";
      }
      
      if(isset($edad)){
          "Comprueba que existe, si existe entra";
      }
    $frases = "           mi contenido        ";
    echo trim($frases); //Limpia de espacios
    
    //Eliminar varibles/indices
    $year = 2020; 
    unset($year);
    
    //Comprobar varibles vacias
    $texto = "";//Null,false otras posibilidades
    
    if(empty($texto)){
        echo"Variable Vacia";
    }
    
    //Devuelve numero de caracteres de un string
    echo "<br>";
    $cadena = "12345";
    echo strlen($cadena);
    
    //Encontrar caracter
    
    $frase_2 = "La vida es bella";
    
    strpos($frase_2, "vida");
    
    //Reemplazar palabras
    
    $frase = str_replace("vida", "sabana", $frase_2);