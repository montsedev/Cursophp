<?php

/*
 * For
 * 
 * for(expresion inicial,  condicion , incremento contador){
 *      //BLOQUE DE INSTRUCCIONES
 * }
 */
/*
 * Ejemplo 1
$resultado = 0;
for($i = 0; $i <= 100; $i++ ){
    $resultado += $i;                        es igual a             $resultado = $resultado + $i;
    echo "<p>$resultado</p>";
}
echo "<h1>El resultado es: $resultado</h1>";
*/

//Ejemplo 2 de tabla de multiplicar

//recoge el parametro por la url
if(isset($_GET['numero'])){
    //(int) es casteo de dato cambiarle el tipo
    $numero = (int)$_GET['numero']; 
} else {
    $numero = 1;
}
echo "<h1>Tabla de multiplicar del número $numero</h1>";

for ($contador = 1; $contador <=10; $contador++){
    
    if($numero == 45){
        echo "no se pueden mostrar estas operaciones";
        break;
    }
    echo "$numero x $contador = ".($numero*$contador)."<br/>";    
}