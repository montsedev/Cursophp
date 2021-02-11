<?php

/*
 * Ejercicio 3. Programa que compruebe si una variable esta vacia y si esta
 * vacia. rellenarla con texto en minuscula y mostrarlo en mayuscula y negritas.
 */
$texto = "";
if(empty($texto)){
    $texto = "Hola yo soy el relleno de la varible reelleno";
    $textMAYUS = strtoupper($texto);
    
    echo "<strong>$textMAYUS</strong>";
}else{
    echo 'La variable tiene este cotenido dentro: '.$texto;
}

