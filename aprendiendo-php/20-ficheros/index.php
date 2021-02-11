<?php
/**se le va a pasar el nombre  del archivo y como lo 
 * abra osea los permisos(en modo de lectura osea en r de linux) 
 * tenemos la R de lectura la X de ejecucion y la W de escritura
 * a+ te permite leer y escribir */

//abrir archivo
//$archivo = fopen("fichero_texto.txt", "a+");
/**si deseo que me lea por completo el archivo
 * de mi documento tengo que hacer un while
 * para que no pare de recorrerlo
 */
  //leer contenido

//feof — Comprueba si el puntero a un archivo está al final del archivo
/*while (!feof($archivo)) {
        $contenido = fgets($archivo);
        echo $contenido .'<br/>' ;
}

//Escribir
fwrite($archivo, "Soy un texto metido dese PHP");

// fclose para cerrar archivo
fclose($archivo);
 */


//Copiar un fichero  y un or die cuando falle
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("error al copiar ");  

//Renombrar
//rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

//Eliminar
//unlink('archivito_recopiadito.txt') or die('error al borrar');

//file_exist pa saber si existe
if(file_exists("fichero_texto.txt")){
    echo "el archivo existe";
}else{
    echo "el archivo no existe";
}