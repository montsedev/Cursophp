<?php

/* 
 * Ejercicio 2. Escribir un programa con PHP que añada valores a un array
 * mientras que su longitud sea menor a 120 y luego mostrarlo por pantalla
 */

$coleccion = array();

for($i=0; $i<120; $i++){
    array_push($coleccion,"Elemento-". $i);
}
//var_dump($coleccion);//para ver todos los que agregamos
echo $coleccion[45];//para buscar un elemento

/* Mi resoucion entendi mal jaja
$apellidos = array('Vazquez','Manrique','Peña','Baez');
$adds = array_push($apellidos, "Villalobos");
$add = strlen($adds);

if(empty($add <= 10)){
    foreach ($apellidos as $apellido) {
        echo $apellido;        
    }
}else{
    echo 'Debe ser menos de 10 caracteres';
}
 * 
 */