<?php

//Cookies:Es un fichero que se almacena en el ordenador del usuario que visita la web
//con el filn de recordar datos o rastrear el comportamiento del mismo en la web.
//Distinto de sesion esta se guarda en el servidor.

//Crear Cookies

//setcookie("nombre de la cookie","Valor que solo puede ser texto",caducidad,ruta,dominio);

//Cookie Básica
setcookie("micookie", "Valor de mi galleta");

//Cookie con expiración

setcookie("unyear", "Valor de mi cookie de 375 dias", time()+(60*60*24*365));

?>
<a href="ver_cookies.php">Ver las Galletas</a>