<?php

//Abrir archivo
$archivo = fopen("fichero_texto.txt", "a+");
    /*
     * r => Permiso de Lectura
     * x => Permiso de ejecucion
     * w => Permiso de escritura
     * a+ => Leer y escribir
     *       */
//Leer Fichero
$contenido = fgets($archivo);
//fgets solo te lee la primera linea del archivo ojooo, leer todo en un bucle
echo "<p>$contenido</p>";

//Bucle de lectura
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo "<p>$contenido</p>";
}

//Escribir dentro del archivo
fwrite($archivo, "**Texto escrito desde PHP**");
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo "<p>$contenido</p>";
}
//Cerrar Archivo
fclose($archivo);

//Copiar un fichero
copy('fichero_texto.txt','fichero_copiado.txt') or die("Error al Copiar");

//Renombrar a un fichero
rename('fichero_copiado.txt', 'archivo_recopiado.txt');

//Eliminar fichero
//unlink('archivo_recopiado.txt') or die('Error al borrar');

if(file_exists("fichero_texto.txt")){ //Comprobar si el archivo existe
    echo "<p>El archivo existe</p>";
}else{
    echo "<p>El archivo no existe</p>";
}

//Directorios
//Crear una crapeta, si no existe la carpeta creala
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta',0777) or die('No se puede crear la carpeta');
}else{
    echo "<p>Ya existe la carpeta</p>";
}
//Abrir directorios y mostrar sus paginas
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
        echo $archivo."<br>";
        }
    }
}


