<?php

/* 
 * Ejercicio 1. Crear una sesión que aumente su valor en uno o disminuya en uno
 * en función de si el parametro GET Counter esta en uno o en cero.
 *  */

session_start();
    if(!isset($_SESSION['numero'])){
        $_SESSION['numero'] = 0;
    }
    if(isset($_GET['counter']) && $_GET['counter']==1){
        $_SESSION['numero']++;
    }
    if(isset($_GET['counter']) && $_GET['counter']== 0){
        $_SESSION['numero']--;
    }
?>
<h1>El valor de la sesión numero es : <?=$_SESSION['numero']?></h1>
<a href="index.php?counter=1">Aumentar el Valor </a>
<br>
<a href="index.php?counter=0">Disminur el Valor </a>
<?php
/* 
 * Ejercicio 2. 
 *  1. Una funcion
 *  2. Validar un email con filter_var
 *  3. Recoger variable por get y validarla
 *  4. Mostrar el resultado
 *  */

function validarEmail($email){
    $status = "No valido";
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    
    return $status;
}
if(isset($_GET['email'])){
    echo "<p>".validarEmail($_GET['email'])."</p>";
}else{
    echo "<p>Pasa por Get un email</p>";
}

/* 
 * Ejercicio 3. interfaz de usuario, con dos input y 4 botones , sumar, restar y dividir
 *  */
?>
<form action="index.php" method="GET">
    <input type="number" name="numero1"><br>
    <br>
    <input type="number" name="numero2"><br>
    <br>
    <input type="submit" name="sumar" value="Sumar">
    <input type="submit" name="restar" value="Restar">
    <input type="submit" name="multi" value="Multiplicar">
    <input type="submit" name="dividir" value="Dividir">
</form>
<?php
    if(isset($_GET['numero1']) &isset($_GET['numero2'])){
        $numero_1 = (int)$_GET['numero1'];
        $numero_2 = (int)$_GET['numero2'];
        if(isset($_GET['sumar'])){
            $suma= $numero_1 + $numero_2;
            echo "<p>La suma es $suma</p>";
        }else if(isset($_GET['restar'])){
            $resta= $numero_1 - $numero_2;
            echo "<p>La resta es $resta</p>";
        }else if(isset($_GET['multi'])){
            $multi= $numero_1 * $numero_2;
            echo "<p>La Multiplicacion es $multi</p>";
        }else if(isset($_GET['dividir'])){
            if($numero_1 != 0 && $numero_2 != 0){
                $division= $numero_1 / $numero_2;
                echo "<p>La Multiplicacion es $division</p>";
            }else{
                echo"<p>No se puede dividir dos numeros si son 0</p>";
            }
        }
    }else{
        echo "<h2>Coloca numeros</h2>";
    }
?>