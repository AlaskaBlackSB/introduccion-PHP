<?php include 'includes/header.php';

//Arreglos indexados
$carrito = [];      //Creación de un arreglo vacío
$carrito1 = array(); //Creación de un arreglo vacío

//Creación de un arreglo con contenido de
$carrito = ["Hola", "Como", "Estas", "?"];

//La etiqueta pre le da formato de impresion al arreglo
echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo "<br>"; //Salto de línea

//Acceder a un elemento en especifico del arreglo vac
echo $carrito[0];

//Agregar un elemento al arreglo en el indice 3
$carrito[3] = "nuevo";

//Añade un elemento al final del arreglo
array_push($carrito, "otro");

//Añade un elemento al inicio del arreglo
array_unshift($carrito, "Inicio");

//La etiqueta pre le da formato de impresion al arreglo
echo "<pre>";
var_dump($carrito);
echo "</pre>";

/* Crear arreglos con array() */

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');

//La etiqueta pre le da formato de impresion al arreglo
echo "<pre>";
var_dump($clientes);
echo "</pre>";

echo "<br>"; //Salto de línea

//Acceder a un elemento del arreglo
echo $clientes[0];

include 'includes/footer.php'; ?>