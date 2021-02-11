<?php

/* 
 * Variables globalas: son las que se declaran fuera de una funcion y estan disponibles
 * dentro y fuera de las funciones.
 * 
 * Variables locales: son las que se definen dentro de una funcion, solo estan disponibles 
 * dentro. A no ser que hagamos un return * 
 */

// Variable global
$frase="Ni los genios son tan genios, ni los mediocres tan mediocres";

echo $frase;
function holaMundo(){
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
    
    return $year;
}
echo holaMundo();
echo '<hr/>';

//Funciones variables
function buenasDias() {
    return "<h1>Hola! Buenos días</h1>";
}
function buenasTardes(){
    return "<h1>Hey!! Que tal ha ido la comida??</h1>";
}
function buenasNoches(){
    return "<h1>¿Te vasa dormir ya? Buenas noches!!</h1>";
}
/*El nombre de una funcion se pasa a una variable*/
//$horario = "Tardes";

//pasarla por la url
$horario = $_GET['horario'];

$miFuncion = "buenas".$horario;
echo $miFuncion();
echo '<hr/>';

//Fuciones predefinidas
echo date('d-M-Y');
echo '<hr/>';
echo time();//la fecha en unix cambia 
echo '<hr/>';
//Matematicas
echo "La raiz cuadrada de: ". sqrt(10);

echo '<hr/>';

echo "Número aleatorio 10 y 40: ". rand(10,40);
echo '<hr/>';

echo "Numero PI: ". pi();
echo '<hr/>';

echo "Redondear: ". round(7.891234);
echo '<hr/>';


//Más funciones generales
$nombre = "Montse";
echo gettype($nombre);
echo '<hr/>';

if(is_string($nombre)){
    echo "Esa variable es una string <br/>";
}
if(!is_float($nombre)){
    echo "Esa variable nombre no es un numero con  decimal";
}
//isset es una funcion que devuelve si existe o no una variable
echo '<hr/>';
if (isset($edad)){
    echo 'La variable existe';
}else{
    echo 'La variable no existe';
}
echo '<hr/>';

//limpiar los espacios que puede tener una variable
$frase= "     mi contenido   ";

var_dump(trim($frase));

//eliminar variables o indice de array
$year = 2020;
unset($year);

echo '<hr/>';
//comprobar variable vacia

$text =null;
if(empty($text)){
    echo "La variable texto esta vacia";
}else{
    echo "La variable esta llena";
}

echo '<hr/>';
//Contar caracteres de un string

$cadena = "12345";
echo strlen($cadena);

echo '<hr/>';
//encontrar caracter

$frase="La vida es bella";
echo strpos($frase, "vida");

echo '<hr/>';
//Remplazar palabras de un string
$frase= str_replace("vida", "moto", $frase);
echo $frase;

echo '<hr/>';
//Mayuscula y minuscula

echo strtolower($frase);
echo '<br/>';
echo strtoupper($frase);





































