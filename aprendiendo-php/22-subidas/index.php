<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subir archivos PHP</title>
    </head>
    <body>
        <h1>Subir Imagenes con php</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">            
            <input type="file" name="archivo" />            
            <input type="submit" name="Enviar"/>            
        </form>
        <!--Muestro todas las imagenes que estan en mi directorio-->
        <h1>Listado de imagenes</h1>
        <?php
        $gestor = opendir('./images'); //abre el directorio
        if ($gestor) :
                  while(($image = readdir($gestor)) !==false) : //recorre la carpeta de img
                            if($image != '.' && $image != '..') :  // comprobar que la imagen no es diferente a un punto para que no lo lea 
                                      echo "<img src='images/$image' width='200px'/><br/>"; //en cada interaccion hacer un echo
                            endif;
                  endwhile;
        endif;
        ?>
    </body>
</html>