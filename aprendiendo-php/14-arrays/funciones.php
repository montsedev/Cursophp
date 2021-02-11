<?php

/*
 *Funciones para arrays  
 */


$cantantes = ['2pac', 'ariana grande', 'joan','alfredo'];
$numeros = [1,2,4,5,6,8,9];
//asort($cantantes);//Ordena alfabeticamente
//arsort($cantantes);//alfabetico inverso
//Ordernar
sort($numeros);//Ordena alfabeticamente tambien numericamente
var_dump($numeros);

//Añadir elemento array
$cantantes[] = "Natos";
array_push($cantantes, "Waor");

//Elimin elementos array
array_pop($cantantes);
unset($cantantes[2]);

//Aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Dar la vuelta
var_dump(array_reverse($numeros));
echo '<hr/>';

//Buscar dentro de un array
$artista = array_search('2pac', $cantantes);
var_dump($artista);
echo '<hr/>';


//Contar numero de elementos
echo count($cantantes);
echo sizeof($numeros);









