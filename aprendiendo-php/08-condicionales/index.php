<?php

/* 
 *         Condicionales
 *
 *  IF(condicion){
 *      instrucciones
 * }else{
 *          otra instruccion
 * }
 * 
 */
/*
 * Operadores de comparacion  
 *  
 * == igual
 * === identico
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * > mayor que
 * <= menor igual que
 * >= mayor igual que
 * 
 */
/*
 *Operadores lógicos
 * && AND    Y
 *   ||    OR     O
 *   !    NOT  NO
 */

//ejemplo 1

$color = "rojo";

if($color == "rojo"){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}
echo "<br>";

//ejemplo 2

$year = 2019;

if($year !== 2019){
    echo 'estamos en el año 2019';
}else{
    echo 'no estamos en 2019';
}
echo "<br>";

//ejemplo 3
$nombre = "Montserrat vázquez manrique";
$ciudad = "México";
$continente = "Europa";
$edad = 24;
$mayoria_edad= 18;

if ($edad >= $mayoria_edad) {
    echo "<h1>$nombre es mayor a edad </h1>";
    
    if($continente == "Europa"){
        echo "<h2>Y es de $ciudad</h2>";
    }else{
        echo "No es europeo";
    }
}else{
    echo "<h2>$nombre No es mayor de edad</h2>";
}
echo "<hr>";

//ejemplo 4
$dia = 3;
/*
if($dia == 1){
    echo "Es lunes";
}else{
    if($dia == 2){
        echo "Es martes";
    }else{
        if($dia ==3){
            echo "Es miercoles";
        }else{
            if($dia == 4){
                echo "Es jueves";
            }else{
                if($dia == 5){
                    echo "Es viernes";
                }else{
                    echo "Es fin de semana";
                }
            }
        }
    }
}
*/
if($dia == 1){
    echo "Lunes";
}elseif($dia == 2){
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miercoles";    
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} elseif ($dia == 6) {
    echo "Es fin de semana";
}

echo "<hr/>";

//ejemplo 5
$edad1 = 18;
$edad2 = 64;
$edad_oficial = 20;

if($edad_oficial >= $edad1 && $edad_oficial <= $edad2){
    echo "Esta en edad de trabajar";
}else{
    echo "No esta en edad de trabajar";
}
echo "<hr/>";

$pais = "Mexico";

if($pais == "Mexico" ||  $pais == "España" || $pais == "Colombia"){
    echo "En este pais  se habla español";
}else{
    echo "No se habla español";
}

echo "<hr/>";


$dia1 = 4;

switch ($dia1) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5;
        echo "Viernes";
        break;
    default:
        echo "Es fin de semana";
        break;
}
echo "<hr/>";

//GOTO
goto marca;
echo "<h3>Instruccion 1</h3>";
echo "<h3>Instruccion 2</h3>";
echo "<h3>Instruccion 3</h3>";
echo "<h3>Instruccion 4</h3>";

marca:
echo "<h1>Me eh saltado 4 echos</h1>";

goto a;
echo 'Foo';
 
a:
echo 'Bar<br/>';

//ejemplo de goto en Bucle
for($i=0,$j=50; $i<100; $i++) {
  while($j--) {
    if($j==17) goto end;
  }  
}
echo "i = $i";
end:
echo 'j alcanzó 17';


?>
