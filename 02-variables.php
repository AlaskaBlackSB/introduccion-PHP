<?php include 'includes/header.php';

//Creacion de variables
$nombre = "Agner";
$_nombre = "Alexis";
$nombre_ = "Alexiss";

//Imprimir el contenido de una variable
echo $nombre;
echo $_nombre;
echo $nombre_;
var_dump($nombre);

//Constantes

//define(nombre_constante, contenido)
define('cons', "Este es el valor de la constante");

//Imprimir el valor de una constante
echo cons;

const const2 = "ola k ase";
echo const2;

include 'includes/footer.php'; 
?>