<?php

/* 
 * Funciones: 
 * una funcion es un conjunto de instrucciones agrupadas bajo un nombre concreto
 * que pueden reutilizarse solamente invocando a la funcion tantas veces como queramos
 * 
 * function nombreDeMiFuncion($parametro){
 * 
 *      //Bloque o Conjunto de instrucciones
 * 
 * }
 * nombreDeMiFuncion(mi_parametro);
 * 
 */
/*
 * Una funcion siempre debe de devolver algo  return
 */


//Ejemplo
function muestraNombre() {
    echo "Montserrat <br/>";
    echo "Susana<br/>";
    echo "Francisco <br/>";
    echo "<hr/>";
}
muestraNombre();

//Ejemplo 2
/*function tabla($numero) {
    echo "<h3>Tabla de multiplicar del  numero: $numero</h3>";    
    for($i=1; $i <=10; $i++ ){
        $operacion = $numero*$i;
        echo "$numero x $i = $operacion <br/>";
    }
}*/

/*
if(isset($_GET['numero'])){
    tabla($_GET['numero']);
}else{
    echo "No hay numero para sacar la tabla";
}
*/
/*
for($i=0; $i <= 10; $i++){
    tabla($i);
}*/
//echo "<hr/>";

//Ejemplo 3 parametro/argumentos opcionales

function calculadora($numero1, $numero2, $negrita = false) {
    //conjunto de intrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $divisi = $numero1 / $numero2;
    
    $cadena_texto = "";
    
    if($negrita == true){
       $cadena_texto .=  "<h1>";
    }
    
    $cadena_texto .=  "Suma: $suma <br/>";  //$cadena_texto = $cadena_texto . "Suma: $suma <br/>";
    $cadena_texto .=  "Resta: $resta <br/>";
    $cadena_texto .=  "Multiplicación: $multi <br/>";
    $cadena_texto .=  "División: $divisi <br/>";  
        
    
    if($negrita == true){
        $cadena_texto .= "</h1>";
    }
    
    $cadena_texto .= "<hr/>";  
    
    return $cadena_texto;//terminando toda la lógica esta variable se queda con todo ese valor que se ejecuto y es asignado a la funcion calculadora
        
}
echo calculadora(15, 55, true);


//Ejemplo 4 Funciones dentro de otras

function getNombre($nombre){
    $texto = "El nombre es: $nombre";
    return $texto; 
}
function getApellidos($apellidos){
    $texto = "Los apellidos son: $apellidos";
    return $texto; 
}

function devuelveElNombre($nombre, $apellidos) {
    $texto = getNombre($nombre)
        . "<br/>".
        getApellidos($apellidos);
    return $texto;    
}
echo devuelveElNombre("Montserrat", "Vázquez Manrique");


















