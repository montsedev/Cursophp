<?php

/* 
 *Ejercicio 1. Crear una sesión que aumente su valor en uno o disminuya en uno 
 * en función de si el parametro get counter está a uno o a cero   
 */

session_start();
if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}
//El counter es una palabra aleatoria que solo tranporta el dato de la url a las condicionales que 
//permiten incrementar o decrementar el valor de $_SESSION['numero'] bien pudo llamarse contador, 
//almacen etc, Brenda, seria como usar un imput con el atributo name  que solo se pasa por GET o POST
if(isset($_GET['counter']) &&  $_GET['counter'] == 1) {
    $_SESSION['numero']++;
}
if(isset($_GET['counter']) &&  $_GET['counter'] == 0) {
    $_SESSION['numero']--;
}


?>
<h1>El valor de la sesion numero es: <?=$_SESSION['numero']?> </h1>
<a href="ejercicio1.php?counter=1">Aumenta el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>
