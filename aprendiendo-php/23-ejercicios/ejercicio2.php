<?php

/* 
 *Ejercicio 2.
 * 1. una función
 * 2. validar un email con filter_var
 * 3. recoger variable por get y validarla
 * 4. mostrar el resultado 
 */
/**
function validarEmail(){
    if(empty($_GET['email']) && empty($_GET['pass'])){
          echo "ingresa los datos requeridos";
          header("Refresh: 5; URL=form.html");
    }else{
         echo "<h1>".$_GET['email']."</h1>";
        echo "<h1>".$_GET['pass']."</h1>";
    }
}
validarEmail();
 */
function validarEmail($email){
    $status ="No válido";
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Válido";
    }
    return $status;
}
if(isset($_GET['email'])){
    echo validarEmail($_GET['email']);
}else{
    echo "Pasa por get un email...";
}
?>

