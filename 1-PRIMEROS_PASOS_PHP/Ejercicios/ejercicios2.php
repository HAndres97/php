<?php
    //Segunda parte de ejercicios
    /*
     *
     *       */
    /*
     *Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros
     * enteros y que haga lo siguiente:
     * - Recorrerlo y mostrarlo
     * - Ordenarlo y mostrarlo
     * - Mostrar su longitud
     * - Buscar algun elemento y parametro por url ?numero=11
     *       */
     $numeros = array(2,3,4,5,6,5,3,5);
     //Funcion Recorrer
    function recorrer($numeros){
        foreach ($numeros as $numero ) {
         echo $numero.", ";
        }
        echo "<br>";
    }
     //1.Recorrerlo y mostrarlo
        recorrer($numeros);
        echo "<hr>";
    //2.Ordenarlo y mostrarlo
        asort($numeros);
        recorrer($numeros);
    
    //3.Mostrar su longitud
    
    echo"<p>Longitud del array: ".count($numeros)."</p>";
    
    //4.Buscar algun elemento
    if(isset($_GET['numero'])){
        $search = $_GET['numero'];
        $busqueda = array_search($search, $numeros);
        if(!empty($busqueda)){
           echo "<h4>El numero buscado existe en el indice $busqueda</h4>";
        }else{
            echo "<h4>No existe</h4>";
        }
    }
    echo '<hr>';
    
    /*
     *Ejercicio 2. Escribir un programa con PHP que añada valores aun array mientras
     * que su longitud sea menor a 120 y luego mostrarlo por pantalla.
     *       */
    $coleccion = array();
    for($i = 0; $i < 120; $i++){
        array_push($coleccion,$i );
    }
    foreach($coleccion as $colec){
        echo $colec.", ";
    }
     /*
     *Ejercicio 3. Programa que compruebe si una variable esta vacia y si está vacia,
      * rellenarla con texto en minusculas y mostrarla en mayasculas y negrita.
     *       */
    $variable;
    if(empty($variable)){
        echo "<p>Esta vacia</p>";
        $variable = "texto";
    }
    echo "<strong>". strtoupper($variable)."</strong>";
    
    /*
     *Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array
     * otra de tipo string,otra int y otra booleana y que imprima un mensaje
     * segun el tipo de variable que sea 
     *       */
  $matriz = array("Mundo",8);
  $prueba_texto = "Hola";
  $prueba_numro = 34;
  $prueba_bool = false;
  $matriz_total = array($matriz,$prueba_texto,$prueba_numro,$prueba_bool);
  foreach($matriz_total as $matriz_prueba){
      if(is_array($matriz_prueba)){
          echo " Es una array";
      }else if(is_bool($matriz_prueba)){
          echo $matriz_prueba." Es un booleano";
      }else if(is_string($matriz_prueba)){
          echo $matriz_prueba." Es un String";
      }else if(is_int($matriz_prueba)){
          echo $matriz_prueba." Es un numero";
      }
      echo "<br>";
  }
  /*
     *Ejercicio 5. 
     *Array con el contenido de la tabla
   * Accion Aventura Deportes
   * Gta    Assasins    Fifa 19
   * COD    Crash       PES 19
   * PUGB   P.Persia    Moto Gp 19 
   * 
   * Cada columna debe ir en un fichero separado (includes).
   *     */
  $tabla = array(
      "ACCION" => array("Gta 5","COD","Pugb"),
      "AVENTURA" => array("Assasins","Crash","P.Persia"),
      "DEPORTES" => array("Fifa 19","PES 19","Moto GP 19")
  );
  echo "<table border=1>"
  . "<tr>";
 foreach (array_keys($tabla) as $value) {
    echo "<th>$value</th>";
}
  echo "</tr>";
  echo "<tr>";
  foreach ($tabla as $value) {
    echo "<th>$value[0]</th>";
}
  echo "</tr>";
  echo "<tr>";
  foreach ($tabla as $value) {
    echo "<th>$value[1]</th>";
}
  echo "</tr>";
  require_once 'includes/footer.php';
  echo "</table>";
  
?>