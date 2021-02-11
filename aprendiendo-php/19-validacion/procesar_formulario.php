<?php
//$error= true;   es opcional 
$error = 'faltan_valores';

//isset determina si una variable esta definida y no es null
//empty determina si una variable esta vacia
if( !empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
        !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass']) ){
    
    //$error = false; es opcional 
    $error = 'ok';
    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad =  $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    //Validar el nombre
    //preg_match es una expresion regular
    if( !is_string( $nombre ) && !preg_match( "/[ a-zA-Z ]+/", $nombre ) ) {
         $error = 'nombre';
    }
    //validar el apellido
    if( !is_string( $apellidos ) && !preg_match( "/[ a-zA-Z ]+/", $apellidos ) ) {
         $error = 'apellidos';
    }
    
    //validar la edad
    //filter_var — Filtra una variable con el filtro que se indique
    if( !is_int( $edad ) && !filter_var( $edad, FILTER_VALIDATE_INT ) ) {
         $error = 'edad';
    }
    
    //validar email
    if( !is_string($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error = 'email';
    }
    
    //validar password
    //strlen es para que no sea minimo a 5 de caracteres el password
    if( !is_string($pass) && strlen($pass) < 5){
         $error = 'pass';
    }
    
}else{
    //$error= TRUE; es opcional 
    $error = 'faltan_datos';
}

//para mejorar la redirección lo hacemos aparte
 if($error != 'ok') {
     header("Location:index.php?error=$error"); //nos redirigimos  
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario PHP</title>
    </head>
    <body>
        <!--vamos hacer un codicionsl que si es igual a ok entonces me muestre los datos del formulario que envia -->
        <?php if($error == 'ok'): ?>
        <h1>Datos de validación correctamente</h1>
            <p><?= $nombre ?></p>
            <p><?= $apellidos ?></p>
            <p><?= $edad ?></p>
            <p><?= $email ?></p>
        <?php endif; ?>
    </body>
</html>

