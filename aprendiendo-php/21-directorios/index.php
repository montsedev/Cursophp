<?php
//crear un directorio mkdir
if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('no se puede crear la carpeta');
}else{
    echo "Ya existe la carpeta";
}
//Borrar
//rmdir('mi_carpeta');

//opendir para abrir el directorio
echo "<hr><h1>Contenido Carpeta</h1>";
if($gestor = opendir('./mi_carpeta')){
    //mientas false sea distinto a archivo donde hay que leer
    while(false !==($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){ //es para que no nos apareca .. antes de leer
            echo $archivo."<br/>";
        }
    }
}
