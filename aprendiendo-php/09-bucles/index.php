<?php

/* 
 * Bucles WHILE
 * 
 * Estructura de control que itera o repite la ejecucion de una serie de instrucciones tantas veces como se
 * necesarios,en base a una condicion.
 * 
 * while(condicion){
 *      bloque de intrucciones
 *      otra instruccion
 * } 
 */
$numero = 0;

while($numero <= 100){
    echo $numero;
    if ($numero != 100) {
        echo ", ";
    }
    $numero++;
    
}

echo "<hr/>";


//Inicio del ejemplo
//isset comprueba si exite o no una variable o un dato
//ingregar o darle un numero en la url para tabla con GET como pasarlo ?numero=3

if(isset($_GET['numero'])){
    //(int) es casteo de dato cambiarle el tipo
    $numero = (int)$_GET['numero']; 
} else {
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del número $numero</h1>";

$contador = 0;

//se repite hasta que termine la condicion
while ($contador <=10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;
}
echo "<hr/>";
//fin del ejemplo

/* Do While
  * 
 * do{
 *      //bloque de instrucciones
 * }while (condicion);
 * 
 * se evalua al final de la codicion a veces es importante ejecutarlo antes de verificarlo
 * 
 */

$edad = 18; //en caso deser menos solo tendemos acceso al numero 1
$contador = 1;

do{
    echo "Tienes acceso al local privado $contador <br>";
    $contador++;
}while($edad >= 18 && $contador <= 10);

/**
 * Bucle  For
 */
/**
 * Break
 */














