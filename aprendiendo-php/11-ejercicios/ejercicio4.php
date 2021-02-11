<?php

/* 
 * Ejercicio 4. Recoger dos numeros por la url(Parametros Get) y hacer todas las
 * operaciones basicas de una calculadora(suma, resta, multiplicacion y division)
 * de esos dos numeros */


if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    echo "<h1>Calculadora</h1>";
    echo "Suma: ".($num1+$num2)."<br/>";
    echo "Resta: ".($num1-$num2)."<br/>";
    echo "Multiplicacion: ".($num1*$num2)."<br/>";
    echo "Division: ".($num1/$num2);
}else{
    echo "<h1>Introduce correctamente los valores por la URL</h1>";
}

