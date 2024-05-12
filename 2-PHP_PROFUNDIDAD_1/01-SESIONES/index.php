<?php
/*
 *Sesión: Almacenar y persistir datos del usuario mientras que navega en un sitio web
 * hasta que cierra sesión o cierra el navegador
 *   */

//Iniciar la sesión

session_start();

//Variable local
$variable_normal = "Cadena de texto";
//Variable de sesion, esta variable la puedo usar en cualquier parte de mi dominio.
$_SESSION['variable_persistente'] = "Sesion activa";

echo "$variable_normal <br>";
echo $_SESSION['variable_persistente'];

