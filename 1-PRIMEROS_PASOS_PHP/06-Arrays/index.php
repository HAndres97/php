<?php

/*
 *ARRAYS
 * Un array es una coleccion o un conjunto de datos/valores, vajo un unico nombre.
 * Para acceder a esos valores podemos usar un indice numerico o alfanumerico.  
 *  */

$peliculas = array('Batman','Spiderman','El señor de los anillos');
$cantantes = ['2pac','Drake','Jennifer Lopez'];

var_dump($cantantes);
echo "<br>";
var_dump($peliculas[0]);

//Recorrer Arrays
echo "<h2>Listado de peliculas</h2>";
echo "<ul>";
for($i=0;$i < count($peliculas); $i++){
   echo "<li>";
   echo $peliculas[$i];
   echo "</li>";
}
echo "</ul>";

echo "<h2>Listado de Cantantes</h2>";
echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>";
   echo $cantante;
   echo "</li>";
}
echo "</ul>";

// Arrays Asociativos

$personas = array(
    'nombre' => 'Andres',
    'apellidos' => 'Herrera',
    'web' => 'andresherrera.es'
);
echo "<hr>";
var_dump($personas);
echo "<br>";
var_dump($personas['apellidos']);
echo "<hr>";

//Arrays multidimensionales

$contactos = array(
    array(
        'nombre' => 'Andrés',
        'apelldos' => 'andresherrera@'
    ),
    array(
        'nombre' => 'asa',
        'apelldos' => 'aa'
    ),
    array(
        'nombre' => 'asdf',
        'apelldos' => 'asdf'
    )
);
echo "<hr>";
echo "<br>";
var_dump($contactos);
echo "<br>";
echo $contactos[1]['nombre'];
echo "<br>";
foreach ($contactos as $contacto){
    echo $contacto['nombre'];
    echo "<br>";
}
echo "<hr>";
//Funciones de Arrays

//Ordenar Arrays por orden alfabetico/numericamente sort o asort(inverso)
$numeros = [1,2,9,4,5,6,4,3,2];
echo "<br>";
asort($cantantes);
var_dump($cantantes);
echo "<br>";
sort($numeros);
var_dump($numeros);

//Añadir elemento

$cantantes[]= "Natos";
var_dump($cantantes);
echo "<br>";
array_push($cantantes,"Waor");
var_dump($cantantes);

//Eliminar elementos
echo "<br>";
array_pop($numeros);
var_dump($numeros);
echo "<br>";
unset($numeros[0]);
var_dump($numeros);

//Elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta
echo "<br>";
var_dump(array_reverse($cantantes)); // Si lo queremos al reves tenemos que guardarlo en otro variable

//Buscar dentro de un array

$resultado = array_search('Drake', $cantantes);
echo "<br>";
echo $resultado;

//Contar numero de elementos
echo "<br>";
var_dump($cantantes);
echo count($cantantes);