<?php

/* 
 * Ejercicio 3. Hacer una interfaz de usuario(formulario) con dos inputs y 4 botones
 * uno para sumar, resta, dividir y multiplicar
 * 
 * isset = si existe
*/
$resultado = false;
if(isset($_POST['n1']) && isset($_POST['n2'])){
    //$resultado = false;
    if(isset($_POST['sumar'])){
        $resultado = "El resultado es: ".($_POST['n1'] + $_POST['n2']);
    }
    if(isset($_POST['restar'])){
        $resultado = "El resultado es: ".($_POST['n1'] - $_POST['n2']);
    }
    if(isset($_POST['multiplicar'])){
        $resultado = "El resultado es: ".($_POST['n1'] * $_POST['n2']);
    }
    if(isset($_POST['dividir'])){
        $resultado = "El resultado es: ".($_POST['n1'] / $_POST['n2']);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Formulario HTML</h1>
        <form action="" method="POST">            
            <label>Nùmero 1</label><br/> 
            <input type="number" name="n1" /><br/><br/>
            
            <label>Nùmero 2</label><br/>
            <input type="number" name="n2"/><br/><br/>
            
            <!--Botones-->
            <input type="submit" value="Suman" name="sumar"/>
            <input type="submit" value="Resta" name="restar"/>
            <input type="submit" value="Multiplicacion" name="multiplicar"/>
            <input type="submit" value="Dividir" name="dividir"/>            
        </form>
        <?php
            //Resultado no sea false o distinto 
            if($resultado != false):
                echo "<h2>$resultado</h2>";
            endif;
        ?>
    </body>
</html>
