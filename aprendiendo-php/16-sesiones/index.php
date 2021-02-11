<?php

/* 
 *Sesiones: Almacena y persistir datos del usuario miestras que navega en un
 * sitio web hasta que cierre sesión o cierre el navegador.
 */

//Iniciar la sesión
session_start();

//Variable local
$variable_normal="Soy una cadena de texto";

//Variable de sesion
$_SESSION['variable_persistente']= "Hola soy una sesion activa";

echo $variable_normal."<br/>";
echo $_SESSION['variable_persistente'];