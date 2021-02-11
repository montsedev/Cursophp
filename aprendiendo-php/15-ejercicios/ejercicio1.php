<?php

/* 
 * Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 num 
 * enteros y que haga lo siguiente:
 * -Recorrerlo y mostrarlo
 * -Ordenarlo y mostrarlo
 * -Mostrar su longitud
 * -Buscar algun elemento(buscar el parametro que me llegue por la url)
 */

//Funciones
function mostrarArray($numeros) {
    $resultado = "";
    foreach ($numeros as $numero) {
        //$resultado = $resultado.$numero."<br/>";
        $resultado .= $numero."<br/>";            
    }
    return $resultado;
}

//Crear el Array
$numeros = [13,23,9,55,5,86,48,70];

//Recorrerlo y mostrarlo
echo "<h1>Recorrerlo y mostrarlo</h1>";
echo mostrarArray($numeros);

//Ordenarlo y mostrarlo
echo "<h1>Ordernar y Mostrar</h1>";

sort($numeros);
echo mostrarArray($numeros);

//Mostrar su longitud
echo "<h1>Mostrar su longitud</h1>";
echo count($numeros);

//Buscar algun elemento
if(isset($_GET['numero'])){
        $busqueda = $_GET['numero'];
        echo "<h1>Buscar en el array el número $busqueda</h1>";

        $search = array_search($busqueda, $numeros);
        if(!empty($search)){//cuando no este vacia la busqueda encontrado algo
            echo "<h4>El número buscado existe en el array en el indice: $search</h4>";
        }else{
            echo "No existe el número buscado";
    }
}
