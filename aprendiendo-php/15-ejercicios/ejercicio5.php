<?php
/* 
 * Ejercicio 5. Crear un array con el contenido de la tabla:
 * Accion      Aventura      Deportes
 * GTA          Assasins       Fifa 19
 * Cod          Crash           Pes19   
 * Pugb        Prince of      Moto gp19  
 *                 persia
 * 
 * Cada fila debe ir en un fichero separado(includes). 
 */
$tabla = array(
    "ACCION" => array("GTA 5", "Call Of Duty","Pugb"),
    "AVENTURA" => array("Assasins","Crash","Prince of persia"),
    "DEPORTES"=>array("Tennis","Pes 19","Moto gb 19")
);
$categorias = array_keys($tabla);
?>
<table border="1">
    <?php require_once 'includes/encabezados.php';?>
    <?php require_once 'includes/primera.php';?>
    <?php require_once 'includes/segunda.php';?>
    <?php require_once 'includes/tercera.php';?>
    
</table>