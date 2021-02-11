<?php

/* 
 * Constantes
 * Es un contenedor de información que no puede variar esa es la diferencia de una variable
 * define('nombre de la constante a la hora de imprimir ', 'lo que desea que se vea impreso' );
 */

define('nombre', 'Montserrat Vázquez Manrique');
define('web', 'montse.es');

echo '<h1>'.nombre.'</h1>';

/*
 * Constantes predefinidas
 */

echo __LINE__;
echo '<br/>';
echo PHP_OS;
echo '<br/>';
function holaMundo(){
echo __FUNCTION__;
}
holaMundo();




