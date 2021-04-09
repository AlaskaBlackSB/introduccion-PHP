<?php 

//Incluye el archivo header.php para que no tengas que tener que escribir el código del header en todos los archivos que componen la página web
include 'includes/header.php';
require 'includes/header.php';


/* 
    include o require agrega el contenido del archivo para que no repitas el mismo código en todos los archivos y que en un futuro que tengas que modificar código solo lo modifiques en un solo archivo.

    ¿Cuándo utilizar include?
    - cuando quieras incluir otros templates ya que include permite ejecutar codigo si marcar un warning.

    ¿Cuándo utilizar require?
    -Cuando tengas funciones criticas para el funcionamiento de la web ya que require no permite ejecutar codigo despues de marcar un error.
*/

//Incluye el archivo footer.php para que no tengas que tener que escribir el código del footer en todos los archivos que componen la página web
include 'includes/footer.php'; 
require 'includes/footer.php'; 

?>