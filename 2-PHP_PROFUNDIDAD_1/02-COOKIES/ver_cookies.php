<?php

/*
 *Para mostrar el valor de las cookies, tsengo que usar $_COOKIE, una variable superglobal,
 *es un array asociativo.
 *  */

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else {
    echo "No existe la variable de la cookie";
}
?>
<a href="borrar_cookies.php">Borrar mis galletas</a>
<a href="crear_cookies.php">Çrear mis galletas</a>

