<?php

/* 
 * Arrays
 * 
 * Un array es una coleccion o un conjunto de datos/valores, bajo un unico nombre.
 * para acceder a esos valorres podemos usar un indice numero o alfanumerico.
 */

$pelicula = "Batman";
$peliculas = array('Batman', 'Avatar', 'El señor de los anillos','el principe');
$cantantes = ['2pac', 'ariana grande', 'joan'];

//Array Asociativo
$personas= array(
    'nombre' =>'Montse',
    'apellidos' => 'Vazquez',
    'web' => 'montsevazquez.es'
);
echo $personas['apellidos'];

/*
echo $pelicula[0];
echo '<br/>';
echo $cantantes[2];
*/

//Recorrer un array con for

echo '<h1>Listado de peliculas</h1>';

echo "<ul>";

for($i=0; $i< count($peliculas); $i++){
//count para ver el tamaño deun array
    echo "<li>".$peliculas[$i]."</li>";    
}
echo "</ul>";


echo '<h1>Listado de cantantes</h1>';
echo "<ul>";
//Recorrer con foreach es exclusivamente para recorrer arrays
foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}
echo "</ul>";

echo "<hr/>";
//Array multidimensionales

$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio.com'
    ),
    array(
        'nombre'=>'Luis',
        'email'=>'luis.com'
    ),
    array(
        'nombre'=>'Salvador',
        'email'=>'salvador.com'
    )
);
//echo $contactos[1]['nombre'];// accedo a luis
foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}

