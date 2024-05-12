<?php

//Metodo unset
if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-100);
}
//Para ver si las cookies estan borrada hay que ir a inspeccionar elemento/aplicacion y en cookies
//Redirecciona a la pagina que le pongamos
header('Location:ver_cookies.php');

