<?php include 'includes/header.php';

//Definición del arreglo
$carrito = ['PcMasterRace', 'Zapatos', 'Telefono'];

//Obtener el tamaño de un arreglo
$tam = count($carrito);
$tam2 = sizeof($carrito);

echo "Tamaño del arreglo: ".$tam;
echo "<br>Tamaño del arreglo: ".$tam2;

echo "<br>"; //Salto de línea

//in_array, busca elementos en un arreglo
var_dump( in_array('Zapatos', $carrito) );

echo "<br>"; //Salto de línea

var_dump( in_array('Reloj', $carrito) );

//Ordenar elementos de un arreglos
$numeros = array(5, 3, 4, 6, 9, 4);
sort($numeros); //Ordena de menor a mayor

echo "<br>"; //Salto de línea

echo "<pre>";
var_dump( $numeros );
echo "</pre>";

rsort($numeros); //Ordena de mayor a menor

echo "<br>"; //Salto de línea

echo "<pre>";
var_dump( $numeros );
echo "</pre>";

/* Ordernar arreglo asociativo */

$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Agner'
);

asort( $cliente );      //Ordena el arreglo asociativo por valores (ordel alfabético A-Z), primero ordena los números de menos a mayor y después los Strings de A-Z

echo "<br>"; //Salto de línea

echo "<pre>";
var_dump( $cliente );
echo "</pre>";

arsort( $cliente );      //Ordena el arreglo asociativo por valores (ordel alfabético Z-A), primero ordena los Strings de Z-A y después los números de mayor a menor

echo "<br>"; //Salto de línea

echo "<pre>";
var_dump( $cliente );
echo "</pre>";

ksort( $cliente );      //Ordena las llaves del arreglo asociativo por valores (ordel alfabético A-Z)

echo "<br>"; //Salto de línea

echo "<pre>";
var_dump( $cliente );
echo "</pre>";

krsort( $cliente );      //Ordena las llaves del arreglo asociativo por valores (ordel alfabético inverso Z-A)

echo "<br>"; //Salto de línea

echo "<pre>";
var_dump( $cliente );
echo "</pre>";

include 'includes/footer.php';