<?php
$archivo = $_FILES['archivo']; //obtiene el archivo y desde aqui puede consultar sus propiedades
$nombre = $archivo['name']; //obtiene el nombre de la imagen que vamos a subir
$tipo = $archivo['type']; //obtiene el tipo 

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image.png" || $tipo == "image/git"){
    
    //que se guarde la imagen en nuestro servidor
    //is_dir indica si el nombre de archivo no es un directorio
    if(!is_dir('image')){
        mkdir('image', 0777 );        //si no es un directorio de imagenes como permiso 0777  mkdir crea un directorio
        
    }
    //coge el archivo en la carpeta temporal y subela a mi directorio
    //se le pasa un parametro alavariable archivo porque es el nombre donde estan las imagenes temporalmente guardadas
    //con esta linea de codigo me crea mi carpeta automaticamente 
    move_uploaded_file($archivo['tmp_name'], 'images/'. $nombre);
    
    header("Refresh: 5; URL=index.php");
    echo "<h1>Imagen subida correctamente</h1>";
    
}else{
    //me haga una redireccion despues de 3 seg
    header("Refresh: 5; URL=index.php");
    echo '<h1>Sube una imagen con un formato correcto,por favor...</h1>';
}

