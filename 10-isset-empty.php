<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Agner', 'Alexis', 'Kola');

//Empty, comprueba si un arreglo esta vacío
var_dump( empty($clientes) );

echo "<br>"; //Salto de línea

var_dump( empty($clientes2) );

echo "<br>"; //Salto de línea

var_dump( empty($clientes3) );

//Isset - Comprueba si un arreglo o propiedad esta creado

echo "<br>"; //Salto de línea

//Comprobando que el arreglo clientes4 exista
var_dump( isset($clientes4) );

echo "<br>"; //Salto de línea

//Comprobando que el arreglo clientes3 exista
var_dump( isset($clientes3) );

echo "<br>"; //Salto de línea

$cliente = [
    'nombre' => 'Agner',
    'id' => 1,
];

//Comprueba que la propiedad nombre exista en el arreglo
var_dump( isset($cliente['nombre']) );

echo "<br>"; //Salto de línea

//Comprueba que la propiedad nombre exista en el arreglo
var_dump( isset($cliente['telefono']) );

include 'includes/footer.php';