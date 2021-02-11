<?php

/* 
 * Ejercicio 2. Escribir un script en PHP que nos muestres por pantalla todos los 
 * numeros pares que hay del 1 al 100.
 */

for($i = 1; $i <=100; $i++){   
    if($i % 2 == 0){                      //i entre 2 el resto es igual a 0
    echo $i."<br/>";
    }
}
