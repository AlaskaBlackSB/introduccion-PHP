<?php include 'includes/header.php';

$nombre = "    Agner :)     ";

//Obtener la longitud de una cadena
echo strlen($nombre);

echo "<br>"; //Salto de línea

var_dump($nombre);

echo "<br>"; //Salto de línea

//Eliminar espacio al inicio y al final de una cadena
$nombreSinEspacios = trim($nombre);
echo strlen($nombreSinEspacios);

echo "<br>"; //Salto de línea

//Convertir a mayúsculas
echo strtoupper($nombreSinEspacios);;

echo "<br>"; //Salto de línea

//Converir a minúsculas
echo strtolower($nombreSinEspacios);

echo "<br>"; //Salto de línea

//Reemplazar una cadena
echo str_replace(':)', 'hola', $nombreSinEspacios);

echo "<br>"; //Salto de línea

echo "<br>"; //Salto de línea

//Revisar si un String existe o no
echo strpos($nombreSinEspacios, 'Agner');

echo "<br>"; //Salto de línea

//Concatenacion de Strings
$apellido = "Amador";

echo "Hola: " . $nombre . " " . $apellido;

echo "<br>"; //Salto de línea

echo "Hola: {$nombre} {$apellido}";

include 'includes/footer.php';