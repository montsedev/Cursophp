<?php

/* 
 * Ejercicio 4. Crea un script en php que tenga 4 variables, una de tipo array
 * otra de tipo string, otra int y otra booleana y que imprima un mensaje
 * segun el tipo de varible que sea. 
 */

$nombres = array('Moises', 88);
$apellido = "Vazquez Manrique";
$edad = 24;
$soltera = true;

if(is_array($nombres)){
    echo "<h1>El array es un array</h1>";
}

if(is_string($apellido)){
    echo "<h1>$apellido</h1>";
}
if(is_integer($edad)){
    echo "<h1>$edad</h1>";
}
if(is_bool($soltera)){
    echo "<h1>El boeleano es verdadero $soltera</h1>";
}
//gettype($nombres);
